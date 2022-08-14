<h1>ADMIN</h1>




<? foreach ($highschools as $highschool){
    ?>
    <p><?= $highschool['name'] ?></p>
    <p><?= $highschool['description'] ?></p> <?
}

?>
