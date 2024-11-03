<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; //CUSTOM MIMI
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Models\Payed;
use App\Models\StudentOrg;
use App\Models\ControlNumber;
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
Route::get('/controlnumber', function () {
    $controlnumbers = ControlNumber::whereIn('program', [
        'Certificate in Information Technology', 
        'Diploma in Information Technology'
    ])->get();

    return view('controlnumber')->with('controlnumbers', $controlnumbers);
});

Route::get('/student_organization', function () {
    $controlnumbers = StudentOrg::all();

    return view('studentorg')->with('controlnumbers', $controlnumbers);
});








Route::get('/postshow/{posts}',
'App\Http\Controllers\PostController@show'


);
Route::get('/dash','App\Http\Controllers\UsersController@dash')->middleware('auth');

Route::get('/dash/member/add','App\Http\Controllers\DashboardController@add')->middleware('auth');

//Route::get('/dash/member','App\Http\Controllers\DashboardController@manage')->middleware('role:Admin');
Route::resource('dash/profile','App\Http\Controllers\MyProfileController')->middleware('auth');
Route::resource('dash/profile/change','App\Http\Controllers\ChangePasswordController')->middleware('auth');
Route::get('dash/pwd_change','App\Http\Controllers\ChangePasswordController@change')->middleware('auth');
Route::resource('dash/profile/change/picture','App\Http\Controllers\ChangeProfilePictureController')->middleware('auth');

Route::get('dash/profile','App\Http\Controllers\MyProfileController@index')->middleware('auth');
//Route::get('/dash/managemember','App\Http\Controllers\UsersController@index');


//Route::get('/','App\Http\Controllers\PagesController@index');
Route::get('/','App\Http\Controllers\PagesController@index');

// 'App\Http\Controllers\PagesController@index'
//Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Auth::routes();


//Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('posts');
Route::get('dash/posts/addpost','App\Http\Controllers\PostController@create')->middleware('auth');
Route::get('dash/posts/manage','App\Http\Controllers\PostController@manage')->middleware('auth');

//MEMBER ROUTE
Route::get('dash/member/cert','App\Http\Controllers\UsersController@certificate_member')->middleware('role:Admin');
Route::get('dash/member/cert/cr','App\Http\Controllers\UsersController@certificate_member')->middleware('role:CR');


Route::get('dash/member/diploma','App\Http\Controllers\UsersController@diploma_member')->middleware('role:Admin');
Route::get('dash/member/diploma/cr','App\Http\Controllers\UsersController@diploma_member')->middleware('role:CR');


Route::get('dash/member/diploma_2','App\Http\Controllers\UsersController@diploma2_member')->middleware('role:Admin');
Route::get('dash/member/diploma_2/cr','App\Http\Controllers\UsersController@diploma2_member')->middleware('role:CR');


Route::get('/dash/member','App\Http\Controllers\UsersController@index')->middleware('auth');
//Route::get('/dash/member/cr','App\Http\Controllers\UsersController@index')->middleware('role:CR');
Route::resource('/dash/member','App\Http\Controllers\UsersController')->middleware('auth');


//Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
//Route::resource('/posts', 'App\Http\Controllers\PostController');

//project route
Route::resource('dash/posts','App\Http\Controllers\PostController')->middleware('auth');

Route::resource('/dash/project','App\Http\Controllers\ProjectController')->middleware('auth');


//Route::resource('/dash/admin/project','App\Http\Controllers\ProjectController')->middleware('role:Admin');


Route::get('/dash/notify/add',function (){


  return 'COMING SOON';
});

//Route::resource('/dash/notification','App\Http\Controllers\AlertsController');
//Route::get('/dash/notification','App\Http\Controllers\AlertsController@index');
//Route::get('/dash/notification/create','App\Http\Controllers\AlertsController@create');
//Route::get('/dash/notification/manage','App\Http\Controllers\AlertsController@manage');

// Define resource route kwa posts ambayo itatumia PostController
  //->middleware('role:Accountant');


  //targert register page
Route::get('/dash/paid_it_day_management','App\Http\Controllers\ItDayPaidController@index')->middleware('auth');

Route::get('/dash/paid_it_day_management/analytics','App\Http\Controllers\ItDayPaidController@analytics')->middleware('auth');
Route::resource('/dash/paid_it_day_management','App\Http\Controllers\ItDayPaidController')->middleware('auth');
//Route::post('/dash/paid_it_day_managements','App\Http\Controllers\ItDayPaidController@store');

Route::get('/dash/leader/add','App\Http\Controllers\leadersController@index')->middleware('auth');
Route::resource('/dash/leader','App\Http\Controllers\leadersController')->middleware('auth');

Route::get('/dash/vote_now','App\Http\Controllers\VoteController@index')->middleware('auth');
Route::resource('/dash/vote','App\Http\Controllers\VoteController')->middleware('auth');

Route::get('/dash/votes','App\Http\Controllers\DashboardController@votes')->middleware('auth');

Route::get('/dash/payed',function(){
  $payeds=Payed::all();
  return view('dashboard.payed')->with('payeds',$payeds);
});

Route::get('/register',function (){


   
    return view('mitm');
  });


  Route::get('/ADMIN',function (){


    return view('mitm');
  });
  Route::get('/USERS',function (){


    return view('mitm');
  });
  Route::get('/dash/notification',function (){


    return 'Coming soon';
  });

  Route::get('/dash/already_vote',function (){


    return view('dashboard.already_vote')->with('success','Your Alredy Voted');
  });

