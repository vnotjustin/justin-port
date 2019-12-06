<?php
echo
   '<div class="header"> <a href="?page=home"><img class="logo" src="images/logo.png" alt="logo"></a>
            <ul class="gbye">
                <li><a href="?page=home" class="navfont headerpadding nav headerborright">Home</a></li>
                <li><a href="?page=resume" class="navfont headerpadding nav headerborleft">Resume</a></li>
                <li><a href="?page=contact" class="navfont headerpadding nav headerborright">Contact</a></li>
                <li class="dropdown"> <a class="dropbtn navfont headerpadding nav headerborleft">Portfolio</a>
                    <div class="dropdown-content navfont"> <a href="?page=writingportf" class="navfont nav">Writing</a> <a href="?page=programportf" class="navfont nav">Program</a> <a href="?page=artportf" class="navfont nav">Art</a> </div>
                </li>
            </ul>
        </div>
        
     <div class="mobiledropdown">
<div id="mobiledropbtn" class="mobiledropbtn anioff" onclick="mobileDrop();">
<span></span>
</div>
  <div id="mobileDropdown" class="mobiledropdown-content">
    <a href="?page=home">Home</a>
    <a href="?page=resume">Resume</a>
    <a href="?page=contact">Contact</a>
    <a href="?page=writingportf">Writing</a>
    <a href="?page=programportf">Program</a>
    <a href="?page=artportf">Art</a>
  </div>
</div>'
?>