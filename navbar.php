<!-- BOOTSWATCH Theme LUX を使用-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="?page=home">
            <!--height="45"でブランドロゴサイズを変更 -->
            <img src="assets/img/school_icon.png" alt="French School" height="45">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
        <!-- ms-autoでナビアイテムが右側に移動-->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="?page=level_test">TEST DE NIVEAU</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=about">QUI SOMMES-NOUS?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=sign_in">S'INSCRIRE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=login">CONNEXION</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">COURS DE FRANÇAIS</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="index.php?page=biginner">DÉBUTANT</a>
                    <a class="dropdown-item" href="index.php?page=intermediate">INTERMÉDIAIRE</a>
                    <a class="dropdown-item" href="index.php?page=advanced">AVANCÉ</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
            <!-- dropstartを追加してドロップダウンが画面から切れないように変更 -->
            <li class="nav-item dropdown dropstart">
                <!-- dropdown-toggle を消すことでBootstrapのタグルバー自動で付いている矢印（La Flèche）を消した-->
                <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search"></i>
                </a>
                <div class="dropdown-menu">
                    <form class="d-flex">
                        <input class="form-control me-sm-2 search-dropdown" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0 serach_btn" type="submit">chercher</button>
                    </form>
                </div>
            </li>
        </ul>
</nav> 
