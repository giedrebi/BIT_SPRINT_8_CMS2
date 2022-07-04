<?php include "templates/include/header.php" ?>
<li class="nav-item"><a class="nav-link" href="./">Home</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=archive">Articles</a></li>
<li class="nav-item"><a class="nav-link" href="./?action=contact">Contact</a></li>
</ul>
</div>
<div id=artpage>
    <div><?php echo $results['article']->content ?></div>
    <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate) ?></p>
</div>
<button style="margin-bottom:60px;"><a href="./">Return to Homepage</a></button>

<?php include "templates/include/footer.php" ?>