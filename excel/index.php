<?php include('../inc/header.php'); ?>

    <form action="import.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label style="font-weight: bold;" for="upload">Choose excel file:</label>
            <input class="form-control" type="file" name="upload">
        </div>
        <div class="form-group">
            <input class="btn btn-success" name="save_excel_data" type="submit" value="Upload">
        </div>
    </form>

<?php include('../inc/footer.php'); ?>