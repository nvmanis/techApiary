<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../css/article.css"/>
    <title>Article</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript" src="../js/clickEvents.js"></script>
	<script type="text/javascript" src="../js/commentsData.js"></script>
	<script type="text/javascript" src="../js/comments.js"></script>
</head>

<body>
        <section id="heading">
            <a href="login.html" id="logout">Log Out</a>
            <nav id="categories">
                <img id="logo" src="../images/bee.png" alt="TechAPIary" title="TechAPIary"/>
                <a href="home.php">Home</a>
                <a href="categoryDisplay.html">Recent News</a>
                <a href="categoryDisplay.html">Mac/PC</a>
                <a href="categoryDisplay.html">Mobile</a>
                <a href="categoryDisplay.html">AR/VR</a>
                <a href="categoryDisplay.html">Gaming</a>
                <a href="categoryDisplay.html">Medical Tech</a>
                <form>
                    <input type="text" placeholder="Search for...">
                    <a href="searchResults.html">Search</a>
                </form>
            </nav>
        </section>


        <article id="content">
                <h1>The New iPhone X: Where Are the Headphone Jacks?</h1>
                <h3>By Mark Wattney</h3>
            <figure>
                <img id="articleImg" src="../images/tech.png" alt="figure" title="figure"/>
                <figcaption>A depiction of a bear, photo taken from placebear.com</figcaption>
            </figure>

            <section id="text">
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </section>

            <table>
                    <caption>Comments</caption>
                    <script>outputComments();</script>
                    <?php
                      if(isset($_POST["name"])){
                        $comment = $_POST["comment"];
                        $name = $_POST["name"];
                        echo("<tr><td><p class=comment>\"$comment\"</p><p class=user>User: $name</p></td></tr>");
                      }
                    ?>
            </table>

        </article>

        <div class="formDiv">

        <h3 id="createComment">Add A Comment:</h3>
        <form class="commentForm" action="article.php" method="post">
          <div class="commentField">
            <label for="name">Name: </label>
            <input type="text" name="name" value="" required=""/>
          </div>
          <div class="commentField">
            <label for="comment">Comment: </label>
            <input type="text" name="comment" value="" required/>
          </div>
          <div class="commentField">
            <input type='submit' value='Submit Comment' />
          </div>
        </form>

          <p id="copyright"><small>&copy Copyright TechAPIary 2018</small></p>
        </div>

</body>
