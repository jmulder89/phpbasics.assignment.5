<?php
//here i check if the input field is set and what to do if so.
if(isset($_POST['date'])){
    $input = $_POST['date'];

    //I could not figure out how to show the difference in days so i took this method from stackoverflow.
    //<b>http://stackoverflow.com/questions/2040560/finding-the-number-of-days-between-two-dates</b>
    $now = time();
    $your_date = strtotime($_POST['date']);
    $dateDiff = $now - $your_date;
}



?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

    </style>

</head>
<body>
    <form action="01date.php" method="post">
        Date:	<input type="date" name="date" value="<?php if(isset($_POST['date'])) { echo $_POST['date']; } ?>"  /><br/><br/>
                <input type="submit" name="button" value="Submit">
</form>
<?php
    echo floor($dateDiff / (60 * 60 * 24));
?>
</body>

</html>

