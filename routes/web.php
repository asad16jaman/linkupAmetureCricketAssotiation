<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\WellcomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventTypeController;
use App\Http\Controllers\Admin\ManagemenController;
use App\Http\Controllers\Fontend\WelcomeController;
use App\Http\Controllers\Admin\AuthMessageController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\VideoGalleryController;

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

   Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

   
   Route::get('blogs/{type?}', [WelcomeController::class, 'blogs'])->name('welocme.blogs');
   Route::get('blogs/{uid}/detail', [WelcomeController::class, 'blogsDetail'])->name('welocme.blogs.detial');
   Route::get('about', [WelcomeController::class, 'aboutus'])->name('welocme.aboutus');

   Route::get('contact', [WelcomeController::class, 'contactus'])->name('welocme.contactus');
   Route::post('contact', [WelcomeController::class, 'saveContact'])->name('welocme.contactus');

   Route::get('message_details', [WelcomeController::class, 'messageDetails'])->name('welcome.messageDetails');

   Route::get('welcome/note', [WelcomeController::class, 'welocmeNote'])->name('welocme.note');


   Route::get('team/members', [WelcomeController::class, 'teamMembers'])->name('welocme.teamMembers');
   Route::get('photo/galleries', [WelcomeController::class, 'photoGalleries'])->name('welocme.photoGalleries');
   Route::get('video/galleries', [WelcomeController::class, 'videoGalleries'])->name('welocme.videoGalleries');


Route::prefix('admin')->group(function(){
    Route::get('/login',[DashboardController::class,'login'])->name('login');
    Route::post('/login',[DashboardController::class,'authenticate'])->name('login');
    Route::get('/error',[DashboardController::class,'errorpage'])->name('error');
    //registring admin/users
    Route::get('/register',[DashboardController::class,'register'])->name('admin.register');
    Route::post('/register',[DashboardController::class,'store'])->name('admin.register');
});


Route::group(['prefix'=> '/admin','middleware'=>'auth'], function () {
    Route::get('/',[DashboardController::class,'index'])->name('admin');
});

Route::group(['prefix'=> '/admin','middleware'=>'auth','as'=>'admin.'], function () {
    
    //handling users from admin pannel
    Route::get("/users/{id?}",[UsersController::class,"index"])->name("users");
    Route::post("/users/{id?}",[UsersController::class,"storeUser"])->name("users");
    Route::post("/users/{id}/delete",[UsersController::class,"deleteUser"])->name("user.delete");

    //edit user from user side
    Route::get("/users/{id}/edit",[UsersController::class,"editUser"])->name("user.edit");
    Route::post("/users/{id}/edit",[UsersController::class,"editUserStore"])->name("user.edit");

    //company maintain url
    Route::get("/company",[CompanyController::class,"index"])->name("company");
    Route::post("/company",[CompanyController::class,"create"])->name("company");

    //slider maintaining url
    Route::get("/sliders/{id?}",[SliderController::class,"index"])->name("slider");
    Route::post("/sliders/{id?}",[SliderController::class,"store"])->name("slider");
    Route::post("/sliders/{id}/delete",[SliderController::class,"destroy"])->name("slider.delete");



    //Event Type url hare
    Route::get("/event-type/{id?}",[EventTypeController::class,"index"])->name("eventType");
    Route::post("/event-type/{id?}",[EventTypeController::class,"store"])->name("eventType");
    Route::post("/event-type/{id}/delete",[EventTypeController::class,"destroy"])->name("eventType.delete");

    //Country url hare
   

    // Event url hare
    Route::get("/event/{id?}",[EventController::class,"index"])->name("event");
    Route::post("/event/{id?}",[EventController::class,"store"])->name("event");
    Route::post("/event/{id}/delete",[EventController::class,"destroy"])->name("event.delete");
   
    // Route::get("/product-review/{id?}",[ProductController::class,"allProductReview"])->name("product.review");
    // Route::post("/product-review/{id}/delete",[ProductController::class,"deleteProductReview"])->name("product.review.delete");

    //Service url hare
   //  Route::get("/service/{id?}",[ServiceController::class,"index"])->name("service");
   //  Route::post("/service/{id?}",[ServiceController::class,"store"])->name("service");
   //  Route::post("/service/{id}/delete",[ServiceController::class,"destroy"])->name("service.delete");



    //chairman-message
    Route::get('/chairman-message',[AuthMessageController::class,'index'])->name('ch-message');
    Route::post('/chairman-message',[AuthMessageController::class,'store'])->name('ch-message');
    

   
    //Photo Gallery url hare
    Route::get("/photogallery/{id?}",[PhotoGalleryController::class,"index"])->name("photogallery");
    Route::post("/photogallery/{id?}",[PhotoGalleryController::class,"store"])->name("photogallery");
    Route::post("/photogallery/{id}/delete",[PhotoGalleryController::class,"destory"])->name("photogallery.delete");

    //Photo Gallery url hare
    Route::get("/videogallery/{id?}",[VideoGalleryController::class,"index"])->name("videogallery");
    Route::post("/videogallery/{id?}",[VideoGalleryController::class,"store"])->name("videogallery");
    Route::post("/videogallery/{id}/delete",[VideoGalleryController::class,"destory"])->name("videogallery.delete");

    
    //Managment url hare
    Route::get('/player/{id?}',[ManagemenController::class,'index'])->name('management');
    Route::post('/player/{id?}',[ManagemenController::class,'store'])->name('management');
    Route::post('/player/{id}/delete',[ManagemenController::class,'destroy'])->name('management.delete');

    //about url hare
    Route::get('/about',[AboutController::class,'index'])->name('about');
    Route::post('/about',[AboutController::class,'store'])->name('about');

    

    //Contact url hare
    Route::get('/contact',[ContactController::class,'index'])->name('message');
    Route::post('/contact/{id}',[ContactController::class,'destroy'])->name('message.delete');

     //Client url hare
    Route::get('/clients',[ClientController::class,'index'])->name('client');
    Route::post('/clients',[ClientController::class,'store'])->name('client');
    Route::post('/clients/{id}',[ClientController::class,'destroy'])->name('client.delete');

    //Wellcome Node url hare
    Route::get('/create-wellcome-node',[WellcomeController::class,'index'])->name('wellcome');
    Route::post('/create-wellcome-node',[WellcomeController::class,'store'])->name('wellcome');

    //feedback maintaining url
   
    
    //admin logout
    Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
});



Route::get('image', function () {
      Artisan::call('storage:link');
      return redirect()->back()->with('success', 'Storage linked successfully.');
   })->name('admin.storage.link');


Route::get('clear', function () {
      Artisan::call('optimize:clear');
      return redirect()->back()->with('success', 'Application cache cleared.');
   })->name('admin.clear.cache');









