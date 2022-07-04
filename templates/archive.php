<?php include "templates/include/header.php" ?>
<li class="nav-item"><a class="nav-link" href="./">Home</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=archive">Articles</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=contact">Contact</a></li>
</ul>
</div>
<div id="welcome">
  <h1>Articles</h1>
</div>
<ul id="headlines" class="archive">

  <?php foreach ($results['articles'] as $article) { ?>

    <li>
      <h2>
        <span class="pubDate"><?php echo date('j F Y', $article->publicationDate) ?></span><a href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
      </h2>
      <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
    </li>

  <?php } ?>

</ul>

<p><?php echo $results['totalRows'] ?> article<?php echo ($results['totalRows'] != 1) ? 's' : '' ?> in total.</p>

<button style="margin-bottom:80px;"><a href="./">Return to Homepage</a></button>

<?php include "templates/include/footer.php" ?>