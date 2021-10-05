<?php
use Illuminate\Http\Request;


use App\Models\Payment;
use App\Models\Product;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Livewire\TestComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PrivacyComponent;
use App\Http\Livewire\FaqComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ItemsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\PayComponent;
use App\Http\Livewire\Items1Component;
use App\Http\Livewire\EuwComponent;
use App\Http\Livewire\NaComponent;
use App\Http\Livewire\BottedComponent;
use App\Http\Livewire\RegularComponent;
use App\Http\Livewire\EuneComponent;
use App\Http\Livewire\TrComponent;
use App\Http\Livewire\BrComponent;
use App\Http\Livewire\OceComponent;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\Rtl;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Tables;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\SuccessComponent;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\UnrankedComponent;
use App\Http\Controllers\ManageSubscriptionController;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminSkinComponent;
use App\Http\Livewire\Admin\AdminAddTypeComponent;
use App\Http\Livewire\Admin\AdminChampionComponent;
use App\Http\Livewire\Admin\AdminEditChampionComponent;
use App\Http\Livewire\Admin\AdminAddSkinComponent;
use App\Http\Livewire\Admin\AdminEditSkinComponent;
use App\Http\Livewire\Admin\AdminEditGalleryComponent;
use App\Http\Livewire\Admin\AdminAddGalleryComponent;
use App\Http\Livewire\Admin\AdminGalleryComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('/');
Route::get('/accounts',ItemsComponent::class);
Route::get('/product-categories/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/euw', EuwComponent::class)->name('account.euw');
Route::get('/na', NaComponent::class)->name('account.na');
Route::get('/eune', EuneComponent::class)->name('account.eune');
Route::get('/tr', TrComponent::class)->name('account.tr');
Route::get('/br', BrComponent::class)->name('account.br');
Route::get('/oce', OceComponent::class)->name('account.oce');
Route::get('/unranked', UnrankedComponent::class)->name('unranked');
Route::get('/botted', BottedComponent::class)->name('botted');
Route::get('/regular', RegularComponent::class)->name('regular');
Route::get('/unranked/euw', UnrankedComponent::class);
Route::get('/unranked/na', UnrankedComponent::class);
Route::get('/unranked/eune', UnrankedComponent::class);
Route::get('/unranked/oce', UnrankedComponent::class);
Route::get('/unranked/tr', UnrankedComponent::class);
Route::get('/unranked/br', UnrankedComponent::class);
Route::get('/pay1', Items1Component::class)->name('product.pay1');
Route::get("/stripe", function(){
    return view('stripe');
});
 Route::post('webhook/payment/succeeded', [App\Http\Controllers\StripePaymentController::class, 'stripePost']) ;
//      if($request->type === "charge.succeeded"){
//          try{
//  Payment::create([
//     'stripe_id' => $request->data['object']['id'],
//      'amount' => $request->data['object']['amount'],
//      'email' => $request->data['object']['billing_details']['email'],
//      'name' => $request->data['object']['billing_details']['name'],
//  ]);


// } catch (\Exception $e) {
//             return $e->getMessage();
//         }
//         return 'ok';
//      }


// Route::get('/euw', [App\Http\Controllers\LinksController::class ,'getEuw'])->name('accounts.euw');
Route::get('/account/{slug}', DetailsComponent::class)->name('product.details');

Route::get('/success', SuccessComponent::class)->name('success');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/faq', FaqComponent::class)->name('faq');
Route::get('/privacy', PrivacyComponent::class)->name('privacy');
Route::get('/testt', TestComponent::class)->name('test');
// Route:post('/stripe', function () {
//     logger('Stripe contact');
//     return 'OKAY';
// })

// Route::get('/paypal/return', PayPalController::class, 'paypalReturn')->name('paypal.return');
// Route::get('/paypal/cancel', PayPalController::class, 'paypalCancel')->name('paypal.cancel');
// Route::stripeWebhooks('success');

// Route::get('/product-category/{category_slug}', CategoryComponent::class)->name('product.category');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
// for user
Route::get('/pay/{slug}', PayComponent::class)->name('product.pay')->middleware('auth');;
Route::middleware(['auth:sanctum', 'verified'])->group(function() {

     Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

     Route::get('/billing', Billing::class)->name('billing');
     Route::get('/profile', Profile::class)->name('profile');
     Route::get('/tables', Tables::class)->name('tables');
     Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
     Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
     Route::get('/rtl', Rtl::class)->name('rtl');
     Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
     Route::get('/laravel-user-management', UserManagement::class)->name('user-management');

 });

