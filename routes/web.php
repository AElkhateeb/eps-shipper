<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/

Route::group(['middleware' => 'setLocale:en','namespace'=>'App\Http\Controllers\Site'],function () {
    Route::get('/', 'SiteController@index');
});

Route::group(['prefix' => 'ar','middleware' => 'setLocale:ar','namespace'=>'App\Http\Controllers\Site'],function () {
    Route::get('/', 'SiteController@index');
    Route::get('home','SiteController@index');
    Route::get('about','SiteController@about');
    Route::get('services','SiteController@services');
    Route::get('service/{id}','SiteController@service');
    Route::get('career','SiteController@career');
   Route::get('pricing','SiteController@pricing');
    Route::get('contact','SiteController@contact');
});

Route::group(['prefix' => 'en','middleware' => 'setLocale:en','namespace'=>'App\Http\Controllers\Site'],function () {
    Route::get('/', 'SiteController@index');
    Route::get('home','SiteController@index');
    Route::get('about','SiteController@about');
    Route::get('services','SiteController@services');
    Route::get('service/{id}','SiteController@service');
    Route::get('career','SiteController@career');
    Route::get('pricing','SiteController@pricing');
    Route::get('contact','SiteController@contact');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('sliders')->name('sliders/')->group(static function() {
            Route::get('/',                                             'SlidersController@index')->name('index');
            Route::get('/create',                                       'SlidersController@create')->name('create');
            Route::post('/',                                            'SlidersController@store')->name('store');
            Route::get('/{slider}/edit',                                'SlidersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SlidersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{slider}',                                    'SlidersController@update')->name('update');
            Route::delete('/{slider}',                                  'SlidersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('identities')->name('identities/')->group(static function() {
            Route::get('/',                                             'IdentitiesController@index')->name('index');
            Route::get('/create',                                       'IdentitiesController@create')->name('create');
            Route::post('/',                                            'IdentitiesController@store')->name('store');
            Route::get('/{identity}/edit',                              'IdentitiesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'IdentitiesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{identity}',                                  'IdentitiesController@update')->name('update');
            Route::delete('/{identity}',                                'IdentitiesController@destroy')->name('destroy');
        });
    });
});



