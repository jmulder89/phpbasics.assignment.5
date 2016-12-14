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
Date:		<input type="text" name="date" value="<?php if (isset($_POST['num_1'])){echo $_POST['num_1'];} ?>"<?php erNum1();  ?>/>

    <input type="submit" 	name="button" 	value="Calculate">
    <?php

    ?>
</form>

</body>

</html>

