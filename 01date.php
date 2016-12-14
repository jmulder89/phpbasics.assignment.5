<?php

?>
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

    </style>

</head>
<body>
<form>
#1:		<input type="text" name="num_1" value="<?php if (isset($_POST['num_1'])){echo $_POST['num_1'];} ?>"<?php erNum1();  ?>/>

    <input type="submit" 	name="button" 	value="Calculate">
    <?php

    ?>
</form>

</body>

</html>

