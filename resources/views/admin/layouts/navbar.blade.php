<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true" >
    <div class="container-fluid py-1 px-3">
      <div>
          @if (session('error'))
              <div class="alert alert-danger alert-dismissible fade show" id="error-alert" role="alert">
                  {{ session('error') }}
              </div>
          @endif
          
          @if (session('success'))
              <div class="alert alert-success alert-dismissible fade show" id="success-alert" role="alert">
                  {{ session('success') }}
              </div>
          @endif
      </div>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">

          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
</nav>
<script>
  // Tự động ẩn thông báo sau 2 giây
  setTimeout(() => {
      const successAlert = document.getElementById('success-alert');
      const errorAlert = document.getElementById('error-alert');

      if (successAlert) {
          successAlert.classList.remove('show');
          successAlert.classList.add('fade');
          setTimeout(() => successAlert.remove(), 500); // Xoá hẳn sau hiệu ứng
      }

      if (errorAlert) {
          errorAlert.classList.remove('show');
          errorAlert.classList.add('fade');
          setTimeout(() => errorAlert.remove(), 500);
      }
  }, 2000); // 2 giây
</script>