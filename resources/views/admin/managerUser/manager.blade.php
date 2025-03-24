@extends('admin.home')
@section('manager_user')

{{-- <div class="container-fluid py-4"> --}}
  <div class="row" style="height:10%">
    <div class="col-12">
      <div class="card mb-4" style="height: 85vh">
        <div class="col-16 d-flex">
          <div class="card-header col-6 pb-0">
            <h6>Danh sách người dùng</h6>
          </div>
          <div class="card-header col-6 pb-0 d-flex justify-content-end">
                <a class="nav-link  " href="{{URL::to('User/register')}}">
                    <button type="button" class="btn text-white" style="background-color: #1da1f2">Thêm Người Dùng</button>
                </a>
          </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vai Trò</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày Tạo</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cập Nhật Mới</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
            
                @if(!empty($users))
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <h6 class="mb-0 text-sm">{{$user->id}}</h6>
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$user->name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $user->role ? $user->role->name : 'Không có vai trò' }}</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$user->created_at}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <p class="text-xs font-weight-bold mb-0">{{$user->updated_at}}</p>
                  </td>
                  <td class="align-middle">
                    <a href="#" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Chỉnh sửa
                    </a>
                  </td>
                </tr>
                @else
                  <p>Tài liệu trống</p>
                @endif

                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>


            <!-- Modal -->
        <div class="modal fade" id="fileModal" tabindex="-1" aria-labelledby="fileModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="fileModalLabel">Xem Tệp</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <iframe id="fileViewer" src="" style="width: 100%; height: 80vh; border: none;"></iframe>
                  </div>
              </div>
          </div>
      </div>
 
    </div>
</div>



<script>
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
@endsection