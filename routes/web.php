<?php

use App\Http\Controllers\Adm\AdmAttractivenessController;
use App\Http\Controllers\Adm\AdmAttractivenessesProjectsController;
use App\Http\Controllers\Adm\AdmBlockImportantController;
use App\Http\Controllers\Adm\AdmCategoryController;
use App\Http\Controllers\Adm\AdmDonateController;
use App\Http\Controllers\Adm\AdmFaqArticleController;
use App\Http\Controllers\Adm\AdmFaqCategoryController;
use App\Http\Controllers\Adm\AdmImageUploadController;
use App\Http\Controllers\Adm\AdmIncomeController;
use App\Http\Controllers\Adm\AdmLetterIndexController;
use App\Http\Controllers\Adm\AdmModalWindowController;
use App\Http\Controllers\Adm\AdmNotesController;
use App\Http\Controllers\Adm\AdmOrderStatusController;
use App\Http\Controllers\Adm\AdmPaymentOrderController;
use App\Http\Controllers\Adm\AdmPermissionController;
use App\Http\Controllers\Adm\AdmProjectsController;
use App\Http\Controllers\Adm\AdmRoleController;
use App\Http\Controllers\Adm\AdmSectorController;
use App\Http\Controllers\Adm\AdmUserController;
use App\Http\Controllers\Adm\AdmWalletController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AuthUser\UserDonatesController;
use App\Http\Controllers\AuthUser\UserNotesController;
use App\Http\Controllers\AuthUser\UserProfileController;
use App\Http\Controllers\AuthUser\UserProjectController;
use App\Http\Controllers\AuthUser\UserSettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ICO\MCPTokenController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\MCPChain\ChainNodeController;
use App\Http\Controllers\Public\PublicDonatController;
use App\Http\Controllers\Public\PublicFaqCategoryController;
use App\Http\Controllers\Public\PublicProjectController;
use App\Http\Controllers\Public\PublicSubscribeController;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;





Route::group(['domain'=>getenv('APP_DOMAIN_ICO')],function (){
    Route::get('/',  [MCPTokenController::class, 'index'])->name('ico.main');
        Route::post('/send_pay',  [AdmPaymentOrderController::class, 'reception'])->name('send_pay');
});



// Основной домен (root)

    Route::get('/', [MainPageController::class, 'index'])->name('root.main');
    Route::get('/about', function () { return view('root.about'); })->name('root.about');
    Route::get('/contact', function () { return view('root.contact'); })->name('root.contact');
    // FAQ
    Route::get('/faq', [PublicFaqCategoryController::class,'index'])->name('root.faq');
    //Взнос без регистрации
    Route::get('/donate/{id}', [PublicDonatController::class,'index'])->name('root.donate');
    //Недвижимость
    Route::get('/development', function () { return view('root.development'); })->name('root.development');
    //подписка
    Route::post('/subscribe-project', [PublicSubscribeController::class, 'createSubscribeProject'])->name('subscribe-project');
    //Инвесторы
    Route::get('/sponsors', function () { return view('root.sponsors'); })->name('root.sponsors');
    Route::get('/top_sponsors', function () { return view('root.top_sponsors'); })->name('root.top_sponsors');
    Route::get('/be_sponsor', function () { return view('root.be_sponsor'); })->name('root.be_sponsor');
    //Проекты публичные

    Route::get('/all_projects', function () { return view('root.all_projects'); })->name('root.all_projects');
    Route::get('/project/{id}', [PublicProjectController::class,'viewSingleProject'])->name('root.single_project');
    Route::get('/top_projects', function () { return view('root.top_projects'); })->name('root.top_projects');
    Route::get('/add_project', function () { return view('root.add_project'); })->name('root.add_project');
    Route::get('/add_project_rule', function () { return view('root.add_project_rule'); })->name('root.add_project_rule');
    Route::get('/add_project_pricing', function () { return view('root.add_project_pricing'); })->name('root.add_project_pricing');



Auth::routes();
// Админка

