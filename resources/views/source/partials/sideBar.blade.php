
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
<li>
      <li class="nav-item active">
        <a class="nav-link " href="/index">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item active">
        <a class="nav-link" href="">
          <i class="bi bi-people"></i></i><span>User</span>
        </a>
    </li>
    

      <li class="nav-item active">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-journal-text"></i><span>Category</span>
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed"  href="">
          <i class="bi bi-airplane"></i><span>Tour</span>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item active">
        <a class="nav-link collapsed"  href="">
          <i class="bi bi-calendar-check"></i><span>Booking</span>
        </a>
      </li><!-- End Charts Nav -->


    </ul>

  </aside>
  <script>

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.sidebar-nav .nav-link');

    navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            // Check if the current link is already active
            if (this.classList.contains('active')) {
                event.preventDefault(); // Prevent default navigation
                location.reload();      // Force reload
            }
        });
    });
});

  </script>

