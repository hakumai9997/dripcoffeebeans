<?php get_header(); ?>

<!-- main -->
<main>
    <?php
        $cat = get_the_category(); // カテゴリを取得
        $cat = $cat[0];
    ?>
    <?php if (have_posts()): ?>
    <!-- hero -->
    <div id="top" class="hero-wrapper page-hero-wrapper">
        <h1><?php echo strtoupper($cat->slug); ?></h1>
    </div>
    
    <div class="single-info-wrapper">
        <!-- information -->
        <div class="information-wrapper wrapper single-info fadein">
            <div class="information">
                <?php while (have_posts()): the_post(); ?>
                    <div class="information-item" id="post-<?php the_ID(); ?>">
                        <h2><?php the_title(); ?></h2>
                        <p class="information-contents"><?php the_content(); ?></p>
                        <time class="information-date" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("Y年m月d日"); ?></time>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

        <!-- other information -->
        <?php
            $args = array(
                'post_type' => 'post', // 投稿タイプ
                'category_name' => 'news', // カテゴリ名(スラッグ)
                'posts_per_page' => 3, // 表示件数
            );
            $new_query = new WP_Query($args);
        ?>
        <?php if ($new_query->have_posts()): ?>
        <div class="information-wrapper wrapper other-info fadein">
            <div class="information">
                <h2>お知らせをもっと見る</h2>
                <?php while ($new_query->have_posts()): $new_query->the_post(); ?>
                    <div id="post-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>" class="information-item">
                            <time class="information-date" datetime="<?php the_time("Y-m-d"); ?>"><?php the_time("Y年m月d日"); ?></time>
                            <p class="information-contents"><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                    endif;
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>