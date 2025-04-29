<?php include 'header.inc'; ?>

<form action="process.php" method="POST">
  <!-- username field -->
  <label for="username">Username:</label>
  <input type="text" name="username" required><br>
  <!-- Password field -->
  <label for="password">Password:</label>
  <input type="password" name="password" required><br>

  <!-- hidden field -->
  <input type="hidden" name="token" value="abc123">
  <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>
