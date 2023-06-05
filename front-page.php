<?php get_header(); ?>

<!-- main -->
    <main>
        <!-- drip-scroll -->
        <div class="drip-scroll">
            <img src="<?php echo get_template_directory_uri(); ?>/images/drip-scroll.png" alt="please scroll">
        </div>

        <!-- hero -->
        <div id="top" class="hero-wrapper">
            <!-- hero-contents -->
            <section class="hero">
                <h1>至高のひとときをあなたに</h1>
                <p class="en-text">A drink for hour of bliss to you</p>
            </section>
    
            <!-- information -->
            <?php
                $args = array(
                    'post_type' => 'post', // 投稿タイプ
                    'category_name' => 'news', // カテゴリ名(スラッグ)
                    'posts_per_page' => 3, // 表示件数
                );
                $new_query = new WP_Query($args);
            ?>
            <?php if ($new_query->have_posts()): ?>
            <div class="top-information information-wrapper wrapper fadein">
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
    
                <!-- btn / menu, access -->
                <div class="button-wrapper">
                    <button id="home-menu-btn" class="btn" type="button"><a href="#home-menu">MENU<span>メニュー</span></a></button>
                    <button id="home-access-btn" class="btn" type="button"><a href="#home-access">ACCESS<span>アクセス</span></a></button>
                    <button id="home-information-btn" class="btn" type="button"><a href="<?php echo esc_url(get_permalink(10)); ?>">NEWS<span>お知らせ</span></a></button>
                </div>
            </div>
        </div>

        <!-- concept -->
        <div id="home-concept" class="concept-wrapper">
            <!-- information -->
            <?php if (have_posts()): ?>
            <div class="mobile-information information-wrapper wrapper fadein">
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
    
                <!-- btn / menu, access -->
                <div class="button-wrapper">
                    <button id="home-menu-btn" class="btn" type="button"><a href="<?php echo esc_url(home_url()); ?>#home-menu">MENU<span>メニュー</span></a></button>
                    <button id="home-access-btn" class="btn" type="button"><a href="<?php echo esc_url(home_url()); ?>#home-access">ACCESS<span>アクセス</span></a></button>
                    <button id="home-information-btn" class="btn" type="button"><a href="<?php echo esc_url(get_permalink(10)); ?>">NEWS<span>お知らせ</span></a></button>
                </div>
            </div>

            <section class="concept">
                <!-- article -->
                <article>
                    <div class="title-side-line"><h1>CONCEPT<span>コンセプト</span></h1></div>
                    <h2>素敵な珈琲時間を</h2>
                    <p>
                        忙しない日々を過ごしていると、忘れがちな珈琲時間。頑張った自分へのご褒美に。<br>
                        こだわりのブレンドコーヒーをはじめとする、当店自慢の珈琲でゆったりとしたひとときをお過ごしください。
                    </p>
                </article>
    
                <!-- BG -->
                <div class="concept-bg">
                    <!-- images -->
                    <div class="concept-images">
                        <div class="concept-images-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/concept1.jpg" alt="生産者との関わり方">
                            <p>
                                当店では、コーヒー豆の生産者とのコミュニケーションをとても大事にしています。
                            </p>
                        </div>
                        <div class="concept-images-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/concept2.jpg" alt="焙煎時の工夫">
                            <p>
                                焙煎時には、最高の味と香りを引き出すために、それぞれの豆に合わせた焼き方を選択します。
                            </p>
                        </div>
                        <div class="concept-images-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/concept3.jpg" alt="職人のこだわり">
                            <p>
                                職人が厳選した5種類の豆をブレンドしています。
                            </p>
                        </div>
                        <div class="concept-images-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/concept4.jpg" alt="コーヒー豆の販売">
                            <p>
                                コーヒー豆は店頭でお買い求めいただけます。ご自宅でも当店の味をお楽しみください。
                            </p>
                        </div>
    
                        <!-- btn / YouTube -->
                        <div class="concept-images-item">
                            <div class="empty"></div>
                            <p><button id="youtube" class="btn" type="button"><a href="https://youtube.com" target="_blank" rel="noopener noreferrer">YouTube<span>美味しい珈琲の入れ方を見る</span></a></button></p>
                        </div>
                    </div>
    
                    <!-- back image -->
                    <div class="concept-hero">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/concept2.jpg" alt="焙煎時の工夫">
                        <div class="liner-gradient"></div>
                    </div>
                </div>
            </section>
        </div>
        
        <!-- menu -->
        <div id="home-menu" class="menu-wrapper">
            <section class="menu fadein">
                <!-- article -->
                <article>
                    <h1>Menu<span>メニュー</span></h1>
                    <h2>当店こだわりの味、ご賞味あれ</h2>
                    <p>
                        当店では一人ひとりのお客様のくつろぎのために、ゆっくり丁寧に珈琲を抽出してご提供しています。<br>
                        <br>
                        苦味とコクを感じる重厚な味わいが特徴の珈琲に、濃厚なフレッシュや砂糖を加えることで更に飲みやすくなります。<br>
                        <br>
                        飲み方によって表情を変える当店の珈琲をぜひお楽しみください。
                    </p>
                </article>

            </section>
    
            <div class="add-btn-wrapper">
                <!-- drink-type -->
                <div class="menu-drink-type-coffee"><h1>珈琲</h1></div>
                <div class="menu-drink-type-cafeaulait"><h1>カフェオレ</h1></div>                

                <!-- drink-menu -->
                <div class="drink-menu-wrapper fadein">
                    <div class="drink-menu">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/coffee1.png" alt="coffee">
                        <div class="drink-menu-content">
                            <h3>スペシャルブレンド</h3>
                            <div class="drink-description">
                                <p class="tem-type">ICE / HOT</p>
                                <p class="price">650円<span>(税込)</span></p>
                                <div></div>
                            </div>
                            <p>スッキリとした苦味の中に深い甘みが広がる、奥行きのある味わいがお楽しみいただけます。</p>
                        </div>                    
                    </div>
                    <div class="drink-menu">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/coffee2.png" alt="espresso">
                        <div class="drink-menu-content">
                            <h3>エスプレッソ</h3>
                            <div class="drink-description">
                                <p class="tem-type">ICE / HOT</p>
                                <p class="price">720円<span>(税込)</span></p>
                                <div></div>
                            </div>
                            <p>コーヒー豆の旨味を余すことなく抽出した、香り高い一杯です。</p>
                        </div>
                    </div>
                    <div class="drink-menu">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/coffee4.png" alt="cafe au lait">
                        <div class="drink-menu-content">
                            <h3>カフェオレ</h3>
                            <div class="drink-description">
                                <p class="tem-type">ICE / HOT</p>
                                <p class="price">750円<span>(税込)</span></p>
                                <div></div>
                            </div>
                            <p>エスプレッソにたっぷりのスチームミルクを注いだ、おすすめのドリンクです。</p>
                        </div>
                    </div>
                </div>

                <!-- btn / menu-page -->
                <button id="menu-page-btn" class="btn" type="button"><a href="<?php echo esc_url(get_permalink(9)); ?>">SEE OTHER MENU<span>他のメニューを見る</span></a></button>
            </div>
        </div>

        <!-- access -->
        <div id="home-access" class="access-wrapper fadein">
            <section class="access">
                <!-- article -->
                <article>
                    <h1>ACCESS<span>アクセス</span></h1>
                    <p>
                        四ツ谷駅より徒歩20分<br>
                        駐車場：あり<br>
                        <br>
                        〒123-0045<br>
                        東京都千代田区22-3
                    </p>

                    <!-- btn / Googlemap -->
                    <button id="googlemap" class="btn" type="button"><a href="https://www.google.co.jp/maps/search/%E3%82%AB%E3%83%95%E3%82%A7/@34.2486172,132.5567081,16z/data=!3m1!4b1?hl=ja" target="_blank" rel="noopener noreferrer">Googlemapで見る
                        <span>
                            <svg id="link-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <g id="link">
                                <polygon id="link-path2" points="25.63 11.1 25.63 32 0 32 0 6.37 20.9 6.37 18.67 8.6 2.23 8.6 2.23 29.77 23.4 29.77 23.4 13.33 25.63 11.1"/>
                                <rect id="link-path1" x="4.31" y="10.81" width="31.51" height="2.24" transform="translate(-2.56 17.68) rotate(-45)"/>
                                </g>
                            </svg>
                        </span></a>
                    </button>
                </article>

                <!-- open / close -->
                <article class="open-close">
                    <div></div>
                    <h2 class="open-close-line">OPEN<span>10:00 - 24:00</span></h2>
                    <h2 class="close-date">CLOSE<span>火曜・第3金曜、時々不定休</span></h2>
                    <h2 class="tel">TEL<span>012-345-6789</span></h2>
                </article>
            </section>

            <!-- back image -->
            <div class="hero access-hero"></div>
        </div>
    </main>

<?php get_footer(); ?>