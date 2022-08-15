<h1>Hogescholen</h1>

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
    </div>
    <?
} ?>