<!-- ヘッダーとハンバーガーメニュー -->
<header>
    <!-- webサイト名、ロゴ -->
    <a href="../user/index.php">
        <div class="p-header__logos">
            <div class="p-header__mark">
                <!-- まだ相対パスは変えていないので、ヘッダーはcomponentsからは読み込めない -->
                <img src="../assets/img/6.png" alt="ロゴ" height="90px" />
            </div>
            <div class="p-header__website-name">HarborS System</div>
        </div>
    </a>
    <div class="p-header__status">
        <!-- ステータス「入室中」「退室中」 -->
        入室中
    </div>
</header>
<!-- ハンバーガーボタン -->
<button type="button" class="Menu-CloseBtn hamburger" id="js-menu-closebtn">
    <span></span>
    <span></span>
    <span></span>
</button>
<!-- モーダルメニュー -->
<nav class="Menu" id="js-menulist">
    <ul class="Menu-Group" id="js-Menu-Group">
        <li class="Menu-Group-Item">
            <a class="Menu-Group-Item-Link" href="/">
                <span>イベント・予約一覧</span>
            </a>
        </li>
        <li class="Menu-Group-Item">
            <a class="Menu-Group-Item-Link" href="/about/">
                <span>プロフィール</span>
            </a>
        </li>
    </ul>
</nav>