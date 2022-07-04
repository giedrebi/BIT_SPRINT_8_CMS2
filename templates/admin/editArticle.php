<?php include "templates/include/header.php" ?>
</ul>
</div>
</div>
<button style="margin-top:20px;"><a href="admin.php?action=logout" ?>Log out</a></button>
<div id="welcome">
  <h2>Food Spot Recipes Admin</h2>
  <h3><?php echo $results['pageTitle'] ?></h3>
</div>

<form id="editform" action="admin.php?action=<?php echo $results['formAction'] ?>" method="post">
  <input type="hidden" name="articleId" value="<?php echo $results['article']->id ?>" />

  <?php if (isset($results['errorMessage'])) { ?>
    <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
  <?php } ?>

  <ul>

    <li>
      <label for="title">Article's Title</label>
      <input type="text" name="title" id="title" placeholder="Name of the article" required autofocus maxlength="255" value="<?php echo htmlspecialchars($results['article']->title) ?>" />
    </li>

    <li>
      <label for="summary">Article's Summary</label>
      <textarea name="summary" id="summary" placeholder="Brief description of the article" required maxlength="1000" style="height: 5em;"><?php echo htmlspecialchars($results['article']->summary) ?></textarea>
    </li>

    <li>
      <label for="content">Article's Content</label>
      <textarea name="content" id="content" placeholder="The HTML content of the article" required maxlength="100000" style="height: 30em;"><?php echo htmlspecialchars($results['article']->content) ?></textarea>
    </li>

    <li>
      <label for="publicationDate">Publication Date</label>
      <input type="date" name="publicationDate" id="publicationDate" placeholder="YYYY-MM-DD" required maxlength="10" value="<?php echo $results['article']->publicationDate ? date("Y-m-d", $results['article']->publicationDate) : "" ?>" />
    </li>


  </ul>

  <div class="buttons">
    <input type="submit" name="saveChanges" value="Save Changes" />
    <input type="submit" formnovalidate name="cancel" value="Cancel" />
  </div>

</form>

<?php if ($results['article']->id) { ?>
  <p><a href="admin.php?action=deleteArticle&amp;articleId=<?php echo $results['article']->id ?>" onclick="return confirm('Delete This Article?')">Delete This Article</a></p>
<?php } ?>

<?php include "templates/include/footer.php" ?>