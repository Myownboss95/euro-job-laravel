<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DepositController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\TransactionController;

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

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');

    Route::get('deposit', [DepositController::class, 'index'])->name('deposit.index');
    Route::post('deposit', [DepositController::class, 'deposit'])->name('deposit.deposit');
    Route::get('withdraw', [DepositController::class, 'withdraw_view'])->name('deposit.withdraw.index');
    Route::post('withdraw', [DepositController::class, 'withdraw'])->name('deposit.withdraw');
    Route::get('deposit/delete/{id}', [DepositController::class, 'delete'])->name('deposit.delete');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/update/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('login-as/{id}', [UserController::class, 'loginAs'])->name('users.login');
    Route::get('users/delete/{id}',[UserController::class,'delete'])->name('users.delete');
    Route::get('users/limit/{id}',[UserController::class,'limitPage'])->name('users.limit.page');
    Route::post('user/limit/{id}',[UserController::class, 'updateLimit'])->name('users.limit.update');
    Route::get('user/password/{id}',[UserController::class, 'updatePassword'])->name('users.password.update');
    Route::get('user/status/{id}',[UserController::class, 'changeStatus'])->name('users.change.status');


    Route::get('email', [MailController::class, 'index'])->name('email.index');
    Route::post('email', [MailController::class, 'send'])->name('email.send');

    Route::prefix('transactions')->name('transactions.')->group(function(){
        Route::get('',[TransactionController::class,'index'])->name('index');
        Route::post('change-date',[TransactionController::class,'changeDate'])->name('change.date');
    });

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
        Route::post('contact', [ContactController::class, 'update'])->name('contact.update');

        Route::as('security.')->prefix('security')->group(function () {
            Route::get('', [SecurityController::class, 'securityPage'])->name('index');
            Route::post('update', [SecurityController::class, 'securityUpdate'])->name('update');
        });
    });
});
