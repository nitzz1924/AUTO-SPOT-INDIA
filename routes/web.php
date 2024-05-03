<?php
#--------------------------------------------------🙏🔱ॐ नमः शिवाय🔱🙏-------------------------------------
use App\Http\Controllers\EditController;
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
Route::post('/signup_submit', [StoreController::class, 'signup_submit']);
Route::post('/verifteamyotp', [StoreController::class, 'verifteamyotp'])->name('verifteamyotp');
Route::get('/viewteamregister', [ViewController::class, 'viewteamregister'])->name('viewteamregister');
Route::post('/registerteam', [StoreController::class, 'registerteam'])->name('registerteam');
Route::get('/thankyouview', [ViewController::class, 'thankyouview'])->name('thankyouview');


//Team Panel Routes
Route::get('/teamdashboard', [ViewController::class, 'teamdashboard'])->name('teamdashboard');
Route::get('/teamlogin', [ViewController::class, 'teamlogin'])->name('teamlogin');
Route::post('/teamauthlogin', [StoreController::class, 'teamauthlogin'])->name('teamauthlogin');
Route::get('/logoutteamlogin', [StoreController::class, 'logoutteamlogin'])->name('logoutteamlogin');
Route::get('/teammemberaddview', [ViewController::class, 'teammemberaddview'])->name('teammemberaddview');
Route::post('/createteammember', [StoreController::class, 'createteammember'])->name('createteammember');
Route::get('/allteammembersview', [ViewController::class, 'allteammembersview'])->name('allteammembersview');
Route::get('/memberedit/{id}',[EditController::class,'memberedit'])->name('memberedit');
Route::post('/update_team_member',[EditController::class,'update_team_member'])->name('update_team_member');
Route::post('/deleteteamcard',[EditController::class,'deleteteamcard'])->name('deleteteamcard');
