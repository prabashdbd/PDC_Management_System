 <?php
use App\laravel;
use App\User;
use App\Role;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("reg","reg_test@index");
Route::post("store","reg_test@store");
// Route::view('/reg',"register");

Route::view('/details', "details");
Route::view('/detail',"details_test");
Route::group(['middleware'=>'web'],function(){

	Route::get("reg","reg_test@index");;

});
Route::get('/getname',function(){

	$user = laravel:: find(1);
	
	echo $user->name;
	echo " ";
	echo $user->address;
	echo " ";
	echo $user->email;
});


Route::get('/setname',function(){

	$user = laravel:: find(1);
	
	$user->name="pdd";
	$user->save();
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/comapanyhome', 'CompanyController@index_comp')->name('company');
Route::get('/studenthome', 'StudentController@index_stu')->name('student');
Route::view('/visitor_reg', "visitor_comp");
Route::get('/visitor_reg1', "reg_test@index");
Route::post('/visitor_reg1/action', "reg_test@action"); // testing___ delete
Route::view('/sidebar', "sidebar_test");
Route::view('/form_test1', "test");
Route::view('/adminlte', "layouts/adminlte");
Route::view('/form111', "Company/company_add");
Route::view('/form333', "Company/company_view");
// Route::view('/form555', "Student/student_view");
Route::POST('/students/add/addGroup', 'StudentController@add_group');
Route::POST('/students/add/addByList', 'StudentController@add_by_list');
Route::POST('/students/add/addSingle', 'StudentController@add_single');
// Route::view('/form777',"student/student_add");
Route::get('/students/add','StudentController@index_add');
Route::get('/students/view','StudentController@index_view');
Route::view('/form999', "Messaging/msg_cmp");
Route::view('/form1111', "Messaging/msg_stu");
Route::view('/form3333', "Messaging/msg_out"); 
Route::get('/student/readStudent/{id}', "StudentController@readStudent");
Route::post('/student/add/update', 'StudentController@studentUpdate');


// Route::get('/', function(){
// $user = Auth::user();

// 	if($user->isAdmin()){

// 		echo "This is an admin";


// 	}
// });


Route::get('/admin','AdminController@index');
// Route::view('/profile_view',"profile_view");
Route::get('/profile_view','CompanyController@index');






