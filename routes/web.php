<?php
use App\User;
use App\Category;
use App\Subcategory;
use App\Men_panjabi;
use App\Product_tag;
use App\Shop;
use App\Shoppingcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
Route::get('/add-to-cart/{table_name}/{id}', [
    'uses' => 'PageCotroller@getAddToCart',
    'as' => 'product.addToCart'
]);redirect-toShop
*/
Route::get('/redirect-toShop/{id}', 'ShopController@UserShopView');
Route::get('/product-addToCart/{table_name}/{id}', 'PageCotroller@getAddToCart');
Route::get('/product-show/{table_name}/{product_id}', 'PageCotroller@showdetails');
Route::get('search',['uses' => 'PageCotroller@search','as' => 'search']);
Route::get('/', [
    'uses' => 'PageCotroller@index',
    'as' => 'home'
]);

Route::get('/shop-search', [
    'uses' => 'ShopController@getShopSearch',
    'as' => 'search'
]);
Route::post('/shop-search', [
    'uses' => 'ShopController@postShopSearch',
    'as' => 'search'
]);
Route::get('/reduce/{id}', [
    'uses' => 'PageCotroller@getReduceByOne',
    'as' => 'product.reduce'
]);
Route::get('/remove/{id}', [
    'uses' => 'PageCotroller@getRemove',
    'as' => 'product.remove'
]);
Route::get('/increment/{id}', [
    'uses' => 'PageCotroller@getIncrementByOne',
    'as' => 'product.inc'
]);
/*------------------------------ mmy filter route--------------*/
Route::get('/filter', [
    'uses' => 'PageCotroller@getFilter',
    'as' => 'MyFilter'
]);
Route::post('/filter', [
    'uses' => 'PageCotroller@postFilter',
    'as' => 'MyFilter'
]);

/*-----------------------------my filter route ends----------------------------------------*/


//---------------------- Route that handles submission of review - rating/comment----------------------

Route::get('/review', [
    'uses' => 'PageCotroller@getReview',
    'as' => 'product-review',
    'middleware'=>'auth'
]);
Route::post('/review', [
    'uses' => 'PageCotroller@postReview',
    'as' => 'product-review',
    'middleware'=>'auth'
]);

/** --------------------- product review route ends ------------------------- **/

/*----------------------- user profile route-----------------------*/

Route::get('/ViewOrder', [
    'uses' => 'UserController@viewOrder',
    'as' => 'ViewOrder',
    'middleware'=>'auth'
]);
Route::get('/Add-Address', [
    'uses' => 'UserController@address',
    'as' => 'NewAdddress',
    'middleware'=>'auth'
]);
Route::get('/Cahnge-Password', [
    'uses' => 'UserController@chngpass',
    'as' => 'ChangePassword',
    'middleware'=>'auth'
]);
Route::get('/Complaints', [
    'uses' => 'UserController@complain',
    'as' => 'Complaints',
    'middleware'=>'auth'
]);
Route::get('/make-money-with-us', [
    'uses' => 'UserController@money',
    'as' => 'MoneyWithCartEZ',
    'middleware'=>'auth'
]);
Route::get('/my_product_complaints/{id}', [
    'uses' => 'UserController@ComplainProduct',
    'as' => 'product.complain'
]);
Route::get('/alert/{id1}', [
    'uses' => 'UserController@getAlert',
    'as' => 'alert',
    'middleware'=>'auth'
]);
Route::post('/alert/{id1}', [
    'uses' => 'UserController@postAlert',
    'as' => 'alert',
    'middleware'=>'auth'
]);
Route::get('/replies/{id}', [
    'uses' => 'UserController@replies',
    'as' => 'mailbox',
    'middleware'=>'auth'
]);
Route::get('/my-reply/{id}/{id1}', [
    'uses' => 'UserController@getUserReply',
    'as' => 'user_reply',
    'middleware'=>'auth'
]);
Route::post('/my-reply/{id}/{id1}', [
    'uses' => 'UserController@postUserReply',
    'as' => 'user_reply',
    'middleware'=>'auth'
]);
Route::get('/return_product', [
    'uses' => 'UserController@P_Return',
    'as' => 'product-return',
    'middleware'=>'auth'
]);
Route::get('/return', [
    'uses' => 'UserController@getReturn',
    'as' => 'return',
    'middleware'=>'auth'
]);
Route::post('/return', [
    'uses' => 'UserController@postReturn',
    'as' => 'return',
    'middleware'=>'auth'
]);

/*------------------user profile route ends------------------------*/

/*---------------add address----------------------*/


    Route::get('/add', [
        'uses' => 'UserController@getAddress',
        'as' => 'address',
        'middleware'=>'auth'
    ]);
    Route::post('/add', [
        'uses' => 'UserController@postAddress',
        'as' => 'address',
        'middleware'=>'auth'
    ]);


/*------------------ends--------------------------*/
/*-------------------shop owner routes-------------------------*/
Route::get('/shop-info', [
    'uses' => 'UserController@layout',
    'as' => 'Shop'
]);

