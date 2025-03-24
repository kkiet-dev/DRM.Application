<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\ProcesService\ProcesController;
use App\Http\Controllers\ManagerDpService\ManagerController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Procesing;

use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('dashboardView');

Route::middleware(['web'])->prefix('managerdp')->group(function(){
    Route::get('/user_department', [ManagerController::class, 'show'])->name('getDepartment');
});

Route::prefix('/profileUser')->group(function()
{
    Route::get('show', [ProfileController::class, 'showProfile']);
});

Route::prefix('User')->middleware('auth', \App\Http\Middleware\CheckAdmin::class)->group(function(){
    Route::get('/show', [AdminController::class, 'managerUser'])->name('managerUser');
    Route::get('/register', [AdminController::class, 'showCreate'])->name('register');
    Route::post('/register', [AdminController::class, 'register'])->name('register');
});

Route::prefix('createRole')->middleware(['auth',\App\Http\Middleware\CheckAdmin::class])->group(function(){
    Route::get('/role', [AdminController::class, 'showCreateRole'])->name('role');
    Route::post('/role', [AdminController::class, 'createRole'])->name('role');
});

Route::prefix('Department')->group(function(){
    Route::get('/show', [DepartmentController::class, 'showIndex'])->name('department');
    Route::get('/showCreate', [DepartmentController::class, 'showCreateDepartment'])->name('showCreate');
    Route::post('/create', [DepartmentController::class, 'createDepartment'])->name('createDepartment');
});

Route::middleware(['web'])->prefix('managerdp')->group(function(){
    Route::get('/Department', [ManagerController::class, 'show'])->name('getDepartment');
});

Route::prefix('ProcesingService')->group(function(){
    Route::get('/show', [ProcesController::class, 'showCreate']);
    Route::post('/create', [ProcesController::class, 'store'])->name('procesing');
});

Route::get('/view-file/{id}', function ($id) {
    $procesing = Procesing::find($id);
    
    if (!$procesing || empty($procesing->file_data)) {
        abort(404);
    }

    // Lấy dữ liệu file từ DB
    $fileData = $procesing->file_data;
    $fileType = $procesing->file_mime_type; // Giả sử bạn lưu loại MIME của file

    return Response::make($fileData, 200, [
        'Content-Type' => $fileType,
        'Content-Disposition' => 'inline'
    ]);
});


///test session user
Route::get('/test-session', function () {
    session(['test' => 'Session is working!']);
    return session('test');
});

Route::get('/check-session', function () {
    return response()->json([
        'user' => Auth::user(),
        'session' => session()->all(),
    ]);
})->middleware('web');

Route::get('/testAPI', [AdminController::class, 'testAPI']);