Route::group([
	
	'prefix' => 'adp',
	'base_path' =>('/adp'),
	'domain'=>getenv('APP_DOMAIN')
	], function () {



        Route::get('/home', function () { return view('adp.home'); })->name('adp.home');
        //Загрузка картинки
        Route::post('image-upload', [AdmImageUploadController::class, 'storeImage'])->name('image.upload');



        // Админ пользователи
        Route::get('/users', [AdmUserController::class, 'index'])->name('adp.users');
            Route::post('/user/update/{id}', [AdmUserController::class, 'update'])->name('adp.user.update');
            Route::post('/user/delete/{id}', [AdmUserController::class, 'delete'])->name('adp.user.delete');
        Route::get('/user/userrolepermission/{id}', [AdmUserController::class, 'userRolePermissionShow'])->name('adp.userRolePermission');
            Route::post('/user/updateuserpermission/{user}', [AdmUserController::class, 'updateUserPermission'])->name('adp.user.updateUserPermission');
        Route::get('user/{user}/role/{role}/assign', [AdmUserController::class, 'assignRole'])->name('adp.user.assign.role');
        Route::get('user/{user}/role/{role}/unassign', [AdmUserController::class, 'unassignRole'])->name('adp.user.unassign.role');

        // Админ категории
        Route::get('/categories', [AdmCategoryController::class, 'index'])->name('adp.categories');
            Route::post('/categories/update/{id}', [AdmCategoryController::class, 'update'])->name('adp.categories.update');
            Route::post('/categories/delete/{id}', [AdmCategoryController::class, 'delete'])->name('adp.categories.delete');
            Route::post('/new-categories', [AdmCategoryController::class, 'create'])->name('adp.new-categories');

        // Виды дохода
        Route::get('/incomes', [AdmIncomeController::class, 'index'])->name('adp.incomes');
            Route::post('/new-income', [AdmIncomeController::class, 'create'])->name('adp.new-income');
            Route::post('/incomes/update/{id}', [AdmIncomeController::class, 'update'])->name('adp.incomes.update');
            Route::post('/incomes/delete/{id}', [AdmIncomeController::class, 'destroy'])->name('adp.incomes.delete');

        //Админ проекты
        Route::get('/projects', [AdmProjectsController::class, 'viewProjects'])->name('adp.projects');
        Route::get('/project/{id}', [AdmProjectsController::class, 'viewSingleProject'])->name('adp.single_project');
        Route::get('/new-project', [AdmProjectsController::class, 'newProjects'])->name('adp.new-project');
            Route::post('/creatProject', [AdmProjectsController::class, 'createProject'])->name('adp.createProject');
        Route::get('/publishProject/{id}', [AdmProjectsController::class, 'publishProject'])->name('adp.publishProject');

        //Админ взносы
        Route::get('/donates', [AdmDonateController::class, 'index'])->name('adp.donates');

        //Админ сообщения
        Route::get('/notes', [AdmNotesController::class, 'index'])->name('adp.notes');

        //Админ роли
        Route::get('/roles', [AdmRoleController::class, 'index'])->name('adp.roles');
            Route::post('/new-role', [AdmRoleController::class, 'create'])->name('adp.new-role');
            Route::post('/role/delete/{id}', [AdmRoleController::class, 'delete'])->name('adp.role.delete');
            Route::post('/role/update/{id}', [AdmRoleController::class, 'update'])->name('adp.role.update');
        Route::get('/show_role/{id}', [AdmRoleController::class, 'show'])->name('adp.show_role');


        //Админ привелегии
        Route::get('/permissions', [AdmPermissionController::class, 'index'])->name('adp.permissions');
            Route::post('/new-permission', [AdmPermissionController::class, 'create'])->name('adp.new-permission');
            Route::post('/permission/delete/{id}', [AdmPermissionController::class, 'delete'])->name('adp.permission.delete');
            Route::post('/permission/update/{id}', [AdmPermissionController::class, 'update'])->name('adp.permission.update');

        //админ модальные окна

        Route::get('/modals', [AdmModalWindowController::class, 'index'])->name('adp.modals');
            Route::post('/new-modal', [AdmModalWindowController::class, 'create'])->name('adp.new-modal');
            Route::post('/modal/delete/{id}', [AdmModalWindowController::class, 'delete'])->name('adp.modal.delete');
            Route::post('/modal/update/{id}', [AdmModalWindowController::class, 'update'])->name('adp.modal.update');

        //типы привлекательности проекта
        Route::get('/attractiveness', [AdmAttractivenessController::class, 'index'])->name('adp.attractiveness');
            Route::post('/attractiveness/delete/{id}', [AdmAttractivenessController::class, 'delete'])->name('adp.attractiveness.delete');
            Route::post('/attractiveness/update/{id}', [AdmAttractivenessController::class, 'update'])->name('adp.attractiveness.update');
            Route::post('/new-attractiveness', [AdmAttractivenessController::class, 'create'])->name('adp.new-attractiveness');

        //сектора проекта
        Route::get('/sector', [AdmSectorController::class, 'index'])->name('adp.sector');
        Route::post('/sector/update/{id}', [AdmSectorController::class, 'update'])->name('adp.sector.update');

        //сектора проекта
        Route::get('/letter_index',[AdmLetterIndexController::class, 'index'])->name('adp.letterIndex');
        Route::post('/letter_index/update/{id}', [AdmLetterIndexController::class, 'update'])->name('adp.letterIndex.update');

        //Оценка
        Route::get('/assessment/{id}',[AdmAttractivenessesProjectsController::class, 'index'])->name('adp.assessment');
            Route::post('/pre-calculation/{id}',[AdmAttractivenessesProjectsController::class, 'preCalculation'])->name('adp.preCalculation');
            Route::post('/calculation/{id}',[AdmAttractivenessesProjectsController::class, 'calculation'])->name('adp.calculation');


        //FAQ
            //Категории FAQ
        Route::get('/faq_categories', [AdmFaqCategoryController::class, 'index'])->name('adp.FAQCategories');
            Route::post('/faq_categories/delete/{id}', [AdmFaqCategoryController::class, 'delete'])->name('adp.FAQCategories.delete');
            Route::post('/faq_categories/update/{id}', [AdmFaqCategoryController::class, 'update'])->name('adp.FAQCategories.update');
            Route::post('/new-faq_categories', [AdmFaqCategoryController::class, 'create'])->name('adp.new-FAQCategories');

            //Статьи FAQ
        Route::get('/faq_articles', [AdmFaqArticleController::class, 'index'])->name('adp.FAQArticles');
            Route::post('/faq_article/delete/{id}', [AdmFaqArticleController::class, 'delete'])->name('adp.FAQArticles.delete');
            Route::post('/faq_article/update/{id}', [AdmFaqArticleController::class, 'update'])->name('adp.FAQArticles.update');
            Route::post('/new-faq_article', [AdmFaqArticleController::class, 'create'])->name('adp.new-FAQArticles');
        Route::get('/publishFaqArticle/{id}', [AdmFaqArticleController::class, 'publishArticle'])->name('adp.publishArticle');
        Route::get('/unpublishFaqArticle/{id}', [AdmFaqArticleController::class, 'unpublishArticle'])->name('adp.unpublishArticle');

            //кошелек
        Route::get('/mainWallet', [AdmWalletController::class, 'index'])->name('adp.wallet_balance');

        // Админ статусы ордеров
        Route::get('/order_status', [AdmOrderStatusController::class, 'index'])->name('adp.order_status');
        Route::post('/order_status/update/{id}', [AdmOrderStatusController::class, 'update'])->name('adp.order_status.update');
        Route::post('/order_status/delete/{id}', [AdmOrderStatusController::class, 'delete'])->name('adp.order_status.delete');
        Route::post('/new-order_status', [AdmOrderStatusController::class, 'create'])->name('adp.new-order_status');

        // Админ блок ВАЖНО
        Route::get('/blocks_important', [AdmBlockImportantController::class, 'index'])->name('adp.blocks_important');
        Route::post('/block_important/update/{id}', [AdmBlockImportantController::class, 'update'])->name('adp.block_important.update');
        Route::post('/block_important/delete/{id}', [AdmBlockImportantController::class, 'delete'])->name('adp.block_important.delete');
        Route::post('/new-block_important', [AdmBlockImportantController::class, 'create'])->name('adp.new-block_important');


        // Админ блок BLOCKCHAIN ноды
        Route::get('/nodes', [ChainNodeController::class, 'index'])->name('adp.chain_nodes');
        Route::post('/nodes/update/{id}', [ChainNodeController::class, 'update'])->name('adp.chain_nodes.update');
        Route::post('/nodes/delete/{id}', [ChainNodeController::class, 'delete'])->name('adp.chain_nodes.delete');
        Route::post('/new-nodes', [ChainNodeController::class, 'create'])->name('adp.new-chain_nodes');




});

// Авторизованные
Route::middleware(['auth'])->group(function()
{
      Route::get('/projects', [UserProjectController::class, 'viewProjects'])->name('user.projects');
      Route::get('/my_donates', [UserDonatesController::class, 'viewUserDonates'])->name('user.mydonates');
      Route::get('/addamount', [UserDonatesController::class, 'addWalletAmount'])->name('user.addamount');
      Route::get('/profile', [UserProfileController::class, 'viewProfile'])->name('user.profile');
      Route::get('/setting', [UserSettingController::class, 'viewSetting'])->name('user.setting');
      Route::get('/notes', [UserNotesController::class, 'viewNotes'])->name('user.notes');

      Route::get('/cabinet/main', [HomeController::class, 'index'])->name('cabinet.main');
});
