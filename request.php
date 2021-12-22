<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+213699331177"><?php  echo $_POST['To'];?></Dial>
</Response>