<?php
use App\Http\Controllers\backend\AdminBoxiconController;
use App\Http\Controllers\backend\AdminContactController;
use App\Http\Controllers\backend\AdminDataTableController;
use App\Http\Controllers\backend\AdminFAQSController;
use App\Http\Controllers\backend\AdminFormEditorController;
use App\Http\Controllers\backend\AdminFormElementController;
use App\Http\Controllers\backend\AdminFormLayoutController;
use App\Http\Controllers\backend\adminFormValidationController;
use App\Http\Controllers\backend\AdminGeneralTableController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminIconBootstrapController;
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminProfileController;
use App\Http\Controllers\backend\AdminRegisterController;
use App\Http\Controllers\backend\AdminRemixIconController;
////////// #frontend////////////////////
use App\Http\Controllers\frontend\aboutuscontroller;
use App\Http\Controllers\frontend\blogcontroller;
use App\Http\Controllers\frontend\contactcontroller;
use App\Http\Controllers\frontend\contactuscontroller;
use App\Http\Controllers\frontend\faqcontroller;
use App\Http\Controllers\frontend\homecontroller;
use App\Http\Controllers\frontend\insurancecontroller;
use App\Http\Controllers\frontend\projectcontroller;
use App\Http\Controllers\frontend\registercontroller;
use App\Http\Controllers\frontend\servicedetailscontroller;
use App\Http\Controllers\frontend\services;
use App\Http\Controllers\frontend\teamcontroller;
use App\Http\Controllers\frontend\teamdetailscontroller;
use Illuminate\Support\Facades\Route;

// frontend controller

Route::get('/', [homecontroller::class, 'index']);
Route::get('/index', [homecontroller::class, 'index'])->name('home');
Route::get('/Contact', [contactuscontroller::class, 'index']);
Route::post('/Contact', [contactuscontroller::class, 'store']);
Route::get('/contact', [contactcontroller::class, 'index']);
Route::get('/contact', [contactcontroller::class, 'storeA']);
Route::get('/about', [aboutuscontroller::class, 'index']);
Route::get('/team', [teamcontroller::class, 'index']);
Route::get('/teamdetails', [teamdetailscontroller::class, 'index']);
Route::get('/servicesdetails', [servicedetailscontroller::class, 'index']);
Route::get('/services', [services::class, 'index']);
Route::get('/projects', [projectcontroller::class, 'index']);
Route::get('/insurance', [projectcontroller::class, 'index']);
Route::get('/faqs', [faqcontroller::class, 'index']);
Route::get('/blog', [blogcontroller::class, 'index']);
Route::get('/insurance', [insurancecontroller::class, 'index']);
Route::get('/register', [registercontroller::class, 'index'])->name('user-register');
Route::post('/register', [registercontroller::class, 'register']);
Route::post('/register/view', [registercontroller::class, 'view']);
Route::get('/register/view', [registercontroller::class, 'view']);
Route::delete('register/delete/{id}', [registercontroller::class, 'delete'])->name('register.delete');
Route::get('/register/edit/{id}', [RegisterController::class, 'edit']);
Route::post('/register/update/{id}', [RegisterController::class, 'update'])->name('register.update');
///////////// backend  admin Side Code  ////////////
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
Route::get('/Login', [AdminLoginController::class, 'index']);
// Route::get('/Login', function () {
//     if (session()->has('email')) {
//         return redirect('/admin');
//     } else {
//         return view('backend/Login');
//     }
// });
Route::get('/admin', [AdminHomeController::class, 'onLogin'])->name('admin');
// for session
Route::get('/admin', function () {
    if (session()->has('email')) {
        return view('backend.admin');
    } else {
        return redirect('/admin');
    }
});
Route::post('/admin', [AdminHomeController::class, 'index'])->name('admin');
Route::get('/Login', [AdminLoginController::class, 'index']);
Route::Post('/Login', [AdminLoginController::class, 'store']);
Route::get('/RegisterAdmin', [AdminRegisterController::class, 'index']);
Route::post('/RegisterAdmin', [AdminRegisterController::class, 'store']);
Route::get('/profile', [AdminProfileController::class, 'index']);
Route::get('/AdminContact', [AdminContactController::class, 'index']);
Route::post('/AdminContact', [AdminContactController::class, 'store']);
Route::get('/AdminFaqs', [AdminFAQSController::class, 'index']);
Route::get('/formValid', [adminFormValidationController::class, 'index']);
Route::get('/formLayout', [AdminFormLayoutController::class, 'index']);
Route::get('/formEditor', [AdminFormEditorController::class, 'index']);
Route::get('/formElement', [AdminFormElementController::class, 'index']);
Route::get('/dataTable', [AdminDataTableController::class, 'index']);
Route::get('/generalTable', [AdminGeneralTableController::class, 'index']);
Route::get('/iconBootstrap', [AdminIconBootstrapController::class, 'index']);
Route::get('/boxIcon', [AdminBoxiconController::class, 'index']);
Route::get('/remixIcon', [AdminRemixIconController::class, 'index']);
