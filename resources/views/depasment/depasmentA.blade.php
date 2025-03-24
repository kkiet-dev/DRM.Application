<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Approval Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            transition: margin-left 0.3s;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #343a40;
            padding-top: 20px;
            position: fixed;
            left: 0;
            top: 0;
            overflow-y: auto;
            transition: transform 0.3s ease-in-out;
        }
        .sidebar a {
            display: block;
            padding: 15px;
            color: #fff;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #495057;
        }

        /* Khi sidebar bị ẩn */
        .sidebar.hidden {
            transform: translateX(-100%);
        }

        /* Nội dung chính */
        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            transition: margin-left 0.3s ease-in-out;
            width: 100%;
        }

        /* Khi sidebar bị ẩn, nội dung sẽ giãn rộng */
        .content.expanded {
            margin-left: 0;
        }

        /* Nút toggle menu */
        .menu-toggle {
            display: none;
            position: fixed;
            top: 10px;
            left: 10px;
            background: #343a40;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 1000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .content {
                margin-left: 0;
                width: 100%;
            }
            .menu-toggle {
                display: block;
            }
        }
    </style>
</head>
<body>

<!-- Nút Toggle Menu -->
<button class="menu-toggle" onclick="toggleSidebar()">☰</button>

<!-- Sidebar -->
<div class="sidebar hidden" id="sidebar">
    <h4 class="text-center text-white">Admin Panel</h4>
    <a href="#">Dashboard</a>
    <a href="#">Manage Approvals</a>
    <a href="#">Manage Users</a>
    <a href="#">Manage Content</a>
    <a href="#">Settings</a>
</div>

<!-- Main Content -->
<div class="content expanded" id="content">
    {{-- @if (Auth::check() && Auth::user()->role)
        <h2 class="text-center fw-bold">{{ Auth::user()->role->name }}</h2>
    @else
    <p>User null</p>
    @endif --}}
    @if (Auth::check())
        <h2 class="text-center fw-bold">{{$roleName}}</h2>
    @else
    <p>User null</p>
    @endif
    <p class="text-center text-muted">Manage all submitted requests.</p>

    <table class="table table-bordered table-hover mt-4">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>File</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Sample Data Row 1 -->
            @foreach($procesings as $procesing)
            
                @if(!empty($procesings))
                <tr>
                    <td>{{$procesing->id}}</td>
                    <td>{{$procesing->name}}</td>
                    <td>{{$procesing->email}}</td>
                    <td>{{$procesing->message}}</td>
                    <td>
                        <a href="#" 
                           class="view-file" 
                           data-bs-toggle="modal" 
                           data-bs-target="#fileModal" 
                           data-file="{{ Storage::url($procesing->file_path) }}"
                           >
                            Xem file
                        </a>
                    </td>
                    <td><span class="badge bg-success">{{$procesing->status}}</span></td>
                    <td><a href="admin_review.html" class="btn btn-primary btn-sm">View</a></td>
                </tr>
                @else
                    <p>không có thông tin</p>
                @endif

            @endforeach

        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fileModalLabel">Xem Tệp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe id="fileViewer" src="" style="width: 100%; height: 500px; border: none;"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-body">
        <div id="loading" style="text-align: center;">Đang tải...</div>
        <iframe id="fileViewer" src="" style="width: 100%; height: 500px; border: none;" onload="document.getElementById('loading').style.display='none';"></iframe>
    </div>
      


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleSidebar() {
        let sidebar = document.getElementById("sidebar");
        let content = document.getElementById("content");
        sidebar.classList.toggle("hidden");
        content.classList.toggle("expanded");
    }
    //load file_path
    document.addEventListener("DOMContentLoaded", () => {
        const viewLinks = document.querySelectorAll(".view-file");
        
        viewLinks.forEach(link => {
            link.addEventListener("click", (event) => {
                event.preventDefault(); // Ngăn hành vi mặc định của thẻ <a>
                
                const fileUrl = link.getAttribute("data-file");
                const fileViewer = document.getElementById("fileViewer");
                
                if (fileUrl) {
                    fileViewer.src = fileUrl; // Cập nhật src của iframe
                } else {
                    fileViewer.src = "about:blank"; // Nếu không có URL, hiển thị trống
                    console.error("Không tìm thấy URL file!");
                }
            });
        });
    });

    document.getElementById("fileModal").addEventListener("hidden.bs.modal", () => {
        document.getElementById("fileViewer").src = "";
    });



</script>
</body>
</html>


