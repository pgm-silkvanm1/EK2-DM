<h1>ADMIN</h1>

<a href='/admin/createHighschool'>Add new </a>




<? foreach ($highschools as $highschool){
    ?>
    <img src="<?=BASE_URL?>/assets/img/<?=$highschool['image']?>" alt="" />
    <p><?= $highschool['name'] ?></p>
    <p><?= $highschool['description'] ?></p> 
    <p><?= $highschool['location'] ?></p> 
    <form method="POST">
        <button type="submit" name="delete" value="<?=$highschool['highschool_id'] ?>">Verwijderen</button>
        <a href="/admin/updateHighschool/<?=$highschool['highschool_id'] ?>">Aanpassen</a>
    </form>
    <?

}

?>
