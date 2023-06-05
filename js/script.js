'use strict';

/*
お知らせ id="home-concept"の位置の変更
================================================== */
document.addEventListener('DOMContentLoaded', () => {
    if (document.body.classList.contains('home') === true && window.innerWidth < 1600) {
    const removeItem = document.querySelector('.home .concept-wrapper');
    const setItem = document.querySelector('.home .concept');

    removeItem.removeAttribute('id');
    setItem.setAttribute('id', 'home-concept');
    }
});

/*
ローディング画面
================================================== */
if (document.body.classList.contains('single') !== true) {
        window.addEventListener('load', () => {
        const loading = document.querySelector('.drip-loading');
        const bg = document.querySelector('.loading-bg')

        loading.animate(
            {
                opacity: 0,
                visibility: 'hidden',
            },
            {
                delay: 4000,
                duration: 2000,
                easing: 'ease-in',
                fill: 'forwards',
            }
        );

        bg.animate(
            {
                transform: 'translate(0, -100dvh)',
                opacity: 0,
                visibility: 'hidden',
            },
            {
                delay: 3000,
                duration: 4000,
                easing: 'ease-in-out',
                fill: 'forwards',
            }
        ); 
    });
}

/*
スライドメニュー
================================================== */
const dripSlideOpen = document.querySelector('#fiction-open');
const dripSlideClose = document.querySelector('#fiction-close');
const closeSlideMenu = () => {
    const slideMenuArea = document.querySelector('.beans-slide-menu-area');
    const width = window.innerWidth;
    const options = {
        duration: 600,
        easing: 'ease-in',
        fill: 'forwards',
    }

    if(width < 720) {
        slideMenuArea.animate(
            {
                transform: 'translate(100dvw, 0)'
            },
            options
        );
    } else {
        slideMenuArea.animate(
            {
                transform: 'translate(400px, 0)'
            },
            options
        );
    }
};

/* Open */
dripSlideOpen.addEventListener('click', () => {
    const slideMenuArea = document.querySelector('.beans-slide-menu-area');
    const options = {
        duration: 600,
        easing: 'ease-out',
        fill: 'forwards',
    };

    slideMenuArea.animate(
        {
            transform: 'translate(0, 0)'
        },
        options
    );
});

/* Close */
dripSlideClose.addEventListener('click', () => {
    closeSlideMenu();
});

/* メニュー項目のリンクをクリックしたらメニューを閉じる */
const menuLinks = document.querySelectorAll('.fiction-menu-item a');
menuLinks.forEach((link) => {
    link.addEventListener('click', () => {
        closeSlideMenu();
    });
});

/*
CONCEPT イメージ切り替え
================================================== */
const mainImage = document.querySelector('.concept-hero img');
const thumbImages = document.querySelectorAll('.concept-images-item img');

// thumbImagesにフォーカスされたらメインイメージを切り替える
thumbImages.forEach((thumbImage) => {

    thumbImage.addEventListener('mouseover', (event) => {
        mainImage.src = event.target.src;
        mainImage.animate(
            {
                opacity: [0, 1],
                filter: ['blur(6px)', 'blur(0)'],
            },
            {
                duration: 1000,
                easing: 'ease-out',
                fill: 'forwards',
            }
        );
    });

    thumbImage.addEventListener('click', (event) => {
        mainImage.src = event.target.src;
        mainImage.animate(
            {
                opacity: [0, 1],
                filter: ['blur(6px)', 'blur(0)'],
            },
            {
                duration: 1000,
                easing: 'ease-out',
                fill: 'forwards',
            }
        );
    });
});

/*
フェードインアニメーション
================================================== */
// 監視対象が現れたら実行する関数
const fadeinAnimation = (entries, obs) => {
    entries.forEach((entry, index) => {

        if (entry.target.classList && entry.target.classList.contains('top-information')) {
                        entry.target.animate(
                {
                    opacity: [0, 1],
                    transform: ['translate(0, -3rem)', 'translate(0, 0)'],
                },
                {
                    duration: 1000,
                    delay: 6000,
                    easing: 'ease-out',
                    fill: 'forwards',
                }
            );
            obs.unobserve(entry.target);
        } else if (entry.intersectionRatio >= .3) {
            entry.target.animate(
                {
                    opacity: [0, 1],
                    transform: ['translate(0, -3rem)', 'translate(0, 0)'],
                },
                {
                    duration: 1000,
                    easing: 'ease-out',
                    fill: 'forwards',
                }
            );
            obs.unobserve(entry.target);
        }
    });
};

// 監視ロボットの設定
const fadeinObserver = new IntersectionObserver(
    fadeinAnimation,
    {
        threshold: .3,
    }
);

// .fadein を監視するよう指示
const fadeinElements = document.querySelectorAll('.fadein');
    fadeinElements.forEach((fadeinElement) => {
    fadeinObserver.observe(fadeinElement);
});
