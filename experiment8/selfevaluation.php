
<!--
        Author:		Debabrata Tripathy, IIT Bombay, Mumbai
        Mail ID:	dtriapthy10@gmail.com
        Website:	http://home.iitb.ac.in/~debabratatripathy/
        Phone No:	9004499484
-->	
<?php
include_once("header.php");
include_once("../util/self_eval.php");
getHeader(6, "Calibration of Doubly Constrained Gravity Model", "Trip Distribution");
?> 
<div id="body">
    <h1 class="designation">Self Evaluation</h1>

    <?php
    if (isset($_GET['submit'])) {
        printSelfEvaluationQuestion("6", 1);
        ?>
        <?php
    } else {
        printSelfEvaluationQuestion("6", 0);
    }
    ?> 
</div>
<?php
include_once("footer.php");
getFooter(6);
?>   