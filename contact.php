<?php
require_once("admin-panel/controller/connect.php");

$sql = "SELECT * FROM `contact`";
$data = mysqli_query($connect, $sql);
$data = mysqli_fetch_all($data);


?>
<li class="l-section section">
            <div class="contact" >
              <div class="contact--lockup">
                <div class="modal">
                  <div class="modal--information">
                    <?php foreach($data as $value): ?>
                    <p><?= $value[3]; ?></p>
                    <a href="mailto:ouremail@gmail.com"><?= $value[1] ?></a>
                    <a href="tel:+148126287560"><?= $value[2] ?></a>
                  </div>
                  <?php endforeach; ?>
                  <ul class="modal--options">
                    <li><a href="#0">Bēhance</a></li>
                    <li><a href="#0">dribbble</a></li>
                    <li><a href="">Contact Us</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>