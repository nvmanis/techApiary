<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/home.css"/>
    <title>TechAPIary</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="../js/article.js"></script>
    <script src="../js/articles.js"></script>
</head>

<body>

    <section id="heading">
        <?php
            if(isset($_GET["username"])){
                $username = $_GET["username"];
                echo("<p class=username> You are logged in as: <strong>$username</strong></p>");
            }
        ?>
        <a href="login.php" id="logout">Log Out</a>
        <nav id="categories">
            <img id="logo" src="../images/bee.png" alt="TechAPIary" title="TechAPIary"/>
            <a href="categoryDisplay.html">Recent News</a>
            <a href="categoryDisplay.html">Mac/PC</a>
            <a href="categoryDisplay.html">Mobile</a>
            <a href="categoryDisplay.html">AR/VR</a>
            <a href="categoryDisplay.html">Gaming</a>
            <a href="categoryDisplay.html">Medical Tech</a>
        </nav>
    </section>

    <div class="hero-image">
        <div class="hero-text">Welcome to TechAPIary</div>
        <button class="hero-button">Explore</button>
    </div>

    <h2 id="article-header">What's Buzzing</h2>

<div class="article-container">
    <script>
      for(let i = 0; i < articles.length; i++){
        articles[i].outputArticle();
      }
    </script>
</div>





    <p id="copyright"><small>&copy Copyright TechAPIary 2018</small></p>

</body>




</html>
