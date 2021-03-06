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
	// return view('welcome');
	return view('details_test');
	
});

//Route::group(['middleware'=>['authenticate']],function (){

Route::get("reg","reg_test@index");
Route::post("store","reg_test@store");
// Route::view('/reg',"register");

Route::view('/details', "details");
Route::view('/detail',"details_test");
Route::group(['middleware'=>'web'],function(){

	Route::get("reg","reg_test@index");;

});

Auth::routes();

//-----dashboard------
Route::view('/adminlte/dash', "layouts/dashboard")->name('dashboard');
//-----dashboard------

//-----Messages-----
Route::get('/message/company', 'messageController@msg_cmp');
Route::get('/message/student', 'messageController@msg_stu');
Route::get('/message/outsider', 'messageController@msg_out');
Route::post('/message/send', 'messageController@msg_send');
Route::post('/message/send/student', 'messageController@msg_send_stu');
Route::post('/message/fetch', 'messageController@stu_fetch')->name('messageController.fetch');
Route::get('/message/view', 'messageController@msg_view');

//-----Messages-----


//-----Student-----

Route::POST('/students/add/addGroup', 'StudentController@add_group');
Route::POST('/students/add/addByList', 'StudentController@add_by_list');
Route::POST('/students/add/addSingle', 'StudentController@add_single');
Route::get('/students/add','StudentController@index_add');
Route::get('/students/view','StudentController@index_view');
Route::get('/student/readStudent{id}', "StudentController@readStudent");
Route::get('/student/viewStudent/{id}', "StudentController@readStudent");
Route::post('/student/add/update', 'StudentController@studentUpdate');
Route::post('/student/add/update/academic', 'StudentController@studentUpdateAcademic');
Route::get('/student/profile/edit', 'StudentController@studentProfile');
Route::get('/student/profile','StudentController@student_profile');
Route::post('/addcv', 'StudentController@addCV');
Route::post('/addimg', 'StudentController@addimg');
Route::get('/student/placements','StudentController@placements');
Route::post('/student/delete','StudentController@stu_delete');

Route::get('/student/profile/update', "StudentController@profileStudent");

Route::post('/csv/view', 'StudentController@csv_process')->name('StudentController.csv');
Route::post('/table/test', 'StudentController@table_test')->name('StudentController.csv_submit');

//-----Student-----





//-----Company-----
Route::post('/company/registration', 'CompanyController@CompanyReg');
Route::get('/company/to_be_approved', 'CompanyController@approve_comp');
Route::post('/company/approve', 'CompanyController@approve');
Route::post('/company/delete_request', 'CompanyController@delete_request');
Route::get('/company/adverts', 'CompanyController@adverts');
Route::post('/company/adverts/add', 'CompanyController@add_advert');
Route::get('/company/adverts/view', 'CompanyController@advert_view');
Route::get('/company/adverts/modalview', 'CompanyController@advert_view_approve');
Route::post('/company/adverts/approve', 'CompanyController@advert_approve');
//-----Company-----


//-----Report-----
Route::get('/reports/student_with', 'ReportController@student_table');
Route::get('/reports/company', 'ReportController@company_table');
//-----Report-----




Route::view('/test3', "test3");


// Route::get('/adminlte', 'HomeController@index')->name('home');


Route::get('/comapanyhome', 'CompanyController@index_comp')->name('company');
Route::get('/studenthome', 'StudentController@index_stu')->name('student');
Route::view('/visitor_reg', "visitor_comp");
Route::get('/visitor_reg1', "reg_test@index");
Route::post('/visitor_reg1/action', "reg_test@action"); // testing___ delete
Route::view('/sidebar', "sidebar_test");
Route::view('/form_test1', "test");
Route::get('/adminlte', 'HomeController@index')->name('adminlte');
Route::view('/company/add', "Company/company_add");
Route::view('/csv-to-table', "profile_view");
Route::get('/company/view', 'CompanyController@index');




//});

//-----Login-----
Route::post('/verify/email', 'Auth\LoginController@validateUserEmail')->name('verify_email');
Route::post('/verify/password', 'Auth\LoginController@validateUserPassword')->name('verify_password');
Route::post('/verify/user', 'Auth\LoginController@userLogin')->name('user_login');

Route::view('/log1',"auth/login1")->name('login_page');
// Route::post('/user/login', 'Auth\LoginController@userLoginTest');
Route::post('/user/login', 'Auth\LoginController@authenticate');
Route::get('/user/logout', 'Auth\LoginController@logout');


//-----Login-----






