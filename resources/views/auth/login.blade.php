<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-10 col-12">
                
                <div class="card" style="background-color: #F5FFFA">
                    <div class="text-center pt-4">
                        <h4 lang="loginnews-pagetitle" style="color: #044eb7">ĐĂNG NHẬP HỆ THỐNG</h4>
                    </div>
                    <div class="card-body">
                        
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

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Tên -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Mật khẩu -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <!-- Nút đăng ký -->
                            <button type="submit" class="btn w-100 text-white" style="background-color: #ff5a00">ĐĂNG NHẬP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
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
</body>
</html>
