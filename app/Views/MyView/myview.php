<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{page_title}</title>
</head>
<body>
    <h3>{Blog_heading}</h3>
    {subjects_list}
    <h4>{subject}</h4><p>{abbr}</p>
    {/subjects_list}
    
    
    {if($status)}
    <p>If the Status in the Test Controller is True, So that it is printing the next line of the Code as below</p>
    <p>Welcome to the CodeIgniter</p>
    {endif}
    {if(!$status)}
    <p>If the Status in the Test Controller is False,So that it is not printing the Code</p>
    {endif}

</body>
</html>