Route::get('/shop', [
    'uses' => 'UserController@getShop',
    'as' => 'ViewShop',
    'middleware'=>'auth'
]);
Route::post('/shop', [
    'uses' => 'UserController@postShop',
    'as' => 'ViewShop',
    'middleware'=>'auth'
]);
Route::get('/my-shop', [
    'uses' => 'UserController@MyShop',
    'as' => 'myshop'
]);
Route::get('/myshop-add-product', [
    'uses' => 'ShopController@Add',
    'as' => 'Add-Product-Shop'
]);
Route::get('/mysales', [
    'uses' => 'ShopController@transaction',
    'as' => 'mysale'
]);
Route::get('/shop-bill', [
    'uses' => 'ShopController@shop_account',
    'as' => 'bill',
    'middleware'=>'auth'
]);

Route::get('/add-feature', [
    'uses' => 'ShopController@feature',
    'as' => 'feature',
    'middleware'=>'auth'
]);
Route::get('/feature', [
    'uses' => 'ShopController@getFeature',
    'as' => 'add_featured',
    'middleware'=>'auth'
]);
Route::post('/feature', [
    'uses' => 'ShopController@postFeature',
    'as' => 'add_featured',
    'middleware'=>'auth'
]);
Route::get('/cat-req', [
    'uses' => 'ShopController@RequestLayout',
    'as' => 'cat-req',
    'middleware'=>'auth'
]);
Route::get('/view-my-shop', [
    'uses' => 'ShopController@ViewMyShop',
    'as' => 'view-my-shop',
    'middleware'=>'auth'
]);
Route::get('/req-msg', [
    'uses' => 'ShopController@getMsg',
    'as' => 'msg',
    'middleware'=>'auth'
]);
Route::post('/req-msg', [
    'uses' => 'ShopController@postMsg',
    'as' => 'msg',
    'middleware'=>'auth'
]);

/*---------------shop routes ends here--------------------------*/
Route::get('/calendar', [
    'uses' => 'UserController@calendar',
    'as' => 'calendar'
]);

