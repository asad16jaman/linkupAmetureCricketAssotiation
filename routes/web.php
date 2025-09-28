<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Fontend\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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


   Auth::routes(['register' => false]);

   Route::get('image', function () {
      Artisan::call('storage:link');
      return redirect()->back()->with('success', 'Storage linked successfully.');
   })->name('admin.storage.link');


   Route::get('clear', function () {
      Artisan::call('optimize:clear');
      return redirect()->back()->with('success', 'Application cache cleared.');
   })->name('admin.clear.cache');

   Route::get('blogs', [WelcomeController::class, 'blogs'])->name('welocme.blogs');

   Route::get('about', [WelcomeController::class, 'aboutus'])->name('welocme.aboutus');
   Route::get('contact', [WelcomeController::class, 'contactus'])->name('welocme.contactus');
   Route::get('message_details', [WelcomeController::class, 'messageDetails'])->name('welcome.messageDetails');

   Route::get('welcome/note', [WelcomeController::class, 'welocmeNote'])->name('welocme.note');


   Route::get('team/members', [WelcomeController::class, 'teamMembers'])->name('welocme.teamMembers');

   Route::get('photo/galleries', [WelcomeController::class, 'photoGalleries'])->name('welocme.photoGalleries');
   Route::get('video/galleries', [WelcomeController::class, 'videoGalleries'])->name('welocme.videoGalleries');


   Route::group(['middleware' => ['auth'],'prefix' => 'admin'], function() {
      Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
      
      // user route
      Route::get('users/all', [UserController::class, 'usersAll'])->name('admin.usersAll');
      Route::get('user/create', [UserController::class, 'userCreate'])->name('admin.userCreate');
      Route::post('user/store', [UserController::class, 'userStore'])->name('admin.userStore');
      Route::get('user/edit/{user}', [UserController::class, 'userEdit'])->name('admin.userEdit');
      Route::post('user/update/{user}', [UserController::class, 'userUpdate'])->name('admin.userUpdate');
      Route::get('user/delete/{user}', [UserController::class, 'userDelete'])->name('admin.userDelete');

      // slider route
      Route::get('sliders/all', [SliderController::class, 'slidersAll'])->name('admin.slidersAll');
      Route::get('slider/create', [SliderController::class, 'sliderCreate'])->name('admin.sliderCreate');
      Route::post('slider/store', [SliderController::class, 'sliderStore'])->name('admin.sliderStore');
      Route::get('slider/edit/{slider}', [SliderController::class, 'sliderEdit'])->name('admin.sliderEdit');
      Route::post('slider/update/{slider}', [SliderController::class, 'sliderUpdate'])->name('admin.sliderUpdate');
      Route::post('slider/delete/{slider}', [SliderController::class, 'sliderDelete'])->name('admin.sliderDelete');

      // website setting route
      Route::get('setting', [SettingController::class, 'setting'])->name('admin.setting');
      Route::post('setting/update/{ws}', [SettingController::class, 'settingUpdate'])->name('admin.settingUpdate');


      // team member route
      Route::get('team/members/all', [TeamMemberController::class, 'teamMembersAll'])->name('admin.teamMembersAll');
      Route::get('team/member/create', [TeamMemberController::class, 'teamMemberCreate'])->name('admin.teamMemberCreate');
      Route::post('team/member/store', [TeamMemberController::class, 'teamMemberStore'])->name('admin.teamMemberStore');
      Route::get('team/member/edit/{team}', [TeamMemberController::class, 'teamMemberEdit'])->name('admin.teamMemberEdit');
      Route::post('team/member/update/{team}', [TeamMemberController::class, 'teamMemberUpdate'])->name('admin.teamMemberUpdate');
      Route::post('team/member/delete/{team}', [TeamMemberController::class, 'teamMemberDelete'])->name('admin.teamMemberDelete');


      // page route
      Route::get('pages/all', [PageController::class, 'pagesAll'])->name('admin.pagesAll');
      Route::get('page/create', [PageController::class, 'pageCreate'])->name('admin.pageCreate');
      Route::post('page/store', [PageController::class, 'pageStore'])->name('admin.pageStore');
      Route::get('page/edit/page/{page}', [PageController::class, 'pageEdit'])->name('admin.pageEdit');
      Route::post('page/update/page/{page}', [PageController::class, 'pageUpdate'])->name('admin.pageUpdate');
      Route::post('page/delete/page/{page}', [PageController::class, 'pageDelete'])->name('admin.pageDelete');


      // page system route

      Route::get('about-us', [PageController::class, 'aboutUs'])->name('admin.aboutUs');
      Route::post('about/{about}', [PageController::class, 'aboutUsUpdate'])->name('admin.aboutUsUpdate');

      Route::get('chairman', [PageController::class, 'chairmanMessage'])->name('admin.chairmanMessage');
      Route::post('chairman/{chairman}', [PageController::class, 'chairmanMessageUpdate'])->name('admin.chairmanMessageUpdate');

      Route::get('welcome-message', [PageController::class, 'welcomeMessage'])->name('admin.welcomeMessage');
      Route::post('welcome-message/{welcome}', [PageController::class, 'welcomeMessageUpdate'])->name('admin.welcomeMessageUpdate');


      // category route
      Route::get('categories/all', [CategoryController::class, 'categoriesAll'])->name('admin.categoriesAll');
      Route::get('category/create', [CategoryController::class, 'categoryCreate'])->name('admin.categoryCreate');
      Route::post('category/store', [CategoryController::class, 'categoryStore'])->name('admin.categoryStore');
      Route::get('category/edit/{category}', [CategoryController::class, 'categoryEdit'])->name('admin.categoryEdit');
      Route::post('category/update/{category}', [CategoryController::class, 'categoryUpdate'])->name('admin.categoryUpdate');
      Route::post('category/delete/{category}', [CategoryController::class, 'categoryDelete'])->name('admin.categoryDelete');


      // blg route
      Route::get('blogs/all', [BlogController::class, 'blogsAll'])->name('admin.blogsAll');
      Route::get('blog/create', [BlogController::class, 'blogCreate'])->name('admin.blogCreate');
      Route::post('blog/store', [BlogController::class, 'blogStore'])->name('admin.blogStore');
      Route::get('blog/edit/{blog}', [BlogController::class, 'blogEdit'])->name('admin.blogEdit');
      Route::post('blog/update/{blog}', [BlogController::class, 'blogUpdate'])->name('admin.blogUpdate');
      Route::post('blog/delete/{blog}', [BlogController::class, 'blogDelete'])->name('admin.blogDelete');



   });


