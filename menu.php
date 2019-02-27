<?php
define("TITLE","MENU | Franklins fine dining");

include("includes/header.php");


 ?>

<div id="menu-items"
    <h1>our delicious menu </h1>
    <p>Like our team, our menu is very small but dan does it ever pack a punch!</p>
    <p><em>Click any menu item to learn more about it.</em></p>

    <hr>

    <ul>
      <?php foreach ($menuItems as $Dish => $item) { ?>
      <li><a href="dish.php?item=<?php echo $Dish; ?>"><?php echo $item["title"]; ?></a><sup>$</sup><?php echo $item["price"];  ?></li>

    <?php } ?>
    </ul>




 <?php

 include("includes/footer.php");
  ?>
