
<!--
	Author:		Debabrata Tripathy, IIT Bombay, Mumbai
	Mail ID:	dtriapthy10@gmail.com
	Website:	http://home.iitb.ac.in/~debabratatripathy/
	Phone No:	9004499484
-->	
<?php
  include_once("header.php");
  include_once("../util/self_eval.php");
  getHeader(6,"All or Nothing (AON) Assignment","Trip Assignment");
?> 
  <div id="body">
    <h1 class="designation">Self Evaluation</h1>
    <?php printSelfEvaluationQuestion("8");?> 
  </div>
	<?php
  include_once("footer.php");
  getFooter(6);
?>   