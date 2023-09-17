'use strict';

// 要素取得
// アンカーの下のボタン
// ボタンの見た目を所得
const btn = document.getElementById('js-attend_button');
// ボタンの文字を取得
const text = document.getElementById('js-attend_text');

// ヘッダーのステータス欄を取得
// 色
const headerStatus = document.getElementById('js-header_status');
// テキスト
const headerText = document.getElementById('js-header_statusText');

// アンカーの下のボタン
text.addEventListener('click', () => {
    const newText = text.classList.toggle('active') ? '退室する' : '入室する';
    text.textContent = newText;
    // ヘッダー
    const newStatus = headerText.classList.toggle('active') ? '入室中' : '退室中';
    headerText.textContent = newStatus;
    headerStatus.classList.toggle('active');
});