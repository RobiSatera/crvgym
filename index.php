<?php include 'views/header.php'; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

        <div class="input-form">
            <p class="title">Sign Up</p>
            <form action="models/signup_account.php" method="POST">
                <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="gymbro@gmail.com">
                <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="gym">
                <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="bro">
                <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********">
                <label for="cpassword">Confirm Password</label>
                    <input type="password" id="cpassword" name="cpassword" placeholder="********">
                    <input type="submit" value="Signup">   
            </form>  
        </div>
<?php include 'views/footer.php'; ?>
