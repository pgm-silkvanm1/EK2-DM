<h1><?= $highschool->name ?></h1>

<img src="<?=BASE_URL?>/assets/img/<?=$highschool->image?>" alt="" />

<? foreach ($hs as $h){
    ?>
    <div class="school">
        <div class="img__container">
            <img src="<?=BASE_URL?>/assets/img/<?=$h['courseImage']?>" alt="" />
        </div>
        <div class="school__desc">
            <p><?= $h['courseName'] ?></p>
            <p><?= $h['courseDescription'] ?></p> 
            <p><?= $h['courseDuration'] ?></p> 
        </div>
    </div>
        
    <?
}

?>