<?php

use App\Http\Controllers\ActivationController;
use App\Http\Controllers\User\SecurityController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\TransferController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('auth:user')->group(function () {

    Route::get('activation', [ActivationController::class, 'index'])->name('activation.index');
    Route::post('activate', [ActivationController::class, 'activate'])->name('activation.activate');

    Route::middleware('hasAccountNumberr')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('statement', [DashboardController::class, 'statement'])->name('statement');

        Route::prefix('transfer')->name('transfer.')->group(function () {

            Route::get('local', [TransferController::class, 'localPage'])->name('local');
            Route::get('local/details', [TransferController::class, 'localDetails'])->name('local.details');

            Route::get('inter-bank', [TransferController::class, 'interBankPage'])->name('inter.bank');

            Route::post('proccess', [TransferController::class, 'processTransfer'])->name('process');

            Route::get('confirm', [TransferController::class, 'tokenPage'])->name('confirm.page');
            Route::post('confirm', [TransferController::class, 'confirm'])->name('confirm');
        });

        Route::prefix('security')->name('security.')->group(function () {
            Route::get('password', [SecurityController::class, 'passwordPage'])->name('password.page');
            Route::post('password', [SecurityController::class, 'changePassword'])->name('password.change');

            Route::get('pin', [SecurityController::class, 'pinPage'])->name('pin.page');
            Route::post('pin', [SecurityController::class, 'changePin'])->name('pin.change');

            Route::get('two-factor', [SecurityController::class, 'twoFactorPage'])->name('two-factor.page');
            Route::post('two-factor', [SecurityController::class, 'updateTwoFactor'])->name('two-factor.change');
        });
    });
});
