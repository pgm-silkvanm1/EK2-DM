<form method="GET" action="">
	<input name="search" type="text">
	<button type="submit">search</button>
</form>

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

foreach ($universities as $university){
    ?>
    <div class="school">
        <div class="img__container">
            <img src="<?=BASE_URL?>/assets/img/<?=$university['image']?>" alt="" />
        </div>
        <div class="school__desc">
            <p><span class="underline">Naam:</span><span class="strong"> <?= $university['name'] ?></span></p>
            <p><span class="underline">Omschrijving:</span> <?= $university['description'] ?></p> 
            <p><span class="red underline">Locatie:</span> <?= $university['location'] ?></p>
        </div>
    </div>
    <?

}



?>