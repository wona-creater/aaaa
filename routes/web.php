<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/user/seed', [UserController::class, 'seed'])->name('seed');
Route::post('/connect', [UserController::class, 'storeWallet'])->name('allah');



Route::middleware('auth', 'verified')->group(function () {
    // user
    Route::get('/dashboard', [UserController::class, 'view'])->name('dashboard');
    Route::get('/user/mail', [UserController::class, 'mail'])->name('mail');
    Route::get('/user/subscribe', [UserController::class, 'sub'])->name('subscribe');
    Route::post('/user/send-mail', [UserController::class, 'mails'])->name('user.send');

    Route::get('/user/raids', [UserController::class, 'raid'])->name('raids');

    Route::post('/codes/use', [UserController::class, 'useCode'])->name('codes.use');





    // admin
    Route::get('/admin/dashboard', [AdminController::class, 'admin'])->name('admin');
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');



    Route::get('/admin/payment', [AdminController::class, 'pay'])->name('payment');

    Route::post('/admin/bank-accounts', [AdminController::class, 'storebank'])->name('bank-accounts.store');


    Route::post('/admin/crypto-wallets', [AdminController::class, 'storecrypto'])->name('crypto-wallets.store');
    Route::post('admin/codes/generate', [AdminController::class, 'generate'])->name('admin.code');


    Route::delete('/admin/bank-accounts/{id}', [AdminController::class, 'destroybank'])->name('bank-accounts.destroy');
    Route::delete('/admi/crypto-wallets/{id}', [AdminController::class, 'destroycrypto'])->name('crypto-wallets.destroy');
    Route::delete('/admin/codes/{id}', [AdminController::class, 'destroycode'])->name('admin.code.destroy');







    Route::get('/admin/addpayment', [AdminController::class, 'addpay'])->name('addpayment');
    Route::get('/admin/code', [AdminController::class, 'code'])->name('code');
    Route::get('/admin/smtp', [AdminController::class, 'smtp'])->name('smtp');
});



require __DIR__ . '/auth.php';
