<?php if(!login()): ?>

<li class="nav-item dropdown">
        <a class="navt nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Korisnici
        </a>                

        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="login.php">Prijava</a></li>
          <li><a class="dropdown-item" href="register.php">Registracija</a></li>
        </ul>

    <?php else: ?>

      <li class="nav-item dropdown">
        <a class="navt nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          <?php if($_SESSION['status'] == "Admin"): ?>
            <img style="width: 30px; margin-top: -10px" src="uploads/admin.png"/>
          <?php else: ?>
            <img style="width: 30px; margin-top: -10px" src="uploads/user.png"/>            
          <?php endif; ?>
        
        </a> 
          
          <?php if($_SESSION['status'] == "Korisnik"): ?>    

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="userProfile.php">Moj profil</a></li>
              <li><a class="dropdown-item" href="korpa.php">Korpa</a></li>
              <li><a class="dropdown-item" href="userOrders.php">Porudžbine</a></li>
              <li><a class="dropdown-item" href="home.php?logout">Odjava</a></li>

          <?php else: ?>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="adminStats.php">Admin panel</a></li>
              <li><a class="dropdown-item" href="home.php?logout">Odjava</a></li>

          <?php endif; ?>
        
      </ul>

    <?php endif; ?>