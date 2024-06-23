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
use App\Http\Controllers\backend\AdminProjectController;
use App\Http\Controllers\backend\AdminRegisterController;
use App\Http\Controllers\backend\AdminRemixIconController;
////////// #frontend////////////////////
use App\Http\Controllers\frontend\Aboutuscontroller;
use App\Http\Controllers\frontend\Blogcontroller;
use App\Http\Controllers\frontend\Contactcontroller;
use App\Http\Controllers\frontend\Contactuscontroller;
use App\Http\Controllers\frontend\Faqcontroller;
use App\Http\Controllers\frontend\Homecontroller;
use App\Http\Controllers\frontend\Insurancecontroller;
use App\Http\Controllers\frontend\Projectcontroller;
use App\Http\Controllers\frontend\registercontroller;
use App\Http\Controllers\frontend\Servicedetailscontroller;
use App\Http\Controllers\frontend\Services;
use App\Http\Controllers\frontend\Teamcontroller;
use App\Http\Controllers\frontend\Teamdetailscontroller;
use Illuminate\Support\Facades\Route;

// frontend controller

Route::get('/', [Homecontroller::class, 'index']);
Route::get('/index', [Homecontroller::class, 'index'])->name('home');
Route::post('/index', [Homecontroller::class, 'store']);
Route::get('/Contact', [Contactuscontroller::class, 'index']);
Route::post('/Contact', [Contactuscontroller::class, 'store']);
Route::get('/contact', [Contactcontroller::class, 'index']);
Route::get('/contact', [Contactcontroller::class, 'storeA']);
Route::get('/about', [Aboutuscontroller::class, 'index']);
Route::get('/team', [Teamcontroller::class, 'index']);
Route::get('/teamdetails', [Teamdetailscontroller::class, 'index']);
Route::get('/servicesdetails', [Servicedetailscontroller::class, 'index']);
Route::get('/services', [Services::class, 'index']);
Route::get('/projects', [Projectcontroller::class, 'index']);
Route::get('/insurance', [Projectcontroller::class, 'index']);
Route::get('/faqs', [Faqcontroller::class, 'index']);
// Route::get('/faqs', [Faqcontroller::class, 's']);

Route::get('/blog', [Blogcontroller::class, 'index']);
Route::get('/insurance', [Insurancecontroller::class, 'index']);
Route::get('/register', [registercontroller::class, 'index'])->name('user-register');
Route::post('/register', [registercontroller::class, 'register']);
Route::post('/register/view', [registercontroller::class, 'view']);
Route::get('/register/view', [registercontroller::class, 'view']);
Route::delete('register/delete/{id}', [registercontroller::class, 'delete'])->name('register.delete');
Route::get('/register/edit/{id}', [RegisterController::class, 'edit']);
Route::post('/register/update/{id}', [RegisterController::class, 'update'])->name('register.update');
///////////// backend  admin Side Code  ////////////
////////////////////     admin  ////////////////////////////

//Login Page
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/login', function () {
    if (session()->has('email')) {
        return redirect('/admin');
    } else {
        return view('backend.login');
    }

});
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
Route::get('/admins', [AdminHomeController::class, 'home'])->name('admin');

Route::post('/admin', [AdminHomeController::class, 'index']);
Route::get('/Login', [AdminLoginController::class, 'index']);
Route::Post('/Login', [AdminLoginController::class, 'store']);
Route::get('/RegisterAdmin', [AdminRegisterController::class, 'index']);
Route::post('/RegisterAdmin', [AdminRegisterController::class, 'store']);
Route::get('/profile', [AdminProfileController::class, 'index']);
Route::get('/AdminContact', [AdminContactController::class, 'index']);
Route::post('/AdminContact', [AdminContactController::class, 'store']);

// faqs///
// Route::get('/AdminFaqs', [AdminFAQSController::class, 'index']);
Route::get('/AdminFaq', [AdminFAQSController::class, 'index']);

Route::get('/admin/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('faq.add');
Route::post('/admin/faqadd', [AdminFaqsController::class, 'submitFaqRecord']);
Route::get('/admin/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('faq.edit');
Route::put('/admin/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('faq.update');
Route::delete('/admin/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('faq.delete');

Route::get('/formValid', [AdminFormValidationController::class, 'index']);
Route::get('/formLayout', [AdminFormLayoutController::class, 'index']);
Route::get('/formEditor', [AdminFormEditorController::class, 'index']);
Route::get('/formElement', [AdminFormElementController::class, 'index']);
Route::get('/dataTable', [AdminDataTableController::class, 'index']);
Route::get('/generalTable', [AdminGeneralTableController::class, 'index']);
Route::get('/iconBootstrap', [AdminIconBootstrapController::class, 'index']);
Route::get('/boxIcon', [AdminBoxiconController::class, 'index']);
Route::get('/remixIcon', [AdminRemixIconController::class, 'index']);

////projects
Route::get('/admin/projects', [AdminProjectController::class, 'index'])->name('project.add');
Route::get('/admin/project', [AdminProjectController::class, 'projects']);
Route::get('/admin/projectadd', [AdminProjectController::class, 'addProject'])->name('project.add');
Route::post('/admin/project-add', [AdminProjectController::class, 'submitProjectRecord']);
Route::get('/admin/project-edit/{id}', [AdminProjectController::class, 'editProject'])->name('project.edit');
Route::put('/admin/project-edit/{id}', [AdminProjectController::class, 'updateProject'])->name('project.update');
Route::delete('/admin/project-delete/{id}', [AdminProjectController::class, 'deleteProject'])->name('project.delete');
