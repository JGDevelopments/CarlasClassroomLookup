<?php include ('include/header.php'); ?> 
<div id = "content">
    <h3>Enter the first word in the movie title to see all related entries</h3>

    <form>
        <h3> First word: <input type= "text" onkeyup="showHint(this.value)" size= "20" /></h3>
    </form>

    <h3> Suggestions: <span id="txtHint"></span></h3>
</div>