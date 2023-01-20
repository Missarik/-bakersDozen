<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<?php
date_default_timezone_set('Europe/Malta ');
?>

</head>

<body>
<?php    
echo "<form>
    <input type='hidden' name='userId' value='Anonymous'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message' id="" cols="30" rows="10"></textarea>
    <button type='submit' name='submit'>Comment</button>
</form>"
?>

</body>

</html>