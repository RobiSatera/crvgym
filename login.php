<?php include 'views/header.php'; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        <div class="input-form">
            <p class="title">Login</p>
            <form action="models/login_account.php" method="POST">
                <?php
                    if(isset($_GET['err'])){
                        echo "<p class=\"alert\">";
                    echo "Invalid email or password";
                    echo "</p>";
                    }
                ?>
                <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="gymbro@gmail.com">   
                <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********">
                    <input type="submit" value="Login">   
            </form>  
        </div>
<?php include 'views/footer.php'; ?>
