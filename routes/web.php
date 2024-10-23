<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenceController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin' ])->group(function(){

    Route::get('/admin/login', [AdminController::class, 'AdminDashboard'])->name('AdminDashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');


    Route::controller(SliderController::class)->group(function () {
        Route::get('/all/Slider', 'AllSlider')->name('AllSlider');
        Route::get('/add/Slider', 'AddSlider')->name('AddSlider');
        Route::post('/store/Slider', 'StoreSlider')->name('StoreSlider');
        Route::get('/edit/Slider/{id}', 'EditSlider')->name('EditSlider');
        Route::post('/update/Slider', 'UpdateSlider')->name('UpdateSlider');
        Route::get('/delete/Slider/{id}', 'DeleteSlider')->name('DeleteSlider');
    });
    Route::controller(SuccessController::class)->group(function () {
        Route::get('/all/Success', 'AllSuccess')->name('AllSuccess');
        Route::get('/add/Success', 'AddSuccess')->name('AddSuccess');
        Route::post('/store/Success', 'StoreSuccess')->name('StoreSuccess');
        Route::get('/edit/Success/{id}', 'EditSuccess')->name('EditSuccess');
        Route::post('/update/Success', 'UpdateSuccess')->name('UpdateSuccess');
        Route::get('/delete/Success/{id}', 'DeleteSuccess')->name('DeleteSuccess');
    });
    Route::controller(AboutController::class)->group(function () {
        Route::get('/all/About', 'AllAbout')->name('AllAbout');
        Route::get('/add/About', 'AddAbout')->name('AddAbout');
        Route::post('/store/About', 'StoreAbout')->name('StoreAbout');
        Route::get('/edit/About/{id}', 'EditAbout')->name('EditAbout');
        Route::post('/update/About', 'UpdateAbout')->name('UpdateAbout');
        Route::get('/delete/About/{id}', 'DeleteAbout')->name('DeleteAbout');
    });
    Route::controller(ContactController::class)->group(function () {
        Route::get('/all/Contact', 'AllContact')->name('AllContact');
        Route::get('/add/Contact', 'AddContact')->name('AddContact');
        Route::post('/store/Contact', 'StoreContact')->name('StoreContact');
        Route::get('/edit/Contact/{id}', 'EditContact')->name('EditContact');
        Route::post('/update/Contact', 'UpdateContact')->name('UpdateContact');
        Route::get('/delete/Contact/{id}', 'DeleteContact')->name('DeleteContact');
    });
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/all/Category', 'AllCategory')->name('AllCategory');
        Route::get('/add/Category', 'AddCategory')->name('AddCategory');
        Route::post('/store/Category', 'StoreCategory')->name('StoreCategory');
        Route::get('/edit/Category/{id}', 'EditCategory')->name('EditCategory');
        Route::post('/update/Category', 'UpdateCategory')->name('UpdateCategory');
        Route::get('/delete/Category/{id}', 'DeleteCategory')->name('DeleteCategory');
    });
    Route::controller(CourseController::class)->group(function () {
        Route::get('/all/Course', 'AllCourse')->name('AllCourse');
        Route::get('/add/Course', 'AddCourse')->name('AddCourse');
        Route::post('/store/Course', 'StoreCourse')->name('StoreCourse');
        Route::get('/edit/Course/{id}', 'EditCourse')->name('EditCourse');
        Route::post('/update/Course', 'UpdateCourse')->name('UpdateCourse');
        Route::get('/delete/Course/{id}', 'DeleteCourse')->name('DeleteCourse');
        Route::get('/invoice/{id}', 'invoice')->name('invoice');
        Route::get('/invoiceforUser/{id}', 'invoiceforUser')->name('invoiceforUser');
    });
    Route::controller(ModuleController::class)->group(function () {
        Route::get('/all/Module', 'AllModule')->name('AllModule');
        Route::get('/add/Module', 'AddModule')->name('AddModule');
        Route::post('/store/Module', 'StoreModule')->name('StoreModule');
        Route::get('/edit/Module/{id}', 'EditModule')->name('EditModule');
        Route::post('/update/Module', 'UpdateModule')->name('UpdateModule');
        Route::get('/delete/Module/{id}', 'DeleteModule')->name('DeleteModule');
    });
    Route::controller(VideoController::class)->group(function () {
        Route::get('/all/Video', 'AllVideo')->name('AllVideo');
        Route::get('/add/Video', 'AddVideo')->name('AddVideo');
        Route::post('/store/Video', 'StoreVideo')->name('StoreVideo');
        Route::get('/edit/Video/{id}', 'EditVideo')->name('EditVideo');
        Route::post('/update/Video', 'UpdateVideo')->name('UpdateVideo');
        Route::get('/delete/Video/{id}', 'DeleteVideo')->name('DeleteVideo');
    });
    Route::controller(PrivacyController::class)->group(function () {
        Route::get('/all/Privacy', 'AllPrivacy')->name('AllPrivacy');
        Route::get('/add/Privacy', 'AddPrivacy')->name('AddPrivacy');
        Route::post('/store/Privacy', 'StorePrivacy')->name('StorePrivacy');
        Route::get('/edit/Privacy/{id}', 'EditPrivacy')->name('EditPrivacy');
        Route::post('/update/Privacy', 'UpdatePrivacy')->name('UpdatePrivacy');
        Route::get('/delete/Privacy/{id}', 'DeletePrivacy')->name('DeletePrivacy');
    });
    Route::controller(RefundController::class)->group(function () {
        Route::get('/all/Refund', 'AllRefund')->name('AllRefund');
        Route::get('/add/Refund', 'AddRefund')->name('AddRefund');
        Route::post('/store/Refund', 'StoreRefund')->name('StoreRefund');
        Route::get('/edit/Refund/{id}', 'EditRefund')->name('EditRefund');
        Route::post('/update/Refund', 'UpdateRefund')->name('UpdateRefund');
        Route::get('/delete/Refund/{id}', 'DeleteRefund')->name('DeleteRefund');
    });


    Route::controller(ExpenceController::class)->group(function () {
        Route::get('/all/Expence', 'AllExpence')->name('AllExpence');
        Route::get('/add/Expence', 'AddExpence')->name('AddExpence');
        Route::post('/store/Expence', 'StoreExpence')->name('StoreExpence');
        Route::get('/edit/Expence/{id}', 'EditExpence')->name('EditExpence');
        Route::post('/update/Expence', 'UpdateExpence')->name('UpdateExpence');
        Route::get('/delete/Expence/{id}', 'DeleteExpence')->name('DeleteExpence');
    });

    Route::get('/instrutor', [AdminController::class, 'instrutor'])->name('instrutor');
    Route::get('/assign', [AdminController::class, 'assign'])->name('assign');
    Route::post('/StoreAssign', [AdminController::class, 'StoreAssign'])->name('StoreAssign');
    Route::get('/AllAssign', [AdminController::class, 'AllAssign'])->name('AllAssign');
    Route::get('/editAssign/{id}', [AdminController::class, 'editAssign'])->name('editAssign');
    Route::post('/updateAssign', [AdminController::class, 'updateAssign'])->name('updateAssign');
    Route::get('/deleteAssign/{id}', [AdminController::class, 'deleteAssign'])->name('deleteAssign');
    Route::get('/student', [AdminController::class, 'student'])->name('student');
    Route::get('/offlineRegister', [AdminController::class, 'offlineRegister'])->name('offlineRegister');
    Route::POST('/offlinePayment', [AdminController::class, 'offlinePayment'])->name('offlinePayment');
    Route::get('/earning', [AdminController::class, 'earning'])->name('earning');

 
}); //end of admin group milldeware
Route::middleware(['auth', 'role:employee' ])->group(function(){

  
    Route::get('/employee/login', [EmployeeController::class, 'EmployeeDashboard'])->name('EmployeeDashboard');
    Route::get('/employee/logout', [EmployeeController::class, 'EmployeeLogout'])->name('EmployeeLogout');
   
   Route::get('/allcourse', [EmployeeController::class, 'allcourse'])->name('allcourse');
   Route::get('/studentList/{id}', [EmployeeController::class, 'studentList'])->name('studentList');
   Route::get('/courseContent/{id}', [EmployeeController::class, 'courseContent'])->name('courseContent');
   Route::POST('/storeContent', [EmployeeController::class, 'storeContent'])->name('storeContent');
}); 
//end of employee group milldeware


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store', [UserController::class, 'UserProfileStore'])->name('user.profile.store');
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout');
    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update.password');
    Route::get('/userCourse', [UserController::class, 'userCourse'])->name('userCourse');
    Route::get('/classes/{id}', [UserController::class, 'classes'])->name('classes');
    Route::get('/Edit/User/{id}', [UserController::class, 'EditUser'])->name('EditUser');
    Route::post('/Update/User', [UserController::class, 'UpdateUser'])->name('UpdateUser');
   
}); // Gorup Milldeware End




Route::post('/employee/store', [EmployeeController::class, 'EmployeeStore'])->name('EmployeeStore');

Route::get('/admin/dashboard', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/employee/dashboard', [EmployeeController::class, 'EmployeeLogin'])->name('employee.login');
Route::get('/employee/register', [EmployeeController::class, 'EmployeeRegister'])->name('EmployeeRegister');


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/success', [IndexController::class, 'success'])->name('success');
Route::get('/course/{id}', [IndexController::class, 'course'])->name('course');
Route::get('/courseDetails/{id}', [IndexController::class, 'courseDetails'])->name('courseDetails');

Route::middleware(['auth'])->group(function () {
// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2/{id}', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('chcekout');
}); // Gorup Milldeware End
Route::post('/pay', [SslCommerzPaymentController::class, 'index'])->name('pay');
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

Route::get('offline_register', [IndexController::class, 'offlineRegister'])->name('offline_register');
Route::POST('store_user', [IndexController::class, 'store_user'])->name('store_user');
//SSLCOMMERZ END
