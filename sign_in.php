<h3>Sign in Form</h2>

<pre>
<?php 

    //if(!empty ($_POST))で入力がしっかりとされているか確認する。
    if(!empty ($_POST)){
        echo "Below infos are the user sign in inputs !<br>";
        //入力がされている場合、その情報を元に変数を作成する。
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];
        $email = $_POST['email'];

        echo $prenom . '<br>';
        echo $nom . '<br>';
        echo $password . '<br>';
        echo $password2 . '<br>';
        echo $email . '<br>';
    }



 
?>
</pre>


<!-- インプットフォームを作成してユーザーに必要な情報を入力してもらう
prenom / nom / mot de passe / Vérifier votre mot de passe / E-mail -->
<form action="" method="post">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Input your name"><br>

    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" placeholder="Input your family name"><br>

    <label for="password">Password</label>
    <input type="text" name="password" id="password" placeholder="Input your password"><br>

    <label for="password">Password2</label>
    <input type="text" name="password2" id="password2" placeholder="Check your password"><br>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" placeholder="Write your email">

    <input type="submit" value="send">
    
</form>



