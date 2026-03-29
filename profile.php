<?php include 'views/header.php'; ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">

<div class="container">
    <div class="banner">
        <div class="pro-pic">
        </div>
        <div class="banner-name">
        <?= $_SESSION['firstname']."".$_SESSION['lastname'];?>
        </div>
    </div>

    <div class="post-container">
    <form id="post-form" action="models/add_post.php" method="POST">
        <textarea id="post-area" name="post-area" placeholder="Tell us your grind!"></textarea>
        <input type="submit" id="post-button" value="post">
    </form>

    <div class="posts">
        <?php
        include 'models/load_user_post.php';
        ?>
    </div>
    </div>
</div>
<?php include 'views/footer.php'; 
