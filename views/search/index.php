<form method="POST" action="">
    <input name="search" type="text">
  <select name="type" id="">
    <option value="highschool">hogeschool</option>
    <option value="university">universiteit</option>
    <option value="courses">opleiding</option>
  </select>
    <button>search</button>
</form>

<?  if(isset($type)){
        if ($type == 'highschool') {
            ?>
            <a href="/highschools/detail/<?=($searchHighschool->highschool_id)?>"><h1><?= $searchHighschool->name ?></h1></a>

            <?
        } else if ($type == 'university') {
            ?>
                <h1><?= $searchUni->name ?></h1>
            <?
        } else {
            ?>
            <h1><?= $searchCourse->name ?></h1>
            <?
        }
    }
?>