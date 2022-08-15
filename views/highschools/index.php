<h1>Hogescholen</h1>

<? foreach ($highschools as $highschool){
    ?>
    <div class="school">
        <div class="img__container">
            <img src="<?=BASE_URL?>/assets/img/<?=$highschool['image']?>" alt="" />
        </div>
        <div class="school__desc">
            <a class="school__desc__link" href="/highschools/detail/<?=($highschool['highschool_id'])?>
            "><p><span class="underline">Naam:</span><span class="strong"> <?= $highschool['name'] ?></span></p></a>
            <p><span class="underline">Omschrijving:</span> <?= $highschool['description'] ?></p> 
            <p class="red"><span class="red underline">Locatie:</span> <?= $highschool['location'] ?></p> 
        </div>
    </div>
    <?
}