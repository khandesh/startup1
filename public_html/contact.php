<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en">
<body onload="menu('#menu_link8')" >
<?php
include 'menu.php';
?>
<div class="main_contents" onMouseOver="menu_action2()" style="min-height:485px;">
<div class="contents" id="contact"  onMouseOver="menu_action2()">

<div style="margin:auto; left:0;right:0; width:600px;">
<br/>
<?php
include 'form.php';
?>
<br/><br/><br/><br/>
</div>

</div>
</div>


<script>
$(document).ready(function(){
    $("ul#navigation li a").click(function() {
        $("ul#navigation li").removeClass("selected");
        $(this).parents().addClass("selected");
        
    });
	
});
</script>
<?php
include 'footer.php';
?>
</body>
</html>