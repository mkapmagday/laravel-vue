<template>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top navbar-transparent">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Ubicom Group" height="40">
        Member of Ubicom Group
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services & Solutions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Register</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>


</template>

<script>


export default {
  name: 'Navbar',
}
</script>

<style scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: transparent;
  transition: background-color 0.5s ease;
}

.navbar.scrolled {
  background-color: white;
  transition: background-color 0.5s ease;
}

.navbar-brand {
  display: flex;
  align-items: center;
}

.navbar-brand img {
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
  margin-right: 10px;
}

.navbar-nav .nav-item .nav-link {
  color: #333;
  font-weight: 500;
}

.navbar-nav .nav-item .nav-link:hover {
  color: #007bff;
}

.dropdown-menu {
  border: none;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.dropdown-item {
  color: #333;
  font-weight: 500;
}

.dropdown-item:hover {
  color: #007bff;
  background-color: transparent;
}

.dropdown-menu::before {
  content: "";
  position: absolute;
  top: -10px;
  left: 50%;
  transform: translateX(-50%);
  border: 10px solid transparent;
 

  border-bottom-color: #fff;
}
.dropdown-menu::after {
  content: "";
  position: absolute;
  top: -8px;
  left: 50%;
  transform: translateX(-50%);
  border: 8px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.15);
}
</style>