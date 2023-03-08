<template>
  <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top navbar-transparent">
    <div class="container">
      <a class="navbar-brand" href="#">
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
            <a v-else class="nav-link dropdown-toggle" :href="item.url" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div
      class="control-sidebar-bg"
      v-show="isControlSidebarVisible"
      @click="hideControlSidebar"
    ></div>
    <aside
      class="control-sidebar control-sidebar-dark"
      v-show="isControlSidebarVisible"
    >
      <div class="p-3">
        <h5>Control Sidebar</h5>
        <p>Customize your site's layout</p>
        <ul>
          <li v-for="item in controlSidebarItems" :key="item.id">
            <a v-if="!isItemInNavbar(item)" :href="item.url">{{
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
        { id: 1, label: "About", url: "#" },
        { id: 2, label: "Services & Solutions", url: "#" },
        { id: 3, label: "Clients", url: "#" },
        { id: 4, label: "Careers", url: "#" },
        { id: 5, label: "Contacts", url: "#" },
      ],
    };
  },
  computed: {
  controlSidebarItems() {
    // Filter out the items that are already in the navbar or control sidebar
    const filteredItems = this.navbarItems.filter(
      (item) => !this.isItemInNavbar(item) && !this.isItemInControlSidebar(item)
    );

    // Get the items that are not visible in the navbar and add them to the control sidebar
    const invisibleItems = this.navbarItems.filter(
      (item) => !this.isItemVisibleInNavbar(item) && !this.isItemInControlSidebar(item)
    ).map((item) => ({
      ...item,
    }));

    // Concatenate the filtered items and the invisible items with the original navbarItems
    return [
      ...filteredItems,
      ...invisibleItems,
    ];
  },
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
  background-color: transparent;
  transition: background-color 0.5s ease;
  z-index: 1040;
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