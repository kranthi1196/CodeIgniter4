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
    
   
    <?= form_open_multipart("http://localhost/ci4/MultiUpload"); ?>
    Upload Files : <input type="file" name="avatar[]" id="" multiple>
    <?php echo 'form'; ?>
    <input type="submit" value="Upload">
    <?= form_close();?>
</body>
</html>