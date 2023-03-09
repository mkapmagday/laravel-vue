<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top transparent">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img :src="require('../../images/assets/nav-icon-hover.png')" alt="Ubicom Group" height="40" />
          Member of Ubicom Group
        </a>

        <button class="navbar-toggler" data-widget="control-sidebar" data-slide="true" type="button">
          <i class="fas fa-th-large"></i>
        </button>



        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li v-for="item in navbarItems" :key="item.id" class="nav-item" :class="{ 'dropdown': item.isDropdown }">
              <a v-if="!item.isDropdown" class="nav-link" :href="item.url">{{ item.label }}</a>
              <a v-else class="nav-link dropdown-toggle" :href="item.url" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ item.label }}
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="control-sidebar-bg" v-show="isControlSidebarVisible" @click="hideControlSidebar"></div>
    <aside class="control-sidebar control-sidebar-dark" v-show="isControlSidebarVisible">
      <div class="p-3">
        <h5>MENU</h5>
        <ul>
          <li v-for="item in navbarItems" :key="item.id">
            <a v-if="isItemInNavbar(item)" :href="item.url">{{
              item.label
            }}</a>
          </li>
        </ul>
      </div>
    </aside>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isControlSidebarVisible: false,
      navbarItems: [
        { id: 1, label: "About", url: "/About" },
        { id: 2, label: "Services & Solutions", url: "/Services&Solutions" },
        { id: 3, label: "Clients", url: "/Clients" },
        { id: 4, label: "Careers", url: "/Careers" },
        { id: 5, label: "Contacts", url: "/Contacts" },
      ],
    };
  },
  mounted() {
    // Get the navbar element
    var navbar = document.querySelector('.navbar');

    // Listen for the window to scroll
    console.log(navbar)
    window.addEventListener('scroll', function () {
      // Check if the user has scrolled past the top of the navbar
      if (window.scrollY > navbar.offsetTop) {
        // Add the 'solid' class to the navbar
        navbar.classList.add('solid');
      } else {
        // Remove the 'solid' class from the navbar
        navbar.classList.remove('solid');
      }
    });

    // On page load, check if the navbar is already below the top
    if (window.scrollY > navbar.offsetTop) {
      navbar.classList.add('solid');
    }

  },
  methods: {
    isItemInNavbar(item) {
      return this.navbarItems.includes(item);
    },
    isItemInControlSidebar(item) {
      return this.controlSidebarItems.includes(item);
    },
    isItemVisibleInNavbar(item) {
      // In a real implementation, this would depend on user permissions or authentication
      return true;
    },
    toggleControlSidebar() {
      this.isControlSidebarVisible = !this.isControlSidebarVisible;
    },
    hideControlSidebar() {
      this.isControlSidebarVisible = false;
    },
  },
};


</script>




<style scoped>
.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  transition: background-color 0.5s ease;
  z-index: 1040;
}

.navbar.solid {
  background-color: #000 !important;
  /* replace with your desired black color */
}

.navbar.transparent {
  background-color: transparent;
}

.navbar-brand {
  display: flex;
  align-items: center;
  color: white;
}

.navbar-brand img {
  filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
  margin-right: 10px;
}

.navbar-nav .nav-item .nav-link {
  color: #fff;
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