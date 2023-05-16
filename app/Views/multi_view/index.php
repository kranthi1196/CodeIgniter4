<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi View</title>
</head>
<body>
    <h4>Multiple file Uploading</h4>

    <?php if(isset($validation)); ?>
    <?= $validation -> ListErrors(); ?>

    <?= form_open_multipart("http://localhost/ci4/MultiUpload"); ?><!-- We have to add the manual path where to redirect the controller --> 
    Upload Files : <input type="file" name="avatar[]" id="" multiple>
    <input type="submit" value="Upload">
    <?= form_close();?>
</body>
</html>