<?php

use App\Http\Controllers\registerController;
use App\Models\appointment;
use App\Models\doctor;
use App\Models\Major;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/home', function(){
    return view('home');
})->name('page.home');


Route::get('/history', function(){
    return view('history');
})->name('page.history');


Route::get('/majors', function(){
    return view('majors');
})->name('page.majors');


Route::get('/reserve', function(){
    return view('doctors.reserve');
})->name('page.reserve');


Route::get('/login', function(){
    return view('login');
})->name('page.login');


Route::get('/register', [registerController::class, 'create'])->name('register.create');
Route::post('/register', [registerController::class, 'store'])->name('register.store');

Route::get('/contact', function(){
    return view('contact');
})->name('page.contact');


Route::get('/doctors', function(){
    return view('doctors.doctors');
})->name('page.doctors');



//create user
Route::get('/user',function(){
    // User::create([
    //     'name'=> 'alli',
    //     'phone'=> '12233123652',
    //     'email'=> 'jjjj@gmail.com',
    //     'password'=> '00000120'
    // ]);

    
    $user = new User();
    $user = User::find(2) ;
    $user->update([
        'name'=> 'ali',
        'phone'=> '12233123652',
        'email'=> 'jjjj@gmail.com',
        'password'=> '00000120'
    ]);
    dd(User::get());
});



//create majors
Route::get('/major',function(){
    Major::create([
        'name' => 'dentist'
    ]);
});

//create doctor
Route::get('/doctor' , function(){
    // $doc = new doctor();
    // $doc ->name = 'mo';
    // $doc ->phone = 01222201200;
    // $doc ->description = "description description description description";
    // $doc ->email = "des@gomail.com";
    // $doc ->password = "dsdfsdfdf";
    // $doc ->major_id = 1;
    // $doc ->save();

    $doc = doctor::find(3)->delete();
});





//create query builder
Route::get('/add-user' , function(){
    DB::table('users')->insert([
        'name' => "eslam" ,
        'phone' => 01222012021 ,
        'email' => "eslam@gmail.com" ,
        'password' => 01012055 ,
    ]);
});



//delete query builder
Route::get('/delete-user' , function(){
    DB::table('users')->where('id' , 2)->delete();
});


//relation 1 to 1 :
// Route::get('/relation' , function(){
//     $user = User::find(1) ;
//     dd($user->profile) ;
// });


//relation 1 to m :
Route::get('/relation' , function(){
    $doctor = doctor::find(1) ;
    dd($doctor->major) ;
});


//face data :
Route::get('/face' , function(){
    Major::factory(15)->create();
});
















