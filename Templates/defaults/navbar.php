<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <span class="navbar-brand mb-0 h2"> <img class="img-fluid" src="/img/codeing3.png" alt="Logo" width="150px"
        height="auto"></span>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="/home">
            Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <div class="dropdown show">
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Projects</a>
            <?php include "../Modules/Projects.php"?>
          </li>
        </div>
        <li class="nav-item">
          <button class="btn-dark"><i class="fa fa-adjust"></i></button>

        </li>

      </ul>
    </div>
  </nav>