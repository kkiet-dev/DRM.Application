@extends('admin.home')

@section('dashboard')
{{-- <div class="container-fluid py-4"> --}}
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
              <span class="mask opacity-10 border-radius-lg" style="background-color: #fff2d4"></span>
              <div class="card-body p-3 position-relative">
                <div class="row">
                  <div class="col-8 text-start">
                    <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                      <i class="ni ni-circle-08 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    <h5 class="font-weight-bolder mb-0 mt-3" style="color: #ff9205">
                      1600
                    </h5>
                    <span class="text-sm" style="color: #ff9205">Người dùng</span>
                  </div>
                  <div class="col-4">
                    <div class="dropdown text-end mb-6">
                      <a href="javascript:;" class="cursor-pointer" id="dropdownUsers1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-h text-white"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers1">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                    <p class="text-sm text-end font-weight-bolder mt-auto mb-0" style="color: #ff9205">+55%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
            <div class="card">
              <span class="mask opacity-10 border-radius-lg" style="background-color: #e0fbff"></span>
              <div class="card-body p-3 position-relative">
                <div class="row">
                  <div class="col-8 text-start">
                    <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                      <i class="ni ni-active-40 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    <h5 class="font-weight-bolder mb-0 mt-3" style="color: #4da1e8">
                      357
                    </h5>
                    <span class="text-sm" style="color: #4da1e8">Hoạt động</span>
                  </div>
                  <div class="col-4">
                    <div class="dropstart text-end mb-6">
                      <a href="javascript:;" class="cursor-pointer" id="dropdownUsers2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-h text-white"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers2">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                    <p class="text-sm text-end font-weight-bolder mt-auto mb-0" style="color: #4da1e8">+124%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 col-md-6 col-12">
            <div class="card">
              {{-- bg-dark --}}
              <span class="mask opacity-10 border-radius-lg" style="background-color: #e0fbff"></span>
              <div class="card-body p-3 position-relative">
                <div class="row">
                  <div class="col-8 text-start">
                    <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                      <i class="ni ni-cart text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    <h5 class="font-weight-bolder mb-0 mt-3" style="color: #4da1e8">
                      2300
                    </h5>
                    <span class="text-sm" style="color: #4da1e8">Tổng số sét duyệt</span>
                  </div>
                  <div class="col-4">
                    <div class="dropdown text-end mb-6">
                      <a href="javascript:;" class="cursor-pointer" id="dropdownUsers3" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-h text-white"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers3">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                    <p class="text-sm text-end font-weight-bolder mt-auto mb-0" style="color: #4da1e8">+15%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
            <div class="card">
            <span class="mask opacity-10 border-radius-lg" style="background-color: #e0fbff"></span>
              <div class="card-body p-3 position-relative">
                <div class="row">
                  <div class="col-8 text-start">
                    <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                      <i class="ni ni-like-2 text-dark text-gradient text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                    <h5 class="font-weight-bolder mb-0 mt-3" style="color: #4da1e8">
                      940
                    </h5>
                    <span class="text-sm" style="color: #4da1e8">Tổng số từ chối</span>
                  </div>
                  <div class="col-4">
                    <div class="dropstart text-end mb-6">
                      <a href="javascript:;" class="cursor-pointer" id="dropdownUsers4" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-h text-white"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownUsers4">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                    <p class="text-sm text-end font-weight-bolder mt-auto mb-0" style="color: #4da1e8">+90%</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 col-12 mt-4 mt-lg-0">
        <div class="card shadow h-100">
          <div class="card-header pb-0 p-3">
            <h6 class="mb-0">Tổng Quan</h6>
          </div>
          <div class="card-body pb-0 p-3">
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                <div class="w-100">
                  <div class="d-flex mb-2">
                    <span class="me-2 text-sm font-weight-bold text-dark">Tổng số văn bản</span>
                    <span class="ms-auto text-sm font-weight-bold">80</span>
                  </div>
                  <div>
                    <div class="progress progress-md">
                      <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                <div class="w-100">
                  <div class="d-flex mb-2">
                    <span class="me-2 text-sm font-weight-bold text-dark">Đã Duyệt</span>
                    <span class="ms-auto text-sm font-weight-bold">50</span>
                  </div>
                  <div>
                    <div class="progress progress-md">
                      <div class="progress-bar bg-primary w-50" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                <div class="w-100">
                  <div class="d-flex mb-2">
                    <span class="me-2 text-sm font-weight-bold text-dark">Chờ Duyệt</span>
                    <span class="ms-auto text-sm font-weight-bold">30</span>
                  </div>
                  <div>
                    <div class="progress progress-md">
                      <div class="progress-bar bg-primary w-30" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="card-footer pt-0 p-3 d-flex align-items-center">
            <div class="w-60">
              <p class="text-sm">
                {{-- More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b> projects were created. --}}
              </p>
            </div>
            <div class="w-40 text-end">
              <a class="btn btn-dark mb-0 text-end" class="btn text-white" style="background-color: #1da1f2" href="javascript:;">Chi tiết tổng thể</a>
            </div>
          </div>
        </div>
      </div>

    </div>

        {{-- <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <div class="card shadow h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Reviews</h6>
            </div>
            <div class="card-body pb-0 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                  <div class="w-100">
                    <div class="d-flex mb-2">
                      <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                      <span class="ms-auto text-sm font-weight-bold">80%</span>
                    </div>
                    <div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="w-100">
                    <div class="d-flex mb-2">
                      <span class="me-2 text-sm font-weight-bold text-dark">Neutral Reviews</span>
                      <span class="ms-auto text-sm font-weight-bold">17%</span>
                    </div>
                    <div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-primary w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                  <div class="w-100">
                    <div class="d-flex mb-2">
                      <span class="me-2 text-sm font-weight-bold text-dark">Negative Reviews</span>
                      <span class="ms-auto text-sm font-weight-bold">3%</span>
                    </div>
                    <div>
                      <div class="progress progress-md">
                        <div class="progress-bar bg-primary w-5" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card-footer pt-0 p-3 d-flex align-items-center">
              <div class="w-60">
                <p class="text-sm">
                  More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b> projects were created.
                </p>
              </div>
              <div class="w-40 text-end">
                <a class="btn btn-dark mb-0 text-end" href="javascript:;">View all reviews</a>
              </div>
            </div>
          </div>
        </div> --}}

    @if($roleName === 'admin')
    <div class="row my-4">
      <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
        <div class="card">
          <div class="card-header pb-0">
            <div class="row">
              <div class="col-lg-6 col-7">
                <h6>Các chức vụ hiện hành</h6>
                <p class="text-sm mb-0">
                  <i class="fa fa-check text-info" aria-hidden="true"></i>
                  <span class="font-weight-bold ms-1">30 done</span> this month
                </p>
              </div>
              <div class="col-lg-6 col-5 my-auto text-end">
                <div class="dropdown float-lg-end pe-4">
                  <a class="nav-link  " href="{{ URL::to('createRole/role')}}">
                    <button type="button" class="btn text-white" style="background-color: #1da1f2">Thêm chức vụ</button>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Chức Vụ</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Thâm niên</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ngày tại chức</th>
                  </tr>
                </thead>
                <tbody>
    
                    @foreach($roles as $role)

                
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="{{asset('assets/img/role.png')}}" class="avatar avatar-sm me-3" alt="xd">
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="avatar-group mt-2">
                        <span class="text-xs font-weight-bold">{{$role->name}}</span>
                      </div>
                    </td>
                    <td class="align-middle">
                      <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                              <div class="progress-percentage">
                                  <span class="text-xs font-weight-bold">
                                      @php
                                          $diff = $user->created_at->diff(Carbon\Carbon::now());
                                          $totalDays = $diff->days; // Tổng số ngày (khoảng cách giữa created_at và hiện tại)
                                          echo $diff->y . ' năm, ' . $diff->m . ' tháng, ' . $diff->d . ' ngày';
                                      @endphp
                                  </span>
                              </div>
                          </div>
                          <div class="progress">
                              <div 
                                  class="progress-bar bg-gradient-info" 
                                  role="progressbar"
                                  data-total-days="{{ $totalDays }}" 
                                  aria-valuemin="0" 
                                  aria-valuemax="30" 
                                  style="width: 0%;"> <!-- Khởi tạo width là 0%, JS sẽ xử lý sau -->
                              </div>
                          </div>
                      </div>
                  </td>
                  
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold">
                        {{ $user->created_at->format('d/m/Y') }}
                      </span>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Lấy tất cả các thanh progress-bar
        const progressBars = document.querySelectorAll('.progress-bar');

        progressBars.forEach(bar => {
            // Lấy tổng số ngày từ thuộc tính data-total-days
            const totalDays = parseInt(bar.getAttribute('data-total-days'));
            
            // Tính toán giá trị phần trăm (giới hạn max là 30 ngày ~ 1 tháng)
            const maxDays = 30; // Giả định 1 tháng có 30 ngày
            const progressValue = Math.min((totalDays / maxDays) * 100, 100); // Giới hạn tối đa là 100%

            // Cập nhật thuộc tính aria-valuenow và style width
            bar.setAttribute('aria-valuenow', totalDays);
            bar.style.width = `${progressValue}%`;
        });
    });

    </script>

    {{-- <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
        </div>
      </div>
    </footer> --}}
  {{-- </div> --}}
@endsection