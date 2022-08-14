<h1>Update</h1>

 <? print_r($school)?>

<form method="POST" enctype="multipart/form-data">
    <label> Naam:
        <input type="text" name="name">
    </label>
    <label> Omschrijving:
        <input type="text" name="description">
    </label>
    <label> Locatie:
        <input type="text" name="location">
    </label>
    <label> Logo:
        <input type="file" name="upload_file">
    </label>
    <br>
    <button type="Submit">Aanpassen</button>
</form>