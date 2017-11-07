
<?php
session_start();
if($_SESSION['name']==null) :?>
  <form class="form-inline my-2 my-lg-0">
     <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">LOGIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">SIGNUP</a>
      </li>
    </ul>
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<?php else: ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  <li class="nav-item">
        <a class="nav-link" href="#"><b><?=  $_SESSION['name']; ?></b></a>
      </li>
 </ul>
<?php endif; ?>
