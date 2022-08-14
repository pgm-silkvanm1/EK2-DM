<h1>Create</h1>

<!-- enctype zorgt ervoor dat ik het kan omzetten naar type=file -->

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
    <button type="Submit">Voeg toe</button>
</form>