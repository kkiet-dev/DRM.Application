@extends('admin.home')
@section('procesing_content')

{{-- <div class="container-fluid py-4"> --}}
  <div class="row" style="height:10%">
    <div class="col-12">
      <div class="card mb-4" style="height: 85vh">
        <div class="card-header pb-0">
          <h6>Authors table</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">File</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-secondary opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($procesings as $procesing)
            
                @if(!empty($procesings))
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <h6 class="mb-0 text-sm">{{$procesing->id}}</h6>
                      </div>
                    </div>
                  </td>

                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$procesing->name}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{$procesing->email}}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{$procesing->message}}</span>
                  </td>
                  <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"> 
                        <a href="#" 
                        class="view-file" 
                        data-bs-toggle="modal" 
                        data-bs-target="#fileModal" 
                        data-file="{{ Storage::url($procesing->file_path) }}"
                        >
                        Xem file
                      </a>
                    </span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">{{$procesing->status}}</span>
                  </td>
                  <td class="align-middle">
                    <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
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