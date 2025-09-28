<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthenticationController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\UserManagement\UserManagementController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\WebsiteManager\WebsiteController;

Route::get('/',[AuthenticationController::class,'index']);
Route::get('login',[AuthenticationController::class,'index'])->name('login');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

/* Authentication */ 

Route::post('authentication-process',[AuthenticationController::class,'authenticationProcess'])->name('authentication-process');
Route::post('logout-authentication-process',[DashboardController::class,'logoutAuthenticationProcess'])->name('logout-authentication-process');


/* User Management */ 

Route::get('user-management-add-category',[UserManagementController::class,'userCategoryView'])->name('user-management-add-category');
Route::post('user-management-add-category-process',[UserManagementController::class,'userCategoryProcess'])->name('user-management-add-category-process');
Route::get('user-management-add-category-edit/{id}',[UserManagementController::class,'editUserCategoryView'])->name('user-management-add-category-edit');
Route::post('user-management-add-category-edit-process/{id}',[UserManagementController::class,'editUserCategoryProcess'])->name('user-management-add-category-edit-process');

Route::get('user-management-privilege',[UserManagementController::class,'assignUserPrivilegesView'])->name('user-management-privilege');
Route::post('get-category-privileges',[UserManagementController::class,'getUserPrivileges'])->name('get-category-privileges');
Route::post('save-user-privileges',[UserManagementController::class,'saveUserPrivileges'])->name('save-user-privileges');

Route::get('user-management-create-account',[UserManagementController::class,'createAccountUser'])->name('user-management-create-account');
Route::post('get-user-email-process',[UserManagementController::class,'getAccountEmail']);
Route::post('create-account-process',[UserManagementController::class,'createAccount'])->name('create-account-process');

Route::get('user-management-list-create-account',[UserManagementController::class,'listAccountsView'])->name('user-management-list-create-account');
Route::any('user-management-get-accounts',[UserManagementController::class,'getUserAccountList'])->name('user-management-get-accounts');

Route::get('user-management-edit-user-account/{id}',[UserManagementController::class,'editUserAccountView'])->name('user-management-edit-user-account');
Route::post('user-management-edit-user-account-process/{id}',[UserManagementController::class,'editUserAccountProcess'])->name('user-management-edit-user-account-process');

/* End User Management */ 

/*Staff Management */
Route::get('create-staff',[StaffController::class,'addStaff'])->name('create-staff');
Route::post('create-staff-process',[StaffController::class,'saveStaff'])->name('create-staff-process');
Route::get('edit-staff/{staff_id}',[StaffController::class,'editStaffView'])->name('edit-staff');
Route::post('edit-staff-process/{staff_id}',[StaffController::class,'ediStaff'])->name('edit-staff-process');
/*Staff Management*/

 
/*End Setup*/

/* Website Manager */
Route::get('Board-Members',[WebsiteController::class,'addBoarMembersView'])->name('Board-Members');
Route::post('add-board-title-process',[WebsiteController::class,'addBoardTitle'])->name('add-board-title-process');
Route::get('edit-board-category/{id}',[WebsiteController::class,'editBoarMembersView'])->name('edit-board-category');
Route::post('edit-board-title-process/{id}',[WebsiteController::class,'editBoardTitle'])->name('edit-board-title-process');

/*End Website Manager */