/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pros')->name('pros/')->group(static function() {
            Route::get('/',                                             'ProsController@index')->name('index');
            Route::get('/create',                                       'ProsController@create')->name('create');
            Route::post('/',                                            'ProsController@store')->name('store');
            Route::get('/{pro}/edit',                                   'ProsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{pro}',                                       'ProsController@update')->name('update');
            Route::delete('/{pro}',                                     'ProsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('services')->name('services/')->group(static function() {
            Route::get('/',                                             'ServicesController@index')->name('index');
            Route::get('/create',                                       'ServicesController@create')->name('create');
            Route::post('/',                                            'ServicesController@store')->name('store');
            Route::get('/{service}/edit',                               'ServicesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ServicesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{service}',                                   'ServicesController@update')->name('update');
            Route::delete('/{service}',                                 'ServicesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('jobs')->name('jobs/')->group(static function() {
            Route::get('/',                                             'JobsController@index')->name('index');
            Route::get('/create',                                       'JobsController@create')->name('create');
            Route::post('/',                                            'JobsController@store')->name('store');
            Route::get('/{job}/edit',                                   'JobsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'JobsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{job}',                                       'JobsController@update')->name('update');
            Route::delete('/{job}',                                     'JobsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('applications')->name('applications/')->group(static function() {
            Route::get('/',                                             'ApplicationsController@index')->name('index');
            Route::get('/create',                                       'ApplicationsController@create')->name('create');
            Route::post('/',                                            'ApplicationsController@store')->name('store');
            Route::get('/{application}/edit',                           'ApplicationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ApplicationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{application}',                               'ApplicationsController@update')->name('update');
            Route::delete('/{application}',                             'ApplicationsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('testimonials')->name('testimonials/')->group(static function() {
            Route::get('/',                                             'TestimonialsController@index')->name('index');
            Route::get('/create',                                       'TestimonialsController@create')->name('create');
            Route::post('/',                                            'TestimonialsController@store')->name('store');
            Route::get('/{testimonial}/edit',                           'TestimonialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'TestimonialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{testimonial}',                               'TestimonialsController@update')->name('update');
            Route::delete('/{testimonial}',                             'TestimonialsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('socials')->name('socials/')->group(static function() {
            Route::get('/',                                             'SocialsController@index')->name('index');
            Route::get('/create',                                       'SocialsController@create')->name('create');
            Route::post('/',                                            'SocialsController@store')->name('store');
            Route::get('/{social}/edit',                                'SocialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SocialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{social}',                                    'SocialsController@update')->name('update');
            Route::delete('/{social}',                                  'SocialsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('packages')->name('packages/')->group(static function() {
            Route::get('/',                                             'PackagesController@index')->name('index');
            Route::get('/create',                                       'PackagesController@create')->name('create');
            Route::post('/',                                            'PackagesController@store')->name('store');
            Route::get('/{package}/edit',                               'PackagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PackagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{package}',                                   'PackagesController@update')->name('update');
            Route::delete('/{package}',                                 'PackagesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pages')->name('pages/')->group(static function() {
            Route::get('/',                                             'PagesController@index')->name('index');
            Route::get('/create',                                       'PagesController@create')->name('create');
            Route::post('/',                                            'PagesController@store')->name('store');
            Route::get('/{page}/edit',                                  'PagesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PagesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{page}',                                      'PagesController@update')->name('update');
            Route::delete('/{page}',                                    'PagesController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('shipments')->name('shipments/')->group(static function() {
            Route::get('/',                                             'ShipmentsController@index')->name('index');
            Route::get('/create',                                       'ShipmentsController@create')->name('create');
            Route::post('/',                                            'ShipmentsController@store')->name('store');
            Route::get('/{shipment}/edit',                              'ShipmentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ShipmentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{shipment}',                                  'ShipmentsController@update')->name('update');
            Route::delete('/{shipment}',                                'ShipmentsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('places')->name('places/')->group(static function() {
            Route::get('/',                                             'PlacesController@index')->name('index');
            Route::get('/create',                                       'PlacesController@create')->name('create');
            Route::post('/',                                            'PlacesController@store')->name('store');
            Route::get('/{place}/edit',                                 'PlacesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PlacesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{place}',                                     'PlacesController@update')->name('update');
            Route::delete('/{place}',                                   'PlacesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('ways')->name('ways/')->group(static function() {
            Route::get('/',                                             'WaysController@index')->name('index');
            Route::get('/create',                                       'WaysController@create')->name('create');
            Route::post('/',                                            'WaysController@store')->name('store');
            Route::get('/{way}/edit',                                   'WaysController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'WaysController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{way}',                                       'WaysController@update')->name('update');
            Route::delete('/{way}',                                     'WaysController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('pay-ways')->name('pay-ways/')->group(static function() {
            Route::get('/',                                             'PayWaysController@index')->name('index');
            Route::get('/create',                                       'PayWaysController@create')->name('create');
            Route::post('/',                                            'PayWaysController@store')->name('store');
            Route::get('/{payWay}/edit',                                'PayWaysController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PayWaysController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{payWay}',                                    'PayWaysController@update')->name('update');
            Route::delete('/{payWay}',                                  'PayWaysController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('withdrawals')->name('withdrawals/')->group(static function() {
            Route::get('/',                                             'WithdrawalsController@index')->name('index');
            Route::get('/create',                                       'WithdrawalsController@create')->name('create');
            Route::post('/',                                            'WithdrawalsController@store')->name('store');
            Route::get('/{withdrawal}/edit',                            'WithdrawalsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'WithdrawalsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{withdrawal}',                                'WithdrawalsController@update')->name('update');
            Route::delete('/{withdrawal}',                              'WithdrawalsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('wallets')->name('wallets/')->group(static function() {
            Route::get('/',                                             'WalletsController@index')->name('index');
            Route::get('/create',                                       'WalletsController@create')->name('create');
            Route::post('/',                                            'WalletsController@store')->name('store');
            Route::get('/{wallet}/edit',                                'WalletsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'WalletsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{wallet}',                                    'WalletsController@update')->name('update');
            Route::delete('/{wallet}',                                  'WalletsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('withdrawals')->name('withdrawals/')->group(static function() {
            Route::get('/',                                             'WithdrawalsController@index')->name('index');
            Route::get('/create',                                       'WithdrawalsController@create')->name('create');
            Route::post('/',                                            'WithdrawalsController@store')->name('store');
            Route::get('/{withdrawal}/edit',                            'WithdrawalsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'WithdrawalsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{withdrawal}',                                'WithdrawalsController@update')->name('update');
            Route::delete('/{withdrawal}',                              'WithdrawalsController@destroy')->name('destroy');
            Route::get('/export',                                       'WithdrawalsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('shipments')->name('shipments/')->group(static function() {
            Route::get('/',                                             'ShipmentsController@index')->name('index');
            Route::get('/create',                                       'ShipmentsController@create')->name('create');
            Route::post('/',                                            'ShipmentsController@store')->name('store');
            Route::get('/{shipment}/edit',                              'ShipmentsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ShipmentsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{shipment}',                                  'ShipmentsController@update')->name('update');
            Route::delete('/{shipment}',                                'ShipmentsController@destroy')->name('destroy');
            Route::get('/export',                                       'ShipmentsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('ways')->name('ways/')->group(static function() {
            Route::get('/',                                             'WaysController@index')->name('index');
            Route::get('/create',                                       'WaysController@create')->name('create');
            Route::post('/',                                            'WaysController@store')->name('store');
            Route::get('/{way}/edit',                                   'WaysController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'WaysController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{way}',                                       'WaysController@update')->name('update');
            Route::delete('/{way}',                                     'WaysController@destroy')->name('destroy');
            Route::get('/export',                                       'WaysController@export')->name('export');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('contacts')->name('contacts/')->group(static function() {
            Route::get('/',                                             'ContactsController@index')->name('index');
            Route::get('/create',                                       'ContactsController@create')->name('create');
            Route::post('/',                                            'ContactsController@store')->name('store');
            Route::get('/{contact}/edit',                               'ContactsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contact}',                                   'ContactsController@update')->name('update');
            Route::delete('/{contact}',                                 'ContactsController@destroy')->name('destroy');
        });
    });
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('applications')->name('applications/')->group(static function() {
            Route::get('/',                                             'ApplicationsController@index')->name('index');
            Route::get('/create',                                       'ApplicationsController@create')->name('create');
            Route::post('/',                                            'ApplicationsController@store')->name('store');
            Route::get('/{application}/edit',                           'ApplicationsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ApplicationsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{application}',                               'ApplicationsController@update')->name('update');
            Route::delete('/{application}',                             'ApplicationsController@destroy')->name('destroy');
            Route::get('/export',                                       'ApplicationsController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('contacts')->name('contacts/')->group(static function() {
            Route::get('/',                                             'ContactsController@index')->name('index');
            Route::get('/create',                                       'ContactsController@create')->name('create');
            Route::post('/',                                            'ContactsController@store')->name('store');
            Route::get('/{contact}/edit',                               'ContactsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contact}',                                   'ContactsController@update')->name('update');
            Route::delete('/{contact}',                                 'ContactsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('branches')->name('branches/')->group(static function() {
            Route::get('/',                                             'BranchesController@index')->name('index');
            Route::get('/create',                                       'BranchesController@create')->name('create');
            Route::post('/',                                            'BranchesController@store')->name('store');
            Route::get('/{branch}/edit',                                'BranchesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BranchesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{branch}',                                    'BranchesController@update')->name('update');
            Route::delete('/{branch}',                                  'BranchesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('branches')->name('branches/')->group(static function() {
            Route::get('/',                                             'BranchesController@index')->name('index');
            Route::get('/create',                                       'BranchesController@create')->name('create');
            Route::post('/',                                            'BranchesController@store')->name('store');
            Route::get('/{branch}/edit',                                'BranchesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'BranchesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{branch}',                                    'BranchesController@update')->name('update');
            Route::delete('/{branch}',                                  'BranchesController@destroy')->name('destroy');
            Route::get('/export',                                       'BranchesController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('receiveres')->name('receiveres/')->group(static function() {
            Route::get('/',                                             'ReceiveresController@index')->name('index');
            Route::get('/create',                                       'ReceiveresController@create')->name('create');
            Route::post('/',                                            'ReceiveresController@store')->name('store');
            Route::get('/{receivere}/edit',                             'ReceiveresController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ReceiveresController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{receivere}',                                 'ReceiveresController@update')->name('update');
            Route::delete('/{receivere}',                               'ReceiveresController@destroy')->name('destroy');
            Route::get('/export',                                       'ReceiveresController@export')->name('export');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('clients')->name('clients/')->group(static function() {
            Route::get('/',                                             'ClientsController@index')->name('index');
            Route::get('/create',                                       'ClientsController@create')->name('create');
            Route::post('/',                                            'ClientsController@store')->name('store');
            Route::get('/{client}/edit',                                'ClientsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ClientsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{client}',                                    'ClientsController@update')->name('update');
            Route::delete('/{client}',                                  'ClientsController@destroy')->name('destroy');
            Route::get('/export',                                       'ClientsController@export')->name('export');
        });
    });
});
