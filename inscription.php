<?php include('assets/design/head.php'); ?>
<body>
    <?php include('assets/design/menu.php'); ?>

    <!-- Body -->
    <!-- Login -->
    <div class="wrapper fadeInDown centrer">
        <div id="formContent">
            <!-- Tabs Titles -->
                <H4 class="mt-4 mb-4">Inscrivez-vous</h4>
            <!-- Login Form -->
            <form>
            <input type="text" id="login" class="fadeIn first" name="login" placeholder="Login">
            <input type="email" id="login" class="fadeIn second" name="mail" placeholder="E-mail">
            <input type="text" id="login" class="fadeIn third" name="surname" placeholder="Prénom">
            <input type="text" id="login" class="fadeIn fourth" name="name" placeholder="Nom">
            <input type="password" id="login" class="fadeIn fifth" name="password" placeholder="Password">
            <input type="password" id="login" class="fadeIn sixth" name="password" placeholder="Confirmez votre mot de passe">
            <div>
                <input type="submit" class="fadeIn seventh btn btn-jaune text-btn mt-5" value="Soumettre">
            </div>
            </form>
                
        </div>
    </div>


<!-- Footer -->
<?php include('assets/design/footer.php'); ?>
