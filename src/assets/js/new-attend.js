'use strict';

// 要素取得
// アンカーの下のボタン
// ボタンの見た目を所得
const btn = document.getElementById('js-attend_button');
// ボタンの文字を取得
const text = document.getElementById('js-attend_text');

// ヘッダー
// ヘッダーのステータス欄を取得
const headerStatus = document.getElementById('js-header_status');

// アンカーの下のボタン
text.addEventListener('click', () => {
    const newText = text.classList.toggle('active') ? '入室する' : '退室する';
    text.textContent = newText;
    // ヘッダー
    headerStatus.classList.toggle('active');
    console.log('クリックされました');
});