<h1>Courses</h1>

<? foreach ($courses as $course){
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
    </div>
        
    <?
}

?>
