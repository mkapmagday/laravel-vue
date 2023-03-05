<template>
  <footer class="footer bg-dark">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-3 mb-4 mb-md-0">
          <h4 class="footer-heading mb-4">Company</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">About Us</a></li>
            <li><a href="#" class="text-muted">Our Team</a></li>
            <li><a href="#" class="text-muted">Jobs</a></li>
            <li><a href="#" class="text-muted">Blog</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-4 mb-md-0">
          <h4 class="footer-heading mb-4">Products</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Product 1</a></li>
            <li><a href="#" class="text-muted">Product 2</a></li>
            <li><a href="#" class="text-muted">Product 3</a></li>
            <li><a href="#" class="text-muted">Product 4</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-4 mb-md-0">
          <h4 class="footer-heading mb-4">Services</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-muted">Service 1</a></li>
            <li><a href="#" class="text-muted">Service 2</a></li>
            <li><a href="#" class="text-muted">Service 3</a></li>
            <li><a href="#" class="text-muted">Service 4</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4 class="footer-heading mb-4">Contact Us</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><i class="fas fa-map-marker-alt fa-fw me-3"></i> Address Line 1</li>
            <li class="mb-3"><i class="fas fa-phone fa-fw me-3"></i> +1 (123) 456-7890</li>
            <li><i class="fas fa-envelope fa-fw me-3"></i> info@example.com</li>
          </ul>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-12">
          <hr class="bg-light">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-md-8">
          <p class="text-muted small">&copy; Copyright © 2022, All Right Reserved <a href="https://www.awsys-i.com/en/home.php">Advanced World Systems, Inc. | Advanced World Solutions, Inc.</a></p>
        </div>
        <div class="col-md-4 text-md-end">
          <ul class="list-inline social-icons">
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>


<style scoped>
/* Footer Styling */

.footer {
  background-color: #212529;
  color: #fff;
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.footer-heading {
  font-weight: bold;
  font-size: 1.5rem;
  margin-bottom: 1.5rem;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
}

.list-unstyled li {
  margin-bottom: 0.75rem;
}

.list-unstyled li a {
  color: #fff;
  font-size: 0.95rem;
  font-weight: 500;
  transition: all 0.2s ease-in-out;
}

.list-unstyled li a:hover {
  color: #f3c677;
}

.footer hr.light {
  border-top: 1px solid #f3c677;
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.text-muted.small {
  font-size: 0.9rem;
}

.social-icons li {
  margin-right: 1rem;
}

.social-icons li:last-child {
  margin-right: 0;
}

.social-icons li a {
  color: #fff;
  font-size: 1.25rem;
  transition: all 0.2s ease-in-out;
}

.social-icons li a:hover {
  color: #f3c677;
  transform: scale(1.1);
}
</style>

