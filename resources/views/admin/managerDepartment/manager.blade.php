@extends('admin.home')
@section('department_content')

@if($roleName === 'admin')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header d-flex col-12 pb-0">
            <div class="col-6 d-flex align-items-center">
                <h6>Thông Tin Phòng Ban</h6>
              </div>
              {{-- {{ URL::to('createRole/role')}} --}}
              <div class="col-6 d-flex justify-content-end">
                    <a class="nav-link  " href="{{URL::to('Department/showCreate')}}">
                        <button type="button" class="btn text-white" style="background-color: #1da1f2">Tạo Phòng Ban</button>
                    </a>
              </div>
        </div>

        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Phòng Ban</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Ngày Khởi Tạo</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($departments as $department)
                <tr>
                  <td>
                    <div class="d-flex px-2">
                      <div class="my-auto">
                        <h6 class="mb-0 text-sm">{{$department->id}}</h6>
                      </div>
                    </div>
                  </td>

                  <td>
                    <p class="text-sm font-weight-bold mb-0">{{$department->name}}</p>
                  </td>
                
                  <td class="align-middle text-center">
                    <div class="d-flex align-items-center justify-content-center">
                      <div>
                        <div class="progress">
                          <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="30" style="width: 30%;"></div>
                        </div>
                      </div>
                    </div>
                  </td>

                  <td class="align-middle">
                    <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-xs"></i>
                    </button>
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
@else
<p></p>
@endif

@endsection