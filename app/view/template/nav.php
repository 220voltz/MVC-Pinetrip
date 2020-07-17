<header>
  <nav class="navbar navbar-expand-md navbar-dark deep-purple bg-custom custom-border-top">
    <a class="navbar-brand" href="#"></a>
    <img src="<?php echo DS . 'images' . DS . 'logo' . DS . 'Pinetrip Hotel Logo copy.png'?>" alt="" width="12%">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-item nav-link <?= ($this->view_data['action'] == 'home')?'active':'';?>" href= "/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-item nav-link <?= ($this->view_data['action'] == 'about')?'active':'';?>" href= "/home/about">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-item nav-link <?= ($this->view_data['action'] == 'room')?'active':'';?>" href= "/home/room">Accomodations</a>
        </li>
        <li class="nav-item">
            <a class="nav-item nav-link <?= ($this->view_data['action'] == 'contact')?'active':'';?>" href= "/home/contact">Contact us</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>