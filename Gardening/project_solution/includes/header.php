<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #00ff35">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.php" style="color: #663300"><span class="glyphicon glyphicon-leaf"></span>Jharana Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php" style=" color:#663300"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php" style="color:#663300"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php" style="color:#663300"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                    <?php
                } else {
                    ?>
                    <li><a href="signup.php" style="color: #663300"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"  style="color:#663300"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                    }
                    ?>
            </ul>
        </div>
    </div>
</div>