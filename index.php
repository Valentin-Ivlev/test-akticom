<?php
require 'include/header.html';
?>
    <div class="container">
        <div class="col-6 offset-3 rounded bg-info p-5">
            <form method="post" action="upload.php" enctype="multipart/form-data">
                <div class="input-group">
                    <input class="form-control" type="file" name="csv_file">
                    <input type="submit" class="btn btn-primary" value="Загрузить">
                </div>
            </form>
        </div>
    </div>
<?php
require 'include/footer.html';
