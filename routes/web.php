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
Route::get('register','userController@register');
Route::post('register','userController@processRegister');
//Courses table Routes
Route::get('add','coursesController@addCourse');
Route::post('add','coursesController@ProcessAddCourse');
Route::get('courses','coursesController@courses');
Route::get('Api/courses','coursesApiController@courses');
Route::get('course/{id}','coursesController@getCourse');
Route::get('getCoursesByCategory/{id}','coursesController@getCoursesByCategory');
Route::get('getCoursesByInstructor/{id}','coursesController@getCoursesByInstructor');
Route::get('getCoursesByStatus/{status}','coursesController@getCoursesByStatus');
Route::get('getCoursesByStudentId/{id}','coursesController@getCoursesByStudentId');
Route::get('searchCourses/{key}','coursesController@searchCourses');
Route::get('updateCourse/{id}','coursesController@updateCourse');
Route::post('updateCourse','coursesController@processUpdateCourse');
Route::get('deleteCourse/{id}','coursesController@deleteCourse');
//UserGroup Table routes
Route::get('addUserGroup','userGroupController@addUserGroup');
Route::Post('addUserGroup','userGroupController@processAddUserGroup');
Route::get('getAllUsersGroups','userGroupController@getAllUsersGroups');
Route::get('getAllUsersGroupsApi','userGroupController@getAllUsersGroupsApi');
Route::get('updateUserGroup/{id}','userGroupController@updateUserGroup');
Route::post('updateUserGroup','userGroupController@processUpdateUserGroup');
Route::get('deleteUserGroup/{id}','userGroupController@deleteUserGroup');
Route::get('getUserGroup/{id}','userGroupController@getUserGroupById');

//users table routes
Route::get('addUser','userController@addUser');
Route::post('addUser','userController@processAddUser');
Route::get('updateUser/{id}','userController@updateUser');
Route::post('UpdateUser','userController@processUpdateUser');
Route::get('updatePass/{id}','userController@updateUserPassword');
Route::post('updatePass','userController@processUpdateUserPass');
Route::get('deleteUser/{id}','userController@deleteUser');
Route::get('getAllUsers','userController@getAllUsers');
Route::get('getUserById/{id}','userController@getUserById');
Route::get('getUserByStatus/{status}','userController@getUserByActiveStatus');
Route::get('getUserByGroup/{userGroupId}','userController@getUserByGroup');
Route::get('searchUser/{key}','userController@searchUser');

/*Route::get('courses', function () {
    return \App\Models\Courses::all();
});
Route::get('User', function () {
    return \App\Models\UserGroup::all();
});*/

