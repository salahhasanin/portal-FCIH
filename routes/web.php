<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('doctor','adminController@add_doctor');
Route::post('instructor', 'adminController@add_instructor');
Route::post('student', 'adminController@add_student');
Route::post('stuff', 'adminController@add_stuff');

Route::get('test2', 'adminController@search');
Route::get('test', 'adminController@hoome');
Route::get('test3', 'adminController@showPayment');


route::get('/index','indexController@index');


route::get('admin',function(){

    return view('admin');
});
route::get('studentAffairs',function(){

    return view('studentaffairs');
});
route::get('student',function(){

    return view('student');
});




Route::post('operate','studentAffairsController@operate');
Route::post('removeTable2','studentAffairsController@removeTable2');
Route::get('showTable','studentAffairsController@showTable');
Route::get('show','studentAffairsController@show');


//route::get('doctorInfo','adminController@showInfodoctor');
route::get('editDoctor','adminController@doctorid');
Route::match(['get','post'],'/edit/{id}','adminController@editdoctor');


//route::get('instructorInfo','adminController@showInfoinst');
route::match(['get','post'],'/editinstructor/{id}','adminController@editinst');
route::get('editins','adminController@instid');

//route::get('studentInfo','adminController@showInfostu');
route::match(['get','post'],'/editstudent/{id}','adminController@editstu');
route::get('editstuden','adminController@stuid');


//route::get('stuffInfo','adminController@showInfostuff');
route::match(['get','post'],'/editstuff/{id}','adminController@editstuff');
route::get('editStuff','adminController@stuffid');

//route::post('newinfo/{doc_id}','adminController@editInfo');
//route::get ('newinfo/{doc_id}','adminController@editInfo');


Route::get('newsview','studentAffairsController@shownews');
Route::match(['get','post'],'/insertnews','studentAffairsController@insertnews');

Route::get('showUserInfo','adminController@showUserInfo');
//----------------------------------------pay---------------------------------//


Route::get('studentNoPay','studentAffairsController@paymentfunction');
Route::get('del/news/{id}','studentAffairsController@editpay');

Route::get('studentGrades','controlController@showStudents');

Route::get('control',function(){

	return view('control');
});

Route::get('elements',function(){

	return view('elements');
});

Route::get('coursesDetails','studentAffairsController@viewCourses');
Route::post('submitCourse','studentAffairsController@makeCourses');
Route::post('submitRegister','studentAffairsController@registerCourse');

Route::get('openCourse','studentAffairsController@openCourses');

Route::get('showStudentGrade','doctorController@show');
Route::post('insertIntoStudentGrade','doctorController@insertIntoStudentGrade');
Route::get('showGradeForStudent','doctorController@showGradeForStudent');

Route::get('viewDoctorThings','doctorController@doctorThings');
Route::get('AllStudents','doctorController@noOFstudets');
Route::post('submitfinal','controlController@addFinalResult');

Route::get('stu_register','studentController@stu_course');
Route::match(['get','post'],'submit_stu_course','studentController@submit_stu_course');

Route::get('showCourses','studentController@show_course_details');

//-----------------------------showCourses----------------------------------------//
Route::get('studentprofile','studentController@Show_Student_Profile');


//-----------------------------RATE DOCTOR----------------------------------------//
Route::get('showdoctor','studentController@Show_doctor_for_student');

Route::match(['get','post'],'/ratedoctor','studentController@show_doctor_to_rate');

Route::match(['get','post'],'/putRate','studentController@Rating_doctor');


Route::get('show','instructorCourse@show');
Route::get('showRegisterdStudentCourse','instructorCourse@showRegisterdStudentCourse');
Route::get('saveStudentPractical','instructorCourse@saveStudentPractical');

//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//
//-----------------------------------------------------------------------------------------------------------//

Route::get('bonafideCertificate','adminController@addcertificate');