   <nav class="navbar navbar-expand-lg navbar-dark bg-success">
       <div class="container-fluid">
           <a class="navbar-brand" href="#">TechieBlogy</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="<?= HOME ?>">Home</a>
                   </li>
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Categories
                       </a>
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="">BlockChain</a></li>
                           <li><a class="dropdown-item" href="#">Artifical Intelligence</a></li>
                           <li><a class="dropdown-item" href="#">Mobile Developmemt</a></li>
                           <li><a class="dropdown-item" href="#">WebDevelopmemt</a></li>

                       </ul>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">About</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link active" href="<?= ADMIN_URL ?>signup.php" tabindex="-1" aria-disabled="true">Signup</a>
                   </li>
               </ul>
           </div>
       </div>
   </nav>