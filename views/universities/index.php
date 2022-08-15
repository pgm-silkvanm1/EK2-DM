<h1>Universiteiten</h1>

<? foreach ($universities as $university){
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
    </div>
        
    <?
}
?>