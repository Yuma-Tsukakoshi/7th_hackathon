// ハンバーガーメニューのボタン要素を取得
// const menu = document.querySelectorAll;
const menuButton = document.getElementById("js-menu-closebtn");


// メニューグループ要素を取得
const menuGroup = document.getElementById("js-Menu-Group");

// メニューボタンがクリックされたときの処理を定義
menuButton.addEventListener('click', () => {
  // メニューグループのactiveクラスをトグルする
    console.log('クリックされました');
    menuGroup.classList.toggle('active');
});