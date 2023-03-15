<?php

var_dump($_POST);
$submitted = !empty($_POST);

?>

<p>Form Submitted?
    <?php

    if($submitted){
        echo 'Submitted!';

    } else {
        echo 'Not submitted!';
    }
    ?>
</p>
<ul>
    