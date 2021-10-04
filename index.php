<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- favicon -->
    <!-- MAMPの元のfaviconを表示しないために/Applications/MAMP/conf/apache/httpd.conf にある1行：Alias /favicon.ico "/Applications/MAMP/bin/favicon.ico"に#（コメント）にして無効化した 
    httpd.conf の名前に注意！-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon"/>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Bootstrap -->
    <!-- popper.min.jsファイルを Bootstrap javascriptの前に含むことでドロップダウンバーを使うことができる -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <title>Index</title>
</head>
<body>
    
    <?php 
        include "navbar.php"; //ナビバーファイルを追加

        //もし'page'という単語を含むURLが存在する場合は、そのphpファイルを追加する
        if(isset($_GET['page'])){
            include ($_GET['page'].'.php');
        }else{//ない場合は、home.phpを追加する
            include "home.php";
        }
        include "footer.php"; //フッターファイルを追加 
    ?>
</body>
</html>