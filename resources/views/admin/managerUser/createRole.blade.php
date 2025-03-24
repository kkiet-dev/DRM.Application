@extends('admin.home')

@section('createRole')
<div class="container mt-5">
    <div class="row justify-content-center">
            <div class="card">
                <div class="container">
                    <div class="text-start">
                        <h5 class="m-4">Thêm Chức Vụ Mới</h5>
                    </div>

                    <div class="card p-3 m-3" style="background-color: #f1f6f6">
                        <form method="POST" action="{{ route('role') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Tên Chức Vụ</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 text-start">
                                    <button type="submit" class="btn text-white"  style="background-color:#1da1f2">Thêm Chức Vụ</button>
                                </div>
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection