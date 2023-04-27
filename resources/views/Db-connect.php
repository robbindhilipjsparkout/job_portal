
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB_connection</title>
</head>
<body>
    
<?php 

echo "<center><h3>Successfully connected to the DB => ". DB::connection('mysql')->getDatabaseName()."</h3></center>";

?>

</body>
</html>


