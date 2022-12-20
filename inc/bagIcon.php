

<?php if(login() and isset($_SESSION['korisnik'])): ?>

<li class="animacija nav-item">
  <a class="navhh nav-link" href="korpa.php"><span class="badge bg-success"><i class="fa fa-1x fa-shopping-basket" aria-hidden="true"></i><?php echo numOrder(); ?></span></a>
</li>

<?php endif; ?>