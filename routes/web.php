<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BestValueController;
use App\Http\Controllers\BestValueTranslateController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\HeroImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
<<<<<<< HEAD
use App\Http\Controllers\MailController;
use App\Http\Controllers\MaintainController;
=======
>>>>>>> parent of 81a0a8f (ddd)
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\SystemLanguageController;
use App\Http\Controllers\OurServiceTranslateController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\TmpFileController;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Route::get('/generate', function (){
   Artisan::call('storage:link');
});*/
Route::get('/coming', function () {
    return view('coming');
})->name('coming');

/**Auth */
Route::prefix('/dakamak/administrator')->group(function () {
    Route::get('/', [AuthController::class, "login"]);
    Route::post('/', [AuthController::class, "loginPost"])->name('auth.login');
    Route::get('/logout', [AuthController::class, "logout"])->name('auth.logout');
});

Route::get('/', function () {
        return redirect(app()->getLocale());
})->middleware('status');
Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware(['setlocale', 'status'])
    ->group(function () {
        Route::get('/', [HomeController::class, "Index"]);
        Route::get('/about', [HomeController::class, "About"]);
        Route::get('/contact', [HomeController::class, "Contact"]);
    });


    /** Admin Routes */
Route::prefix('/admin')->middleware('admin')->group(function () {
    Route::get('/', function () {
        return view('back.home');
    })->name('admin');
    Route::resource('system_languages', SystemLanguageController::class);
    Route::resource('ourservice', OurServiceController::class);
    Route::resource('ourservicetranslation', OurServiceTranslateController::class);
    Route::resource('bestvalue', BestValueController::class);
    /*** Our Service text translate  */
    Route::resource('bestvaluetranslation', BestValueTranslateController::class);
    /*** Our Service text translate  */
    // Tmp File 
    // Socail Media
    Route::resource('socialmedia', SocialMediaController::class)->except('show');
    // Socail Media
    //Maintain the web site
    Route::get('maintain', [MaintainController::class, "index"])->name('maintain.create');
    Route::post('maintain', [MaintainController::class, "store"])->name('maintain.store');

    Route::post('tmpfile/tmp-upload', [TmpFileController::class, 'uploadTmpFile']);
    Route::delete('tmpfile/tmp-delete', [TmpFileController::class, 'deleteTmpFile']);
    Route::resource('generalsettings', GeneralSettingController::class)->only(['create', 'store']);
    Route::resource('logo', LogoController::class)->only(['create', 'store']);
    Route::resource('heroimage', HeroImageController::class)->only(['create', 'store']);
    Route::prefix('staticcontents')->group(function () {
        // Resource
        // Resource
        Route::get('/about_image', [StaticContentController::class, 'AboutImage'])->name('staticcontent.about_image.index');
        Route::post('/about_image', [StaticContentController::class, 'AboutImagePost'])->name('staticcontent.about_image.store');
        Route::post('/about_image', [StaticContentController::class, 'AboutImagePost'])->name('staticcontent.about_image.store');

        /*** About us text translate  */
        Route::get('/about_us', [StaticContentController::class, 'AboutContent'])->name('staticcontent.about_content.index');
        Route::post('/about_us', [StaticContentController::class, 'AboutContentPost'])->name('staticcontent.about_content.store');
        /*** About us text translate  */
        /*** TaglineImage  */
        Route::get('/taglineimage', [StaticContentController::class, 'TaglineImage'])->name('staticcontent.taglineimage.index');
        Route::post('/taglineimage', [StaticContentController::class, 'TaglineImagePost'])->name('staticcontent.taglineimage.store');
        /***TaglineImage  */
        /** Bootom tagline text */
        Route::get('/tagline', [StaticContentController::class, 'Tagline'])->name('staticcontent.tagline.index');
        Route::post('/tagline', [StaticContentController::class, 'TaglinePost'])->name('staticcontent.tagline.store');
        /** Bootom tagline text */
    });
});
