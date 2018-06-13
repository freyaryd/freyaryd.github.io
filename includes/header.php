<?php $pages = array("index" => "Home", "work" => "Work", "contact" => "Contact");
 ?>
<header>
  <ul id="menu">
  <?php
      foreach ($pages as $location => $menuitem){
        if($page == $location){
          echo("<li id=\"menuitem\"> <a id = \"current\" href = '" . $location . ".php'>" . $menuitem . "</a> </li>");
        }else{
          echo("<li id=\"menuitem\"> <a href ='" . $location . ".php'>" . $menuitem . "</a> </li>");
        }
      }
    ?>
  </ul>
  <h1>
    <?php
      echo($pages[$page]);
    ?>
  </h1>
</header>
