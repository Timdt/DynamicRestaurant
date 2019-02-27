<?php
  define("TITLE", "Team | Franklins fine dining");
  include('includes/header.php');
 ?>
  <div id="team=members" class="cf">
    <h1>our team at franklins</h1>
    <p>We're small but mighty. franklins fine dining has been a family-owned and run business since the dirty
    thirties, and were proud of it! When you get these three together, you never know what can happen.
  But you can count on one thing: <strong>The best food you've ever had. Ever. </strong></p>

  <hr>

  <?php
      foreach ($teamMembers as $member) {

    ?>

<div class="member">
  <img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>"
  <h2><?php echo $member["name"]; ?></h2>
  <h2><?php echo $member["bio"]; ?></h2>
</div>


    <?php

  }
      ?>

</div><!-- team members -->


 <?php
include('includes/footer.php');
  ?>