/*-----------------------ajax route--------------------*/
Route::get('/ajax-subcat', function () {
    $cat_id = Input::get('cat_id');
    $subcategories = Subcategory::where('category_id', '=' ,$cat_id)->get();
    return Response::json($subcategories);
});
Route::get('/get', function (Request $request) {
    $cat = $request->get('category');
    $subcat = $request->get('subcategory');

    $category= Category::findOrFail($cat);
    $subcategory=Subcategory::findOrFail($subcat);
    $category_name =str_replace(' ', '_', $category->cat_name);
    $subcategory_name =str_replace(' ', '_', $subcategory->title);
    $obj = strtolower($category_name)."-".strtolower($subcategory_name);
    if($obj === 'men-panjabis'){
        $items=Men_panjabi::all();
        return view('menpanjabis.index',compact('items'));
    }
    elseif ($obj === 'women-sharees'){
        $items=\App\Women_sharee::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'mobiles_and_tablets-smartphones'){
        $items=\App\Mobiles_and_tablets_smartphone::all();
       // return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'computing-desktops'){
        $items=\App\Computing_desktop::all();
        return view('computingdesktops.index',compact('items'));
    }
    elseif($obj === 'computing-macbooks'){
        $items=\App\Computing_macbook::all();
        return view('macbook.index',compact('items'));
    }
    elseif($obj === 'cameras_and_accessories-cameras'){
        $items=\App\Cameras_and_accessories_camera::all();
        return view('cameras.index',compact('items'));
    }
    elseif($obj === 'appliances-home_appliances'){
        $items=\App\Appliances_home_appliance::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'appliances-kitchen_appliances'){
        $items=\App\Appliances_kitchen_appliance::all();
        return view('kitchens.index',compact('items'));
    }
    elseif($obj === 'cameras_and_accessories-accessories'){
        $items=\App\Cameras_and_accessories_accessory::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-pajamas'){
        $items=\App\Men_pajama::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-panjabi_pajama_sets'){
        $items=\App\Men_panjabi_pajama_set::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-shirts'){
        $items=\App\Men_shirt::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-t_shirts'){
        $items=\App\Men_t_shirt::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-shoes'){
        $items=\App\Men_shoe::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-belts'){
        $items=\App\Men_belts::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-watches'){
        $items=\App\Men_watch::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-wallets'){
        $items=\App\Men_wallet::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-bags'){
        $items=\App\Men_bag::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'men-cufflinks'){
        $items=\App\Men_cufflink::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-shalwar_kameezs'){
        $items=\App\Women_shalwar_kameez::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-single_pieces'){
        $items=\App\Women_single_piece::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-dupattas'){
        $items=\App\Women_dupatta::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-shoes'){
        $items=\App\Women_shoe::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-bags'){
        $items=\App\Women_bag::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-watches'){
        $items=\App\Women_watch::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-purses'){
        $items=\App\Women_purse::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-necklaces'){
        $items=\App\Women_necklace::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'women-earrings'){
        $items=\App\Women_earring::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'mobiles_and_tablets-tablets'){
        $items=\App\Mobiles_and_tablets_tablet::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'mobiles_and_tablets-featured_phones'){
        $items=\App\Mobiles_and_tablets_featured_phone::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'mobiles_and_tablets-accessories'){
        $items=\App\Mobiles_and_tablets_accessory::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'computing-laptops'){
        $items=\App\Computing_laptop::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'computing-macbooks'){
        $items=\App\Computing_macbook::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'computing-accessories'){
        $items=\App\Computing_accessory::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'tv_and_electronics-smart_tvs'){
        $items=\App\Tv_and_electronics_smart_tv::all();
        return view('smarttv.index',compact('items'));
    }
    elseif($obj === 'tv_and_electronics-led_tvs'){
        $items=\App\Tv_and_electronics_led_tv::all();
        return view('ledtvs.index',compact('items'));
    }
    elseif($obj === 'tv_and_electronics-dvd_players'){
        $items=\App\Tv_and_electronics_dvd_player::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'tv_and_electronics-home_theaters'){
        $items=\App\Tv_and_electronics_home_theater::all();
        return view('womensharees.index',compact('items'));
    }
    elseif($obj === 'tv_and_electronics-others'){
        $items=\App\Tv_and_electronics_other::all();
        return view('womensharees.index',compact('items'));
    }

    else
        ('No!');
});
Route::group(['middlewareGroups'=>['web']],function(){
    Route::resource('/menpanjabis','MenpanjabisController');
    Route::resource('/womensharees','WomenshareesController');
    Route::resource('/smartphones','SmartphonesController');
    Route::resource('/computingdesktops','ComputingdesktopsController');
    Route::resource('/ledtvs','LedtvsController');
    Route::resource('/cameras','CamerasController');
    Route::resource('/homes','HomesController');
    Route::resource('/kitchens','KitchensController');
    Route::resource('/cam_acc','Cam_accController');
    Route::resource('/pajama','PajamaController');
    Route::resource('/pan_paj_set','Pan_paj_setController');
    Route::resource('/shirt','ShirtController');
    Route::resource('/tshirt','TshirtController');
    Route::resource('/menshoe','MenshoeController');
    Route::resource('/belt','BeltController');
    Route::resource('/watch','WatchController');
    Route::resource('/wallet','WalletController');
    Route::resource('/menbag','MenbagController');
    Route::resource('/cufflink','CufflinkController');
    Route::resource('/shal_kam','Shal_kamController');
    Route::resource('/single','SingleController');
    Route::resource('/dupatta','DupattaController');
    Route::resource('/womenshoe','WomenshoeController');
    Route::resource('/womenbag','WomenbagController');
    Route::resource('/womenwatch','WomenwatchController');
    Route::resource('/purse','PurseController');
    Route::resource('/neclace','NeclaceController');
    Route::resource('/earring','EarringController');
    Route::resource('/tablet','TabletController');
    Route::resource('/featured','FeaturedController');
    Route::resource('/mob_acc','Mob_accController');
    Route::resource('/laptop','LaptopController');
    Route::resource('/macbook','MacbookController');
    Route::resource('/comp_acc','Comp_accController');
    Route::resource('/smarttv','SmarttvController');
    Route::resource('/three_dtv','Three_dtvController');
    Route::resource('/dvd','DvdController');
    Route::resource('/theater','TheaterController');
    Route::resource('/tvothers','TvothersController');
});

/*-------------------------ends---------------------------*/

Route::get('/contact-us/', [
    'uses' => 'PageCotroller@ContactUs',
    'as' => 'contact'
]);
Route::get('/Register/', [
    'uses' => 'PageCotroller@Register',
    'as' => 'Register'
]);
Route::get('/shopping-cart', [
    'uses' => 'PageCotroller@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'PageCotroller@getCheckout',
    'as' => 'checkout',
    'middleware'=>'auth'
]);
Route::post('/checkout', [
    'uses' => 'PageCotroller@postCheckout',
    'as' => 'checkout',
    'middleware'=>'auth'
]);

Route::group(['prefix'=>'user'],function(){

    Route::group(['middleware'=>'guest'],function(){

        Route::get('/signup',[
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);
        Route::post('/signup',[
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);
        Route::get('/signin',[
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);
        Route::post('/signin',[
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });
    Route::group(['middleware'=>'auth'],function(){
        Route::get('user/profile',[
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        Route::get('/logout',[
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});

Route::group(['middleware' => 'web'], function () {
    // Place all your web routes here...

    Route::get('{id}', 'ShopController@delete');
    Route::get('{id1}/{id}', 'PageCotroller@displayProducts');
    Route::get('/product-show/{table_name}/{product_id}', 'PageCotroller@showdetails')->name('product-show');
    // Route::get('/{table_name}/{product_id}', 'PageCotroller@showdetails');

});




Route::group(['middleware' => ['web']], function () {
});
Route::group(['middleware' => ['web'], 'namespace' => 'Auth'], function () {
    Route::auth();
});






