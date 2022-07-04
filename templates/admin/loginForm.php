<?php include "templates/include/header.php" ?>
</ul>
</div>
</div>

<form class="login" action="admin.php?action=login" method="post" style="width: 50%;">
  <input type="hidden" name="login" value="true" />

  <?php if (isset($results['errorMessage'])) { ?>
    <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
  <?php } ?>

  <label for="username">Username</label>
  <input type="text" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" /></br></br>

  <label for="password">Password</label>
  <input type="password" name="password" id="password" placeholder="Your admin password" required maxlength="20" /></br>

  <div>
    <input class="button" type="submit" name="login" value="Login" />
  </div>

</form>

<?php include "templates/include/footer.php" ?>