<h1>index pagina van de highschool</h1>
<a href="/">Home</a>

<?php

foreach ($highschools as $article) {
    ?>
    <h2><?=$article["name"]?></h2>
    <?php if ($article["description"]) {
    ?>
    <h2><?=$article["description"]?></h2>
    <?php
    }?>
    <h2><?=$article["location"]?></h2>
    <?php
};