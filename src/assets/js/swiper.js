
var mySwiper = new Swiper ('.swiper-container', {
    // ページネーション
    pagination: {
        el: '.swiper-pagination', 
		type: 'bullets',
		clickable: true,
	},
    // ナビゲーションボタン
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // スクロールバー
    scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
	},
});
