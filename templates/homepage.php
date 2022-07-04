<?php include "templates/include/header.php" ?>
<li class="nav-item"><a class="nav-link" href="./">Home</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=archive">Articles</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=contact">Contact</a></li>
</ul>
</div>
<div id="welcome">
  <h1>Home</h1>
  <p>Welcome to Food Spot!</p>
  <p>Here you can find food recipes for your breakfast, lunch, dinner or even snack recipes.</p>
  <p>Are you vegan? Do not worry, because we will have some recipes for you as well.</p>
  <img src="https://images.pexels.com/photos/5908252/pexels-photo-5908252.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="cooking" width="800" /></br></br>
  <h2>Articles</h2></br>
</div>

<ul id="headlines" style="margin-bottom:80px;">

  <?php foreach ($results['articles'] as $article) { ?>

    <li>
      <h3>
        <span class="pubDate"><?php echo date('j F', $article->publicationDate) ?></span><a class="article" href=".?action=viewArticle&amp;articleId=<?php echo $article->id ?>"><?php echo htmlspecialchars($article->title) ?></a>
      </h3>
      <p class="summary"><?php echo htmlspecialchars($article->summary) ?></p>
    </li>

  <?php } ?>

</ul>

<?php include "templates/include/footer.php" ?>