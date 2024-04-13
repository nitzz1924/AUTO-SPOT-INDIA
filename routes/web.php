<?php
#--------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏-------------------------------------
use App\Http\Controllers\MasterController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;


Route::get('/', function () {
    return view('auth.UserAuth.teamsignup');
});

Route::post('/logoutuser', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logoutuser');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('AdminPanel.dashboard');
    })->name('dashboard');
});

//Admin Panel Routes
Route::get('/viewmaster', [ViewController::class, 'viewmaster'])->name('viewmaster');
Route::post('/addmaster',[MasterController::class,'addmaster'])->name('addmaster');
Route::get('/deletemastercat/{id}/{type}', [MasterController::class, 'deletemaster'])->name('deletemaster');
Route::get('/viewsubmaster', [ViewController::class, 'viewsubmaster'])->name('viewsubmaster');
Route::post('/createsubmaster', [MasterController::class, 'createsubmaster'])->name('createsubmaster');
Route::get('/getmastercatajax/{selectedCat}', [MasterController::class, 'getmastercatajax'])->name('getmastercatajax');
// Route::get('/viewteamsignup', [ViewController::class, 'viewteamsignup'])->name('viewteamsignup');
Route::post('/signup_submit', [StoreController::class, 'signup_submit']);
Route::post('/verifteamyotp', [StoreController::class, 'verifteamyotp'])->name('verifteamyotp');
Route::get('/viewteamregister', [ViewController::class, 'viewteamregister'])->name('viewteamregister');
Route::post('/registerteam', [StoreController::class, 'registerteam'])->name('registerteam');
Route::get('/thankyouview', [ViewController::class, 'thankyouview'])->name('thankyouview');

