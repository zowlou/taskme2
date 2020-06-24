<?php include('assets/design/head.php'); ?>
<body>
<?php include('assets/design/menu.php'); ?>
  
    <!-- Login -->
    <div class="wrapper fadeInDown centrer">
        <div id="formContent">
            <!-- Tabs Titles -->
                <H4 class="mt-4 mb-4">Connectez-vous</h4>
            <!-- Login Form -->
            <form style="">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
            <input type="password" id="password" class="fadeIn third" name="login" placeholder="Password">
            <div>
            <input type="submit" class="fadeIn fourth btn btn-jaune text-btn mr-3" value="Log In">
            <input type="submit" class="fadeIn fourth btn btn-blanc text-btn-blanc btn-inscription" value="Inscrivez-vous !">
            </div>
            </form>
        
            <!-- Remind Passowrd -->
            <div id="formFooter">
            <a class="underlineHover" href="#">Mot de passe oublié ?</a>
            </div>
        
        </div>
    </div>


    <!-- Footer -->
    <?php include('assets/design/footer.php'); ?>
