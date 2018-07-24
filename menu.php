<link href="/library/stylesheets/style.css" type="text/css" rel="stylesheet" />
<div class="contain-to-grid">
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="/Library/index.php">Obaid Library</a></h1>
    </li>
    <li class="toggle-topbar menu-icon">
      <a href="#">
        <span>Menu</span>
      </a>
    </li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
        <li class=""><a href="/Library/books.php">Books</a></li>

        <li class=""><a href="/Library/howto.html">HOW-TO USE</a></li>
        <li class=""><a href="/Library/users.php">USERS</a></li>
        <li class=""><a href="/Library/admin/">Admin</a></li>
        <li class=""><a href="/Library/signup.php">Sign Up</a></li>

        <li class=""><a href="/Library/newbook.php ">New Book</a></li>
        <?php

          if(isset($_SESSION["user_login"])){
            echo '<li class=""><a href="/Library/logout.php ">Log out</a></li>';
          }
        
        ?>
    </ul>

  </section>
</nav>
</div>