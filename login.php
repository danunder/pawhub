<?php
  include_once 'header.php'
  ?>
  <section class="login-form">
      <h1>Log In</h1>
      <div class="login-form-form">
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="username" placeholder="Your name, or your owner's email address">
          <input type="password" name="password" placeholder="A secret word only you know. Don't tell the cat!">
          <button type="submit" name="submit">Log In</button>
        </form>
      </div>
       <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyInput") {
        echo "<p>Fill in all fields PLEASE</p>";
      }
      else if ($_GET["error"] == "wrongLogin") {
        echo "<p>Your credentials SUCK. try again.</p>";
      }
      else if ($_GET["error"] == "none") {
        echo "<p>YOU DID IT</p>";
      }
    }
    ?>
  </section>

<?php
  include_once 'footer.php'
  ?>