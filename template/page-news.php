<?php /* Template Name: news */ ?>
<?php get_header(); ?>

<!-- main -->
<main>
    <!-- hero -->
    <div id="top" class="hero-wrapper page-hero-wrapper">
        <h1>NEWS</h1>
    </div>
    
    <!-- information -->
    <?php
        $args = array(
            'post_type' => 'post', // 投稿タイプ
            'category_name' => 'news', // カテゴリ名(スラッグ)
            'posts_per_page' => 10, // 表示件数
        );
        $new_query = new WP_Query($args);
    ?>
    <?php if ($new_query->have_posts()): ?>
    <div class="information-wrapper wrapper fadein">
        <div class="information">
            <h2>お知らせ</h2>
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
</main>

<?php get_footer(); ?>