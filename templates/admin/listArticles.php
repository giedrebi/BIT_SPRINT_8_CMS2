<?php include "templates/include/header.php" ?>
</ul>
</div>
</div>
<button style="margin-top:20px;"><a href="admin.php?action=logout" ?>Log out</a></button>
<div id="welcome">
  <h1>Food Spot Recipes Admin</h1>
  <h3>All Articles</h3>
</div>


<?php if (isset($results['errorMessage'])) { ?>
  <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>


<?php if (isset($results['statusMessage'])) { ?>
  <div class="statusMessage"><?php echo $results['statusMessage'] ?></div>
<?php } ?>

<table>
  <tr>
    <th>Publication Date</th>
    <th>Article's title</th>
  </tr>

  <?php foreach ($results['articles'] as $article) { ?>

    <tr onclick="location='admin.php?action=editArticle&amp;articleId=<?php echo $article->id ?>'">
      <td><?php echo date('j M Y', $article->publicationDate) ?></td>
      <td>
        <?php echo $article->title ?>
      </td>
    </tr>

  <?php } ?>

</table>

<p><?php echo $results['totalRows'] ?> article<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>

<button><a href="admin.php?action=newArticle">Add New Article</a></button>

<?php include "templates/include/footer.php" ?>