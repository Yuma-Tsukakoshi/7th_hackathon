// ハンバーガーメニューのボタン要素を取得
// const menu = document.querySelectorAll;
const menuButton = document.getElementById("js-menu-closebtn");


// メニューグループ要素を取得
const menuGroup = document.getElementById("js-Menu-Group");

// メニュー要素を取得
const menuList = document.getElementById("js-menulist");

// メニューボタンがクリックされたときの処理を定義
menuButton.addEventListener('click', () => {
  // メニューグループのactiveクラスをトグルする
    menuGroup.classList.toggle('active');
    menuList.classList.toggle('active');
});