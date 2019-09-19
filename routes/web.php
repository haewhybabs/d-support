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

Route::get('/', 'PagesController@index')->name('login');


Route::get('dashRole','PagesController@redirectDashboard');
Route::get('dashboard','Dashboard@index')->name('dashboard');
Route::get('login','PagesController@login')->name('login');
Route::post('login','User@login')->name('login_auth');
Route::get('logout','User@logout')->name('logout');
Route::get('add_patient','Patient@addPatient')->name('add_patient');
Route::post('add_patient','Patient@addPatientAction')->name('add_patient_action');
Route::get('add_therapist','Therapist@addTherapist')->name('add_therapist');
Route::post('add_therapist','Therapist@addTherapistAction')->name('add_therapist_action');
Route::get('diagnosis_support','Diagnosis_support@index')->name('diagnosis_support');
Route::get('diagnosis_test/{id}/{user_id}','Diagnosis_support@diagnosis_test');
Route::get('head_test_action/{id}/{diagnosis_id}','Diagnosis_support@head_test_action');
Route::get('sub_test_flow/{id}','Diagnosis_support@sub_test_flow');
Route::post('sub_test_flow_action','Diagnosis_support@sub_test_flow_action')->name('sub_test_flow_action');
Route::post('sub_test_flow_final','Diagnosis_support@sub_test_flow_final')->name('sub_test_flow_final');
Route::get('success_diagnosis/{id}','Diagnosis_support@success_diagnosis');
Route::get('dsettings','Diagnosis_support@dsettings')->name('dsettings');
Route::post('test_details','Diagnosis_support@test_details');
Route::post('test_update_action','Diagnosis_support@test_update_action');
Route::get('possible_diagnosis','Preliminary_diagnosis@possible_diagnosis')->name('possible_diagnosis');
Route::get('diagnosis_requirement','Preliminary_diagnosis@diagnosis_requirement')->name('diagnosis_requirement');
Route::get('add_diagnosis_requirement','Preliminary_diagnosis@add_diagnosis_requirement')->name('add_diagnosis_requirement');
Route::get('diagnosis_question','Preliminary_diagnosis@diagnosis_question')->name('diagnosis_question');
Route::get('add_possible_diagnosis','Preliminary_diagnosis@add_possible_diagnosis')->name('add_possible_diagnosis');
Route::post('add_possible_diagnosis_action','Preliminary_diagnosis@add_possible_diagnosis_action')->name('add_possible_diagnosis_action');
Route::get('add_diagnosis_question','Preliminary_diagnosis@add_diagnosis_question')->name('add_diagnosis_question');
Route::post('add_diagnosis_question_action','Preliminary_diagnosis@add_diagnosis_question_action')->name('add_diagnosis_question_action');
Route::post('add_diagnosis_requirement_action','Preliminary_diagnosis@add_diagnosis_requirement_action')->name('add_diagnosis_requirement_action');
Route::get('getQuestionOption','Preliminary_diagnosis@getQuestionOption')->name('getQuestionOption');
Route::get('requirement_exception','Preliminary_diagnosis@requirement_exception')->name('requirement_exception');
Route::get('add_requirement_exception','Preliminary_diagnosis@add_requirement_exception')->name('add_requirement_exception');
Route::post('add_requirement_exception_action','Preliminary_diagnosis@add_requirement_exception_action')->name('add_requirement_exception_action');
Route::get('patient_test','Diagnosis_question@patient_test')->name('patient_test');
Route::get('lbp_diagnosis','Diagnosis_question@lbp_diagnosis')->name('lbp_diagnosis');
Route::post('lbp_diagnosis_action','Diagnosis_question@lbp_diagnosis_action')->name('lbp_diagnosis_action');

