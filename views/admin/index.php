<h1>ADMIN</h1>

<div class="add">
    <a class="add__button" href='/admin/createHighschool'>Voeg nieuwe hogeschool toe </a>
    <a class="add__button" href='/admin/createUniversity'>Voeg nieuwe universiteit toe </a>
    <a class="add__button" href='/admin/createCourse'>Voeg nieuwe opleiding toe </a>

</div>


<div>
    <h2>
        Statistiek:
    </h2>
    <p>Hoeveelheid hogescholen: <strong><?=count($highschools)?></strong></p>
    <p>Hoeveelheid universiteiten: <strong><?=count($universities)?></strong></p>
</div>

<h2>
    Scholen:
</h2>


<? foreach ($highschools as $highschool){
    ?>
    <div class="school">
        <div class="img__container">
            <img src="<?=BASE_URL?>/assets/img/<?=$highschool['image']?>" alt="" />
        </div>
        <div class="school__desc">
            <p><?= $highschool['name'] ?></p>
            <p><?= $highschool['description'] ?></p> 
            <p><?= $highschool['location'] ?></p> 
        </div>
        <form method="POST" class="button">
            <a class="button__update" href="/admin/updateHighschool/<?=$highschool['highschool_id'] ?>">Aanpassen</a>
            <button class="button__danger" type="submit" name="deletehs" value="<?=$highschool['highschool_id'] ?>">Verwijderen</button>
        </form>
    </div>
    <?

}

foreach ($universities as $university){
    ?>
    <div class="school">
        <div class="img__container">
            <img src="<?=BASE_URL?>/assets/img/<?=$university['image']?>" alt="" />
        </div>
        <div class="school__desc">
            <p><?= $university['name'] ?></p>
            <p><?= $university['description'] ?></p> 
            <p><?= $university['location'] ?></p> 
        </div>
            <form method="POST" class="button">
                <a class="button__update" href="/admin/updateUniversity/<?=$university['id'] ?>">Aanpassen</a>
                <button class="button__danger"type="submit" name="deleteuni" value="<?=$university['d'] ?>">Verwijderen</button>
            </form>
    </div>
        
    <?
}

foreach ($courses as $course){
    ?>
    <div class="school">
        <div class="img__container">
            <img src="<?=BASE_URL?>/assets/img/<?=$course['image']?>" alt="" />
        </div>
        <div class="school__desc">
            <p><?= $course['name'] ?></p>
            <p><?= $course['description'] ?></p> 
            <p><?= $course['duration'] ?></p> 
        </div>
        <form method="POST" class="button">
                <a class="button__update" href="/admin/updateCourse/<?=$course['id'] ?>">Aanpassen</a>
                <button class="button__danger"type="submit" name="deletecourse" value="<?=$course['d'] ?>">Verwijderen</button>
            </form>
    </div>
        
    <?
}

?>
