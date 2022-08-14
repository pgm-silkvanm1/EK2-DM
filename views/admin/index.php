<h1>ADMIN</h1>

<a href='/admin/createHighschool'>Voeg nieuwe hogeschool toe </a>
<br>
<a href='/admin/createUniversity'>Voeg nieuwe universiteit toe </a>


<div>
    <p>Hoeveelheid hogescholen: <?=count($highschools)?></p>
    <p>Hoeveelheid universiteiten: <?=count($universities)?></p>
</div>


<? foreach ($highschools as $highschool){
    ?>
    <img src="<?=BASE_URL?>/assets/img/<?=$highschool['image']?>" alt="" />
    <p><?= $highschool['name'] ?></p>
    <p><?= $highschool['description'] ?></p> 
    <p><?= $highschool['location'] ?></p> 
    <form method="POST">
        <button type="submit" name="deletehs" value="<?=$highschool['highschool_id'] ?>">Verwijderen</button>
        <a href="/admin/updateHighschool/<?=$highschool['highschool_id'] ?>">Aanpassen</a>
    </form>
    <?

}

foreach ($universities as $university){
    ?>
    <img src="<?=BASE_URL?>/assets/img/<?=$university['image']?>" alt="" />
    <p><?= $university['name'] ?></p>
    <p><?= $university['description'] ?></p> 
    <p><?= $university['location'] ?></p>
    <form method="POST"></form>
        <button type="submit" name="deleteuni" value="<?=$university['id'] ?>">Verwijderen</button>
        <a href="/admin/updateUniversity/<?=$university['id'] ?>">Aanpassen</a>
    </form>
    <?

}



?>
