@extends('admin.home')

@section('showProfile')
<div class="col-12 col-xl-4">
    <div class="card h-100">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-md-8 d-flex align-items-center">
            <h6 class="mb-0">Profile Information</h6>
          </div>
          <div class="col-md-4 text-end">
            <a href="javascript:;">
              <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
            </a>
          </div>
        </div>
      </div>
        @php
             use Illuminate\Support\Facades\Auth;
        @endphp
        
      <div class="card-body p-3">
        <hr class="horizontal gray-light my-4">
        <ul class="list-group">
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Họ & Tên:</strong> &nbsp;
            @if(Auth::check())
            {{ Auth::user()->name }}  
            @else
                <p>Null.</p>
            @endif
          </li>

          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Chức Vụ:</strong> &nbsp;
            @if(Auth::check()) 
            {{ Auth::user()->role->name }}  
            @else
                <p>Null</p>
            @endif
          </li>

          <li class="d-flex justify-content-start pt-6" style="list-style-type: none">
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-dark">Đăng xuất</button>
            </form>
          </li>
          
        </ul>
      </div>
    </div>
</div>
@endsection