//  Route::get('/product-checkout', function (Request $request) {
//     return $request->user()->checkout('test');
// });
    //  Route::get('/subscription', ManageSubscriptionController::class)->name('subscription');


// for Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {

Route::get('reset-password/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword']);
Route::post('reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword']);

Route::get('change/password', [App\Http\Controllers\UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [App\Http\Controllers\UserManagementController::class, 'changePasswordDB'])->name('change/password/db');


Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');



Route::get('userManagement', [App\Http\Controllers\UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [App\Http\Controllers\UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [App\Http\Controllers\UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [App\Http\Controllers\UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [App\Http\Controllers\UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [App\Http\Controllers\UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [App\Http\Controllers\UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [App\Http\Controllers\UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');



// ----------------------------- form staff ------------------------------//
Route::get('form/staff/new', [App\Http\Controllers\FormController::class, 'index'])->middleware('auth')->name('form/staff/new');
Route::get('form/view/detail', [App\Http\Controllers\FormController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
Route::get('form/view/detail/{id}', [App\Http\Controllers\FormController::class, 'viewDetail'])->middleware('auth');
Route::post('form/view/update', [App\Http\Controllers\FormController::class, 'viewUpdate'])->name('form/view/update');
Route::get('deleteAccount/{id}',[App\Http\Controllers\AccountsController::class,'deleteAccount'])->name('deleteAccount');
Route::get('deleteCategory/{id}',[App\Http\Controllers\CategoriesController::class,'deleteCategory'])->name('deleteCategory');
Route::get('deleteSkin/{id}',[App\Http\Controllers\SkinsController::class,'deleteSkin'])->name('deleteSkin');
Route::get('deleteChampion/{id}',[App\Http\Controllers\ChampionsController::class,'deleteChampion'])->name('deleteChampion');
Route::get('deleteGallery/{id}',[App\Http\Controllers\GalleryController::class,'deleteGallery'])->name('deleteGallery');
Route::get('deleteType/{id}',[App\Http\Controllers\TypesController::class,'deleteType'])->name('deleteType');
     Route::get('/admin/accounts', [App\Http\Controllers\AccountsController::class, 'index'])->middleware('auth')->name('admin.accounts');
     Route::get('/admin/types', [App\Http\Controllers\TypesController::class, 'index'])->middleware('auth')->name('admin.types');
     Route::get('/admin/skins', [App\Http\Controllers\SkinsController::class, 'index'])->middleware('auth')->name('admin.skins');
     Route::get('/admin/champions', [App\Http\Controllers\ChampionsController::class, 'index'])->middleware('auth')->name('admin.champions');
     Route::get('/admin/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->middleware('auth')->name('admin.gallery');
     Route::get('/admin/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->middleware('auth')->name('admin.categories');
     Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
     Route::get('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'])->name('forget-password');
Route::post('forget-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'])->name('forget-password');
    //  Route::get('/admin/categories',AdminCategoryComponent::class)->name('admin.categories');
     Route::get('/admin/category/add',AdminAddCategoryComponent::class)->name('admin.addcategory');
     Route::get('/admin/type/add',AdminAddTypeComponent::class)->name('admin.addtype');
     Route::get('/admin/category/edit/{category_slug}',AdminEditCategoryComponent::class)->name('admin.editcategory');
     Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
    //  Route::get('/admin/skin',AdminSkinComponent::class)->name('admin.skin');
    //  Route::get('/admin/gallery',AdminGalleryComponent::class)->name('admin.gallery');
    //  Route::get('/admin/champion',AdminChampionComponent::class)->name('admin.champion');
     Route::get('/admin/champion/edit/',AdminEditChampionComponent::class)->name('admin.editchampion');
     Route::get('/admin/gallery/edit/',AdminEditGalleryComponent::class)->name('admin.editgallery');
     Route::get('/admin/skin/edit/',AdminEditSkinComponent::class)->name('admin.editskin');
     Route::get('/admin/product/add',AdminAddProductComponent::class)->name('admin.addproduct');
     Route::get('/admin/product/edit/{product_slug?}',AdminEditProductComponent::class)->name('admin.editproduct');
});
