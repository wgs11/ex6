<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/ex8/all.css">
    <title>Search</title>
    <script type="text/javascript" src="validate.js"></script>
</head>
<body>

<form name="myForm" action="search.php" id="myForm"
      onsubmit="return validateForm()" method="post">
    Search: <input type="text" name="search" id="search" placeholder="CSXYYY">
    <input type="submit" class="button" value="Submit">
</form>
<?php
if(isset($_POST["search"])){
    echo"You search was accepted.";
}
?>
</body>
</html>
