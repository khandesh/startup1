<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en">
<body onload="menu('#menu_link8')" >
<?php
include 'menu.php';
?>
<div class="main_contents" onMouseOver="menu_action2()" style="min-height:485px;">
<div class="contents" id="contact"  onMouseOver="menu_action2()">
<div style="left:0;right:0;margin:auto; width:700px;">
<iframe width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=26.509434,80.228777&amp;spn=0.004608,0.006866&amp;z=17&amp;output=embed" ></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=26.509434,80.228777&amp;spn=0.004608,0.006866&amp;z=17&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
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