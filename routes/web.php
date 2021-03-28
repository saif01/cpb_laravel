<?php

Route::get('/','ForntEndController@Index')->name('index');
//About
Route::get('/about-history', 'ForntEndController@History')->name('history');
Route::get('/about-vision', 'ForntEndController@Vision')->name('vision');
Route::get('/about-mission', 'ForntEndController@Mission')->name('mission');
Route::get('/about-chairman-message', 'ForntEndController@ChairmanMessage')->name('chairman-message');
Route::get('/about-president-message', 'ForntEndController@PresidentMessage')->name('president-message');
Route::get('/about-business-operations', 'ForntEndController@BusinessOperation')->name('business-operation');
Route::get('/about-corporate-structure', 'ForntEndController@CorporateStructure')->name('corporate-structure');
Route::get('/about-our-headquarters', 'ForntEndController@OurHeadquarters')->name('our-headquarters');
Route::get('/about-animal-welfare', 'ForntEndController@AnimalWelfare')->name('animal-welfare');
//News
Route::get('/news-press-releases', 'ForntEndController@PressRelease')->name('press-releases');
Route::get('/news-traing-development', 'ForntEndController@TraingDevelopment')->name('traing-development');
Route::get('/news-all-event', 'ForntEndController@Event')->name('event');
Route::get('/news-gallery', 'ForntEndController@Gallery')->name('gallery');
//CSR
Route::get('/crs-social-responsibilities', 'ForntEndController@SocialResponse')->name('social-res');
Route::get('/crs-community', 'ForntEndController@Community')->name('community');
Route::get('/crs-news', 'ForntEndController@News')->name('news');
//Contact
Route::get('/contact', 'ForntEndController@Contact')->name('contact');
Route::post('/mail-send', 'ForntEndController@MailSend')->name('mail_send');
//Product
Route::get('/product/{name}', 'ForntEndController@Product')->name('product');

//Recruit Section
Route::get('/recruit', 'UserRecruitController@Index')->name('recruit');
Route::get('/user-register/', 'UserRecruitController@RegisterFormShow')->name('user.register.form');
Route::post('/user-insert/', 'UserRecruitController@Register')->name('user.register');
Route::get('/user-verify/{token}/{email}', 'UserRecruitController@UserVerify')->name('user.verify');
Route::get('/user-login', 'UserRecruitController@LoginForm')->name('user.login.form');
Route::post('/user-login-action', 'UserRecruitController@loginAction')->name('user.login');
Route::get('/user-logout', 'UserRecruitController@Logout')->name('user.logout');
Route::get('/user-password-change', 'UserRecruitController@PassChange')->name('user.pass.change');
Route::post('/user-password-change-action', 'UserRecruitController@PassChangeAction')->name('user.pass.change.action');
Route::get('/user-profile', 'UserRecruitController@UserProfile')->name('user.profile');
Route::post('/user-apply', 'UserRecruitController@UserApply')->name('user.apply');



Route::get('/test', 'UserRecruitController@Test');
Route::get('/test/{token}', 'UserRecruitController@Test2');
// Route::get('/', function () {
//     return view('user.index');
// });

Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/error', function () {
    //return 'You Are Gonig Worng Way';
    return view('admin.error');
});

//Start Login Route
Route::get('/admin', 'login\LoginController@ShowLoginForm')->name('admin.login.form');
Route::post('/admin-login-action', 'login\LoginController@loginAction')->name('admin.login.action');

Route::group(['middleware' => 'login'], function () {
    //Start Login middleware
    Route::get('/admin-logout', 'login\LoginController@logout')->name('admin.logout');
    Route::post('/check', 'CommonController@CkeckValue')->name('value_available.check');
    Route::get('/change-status/{id}/{table}/{filed}/{value}', 'CommonController@ChangeStatus')->name('change.status');
    Route::get('/publish/{id}/{table}/{filed}/{value}', 'PublishController@PublishStatus')->name('publish')->middleware('publish');
    //Admin Logout
    Route::group(['prefix' => 'admin'], function ()
    {
        Route::get('/dashboard', 'AdminController@Dashboard')->name('admin.dashboard');

        Route::group(['middleware' => 'super_admin'], function () {
            // Admin
            Route::get('/add', 'AdminController@Add');
            Route::post('/insert', 'AdminController@Insert');
            Route::get('/all', 'AdminController@All')->name('admin.all');
            Route::get('/delete/{id}', 'AdminController@Delete');
            Route::post('/single', 'AdminController@SingleData');
            Route::get('/edit/{id}', 'AdminController@EditFormShow');
            Route::post('/edit-action/{id}', 'AdminController@Update');

            Route::group(['prefix' => 'setting'], function () {
                // contact
                Route::group(['prefix' => 'contact'], function () {
                    Route::get('/add', 'ContactController@Add')->name('contact.add');
                    Route::get('/all', 'ContactController@All')->name('contact.all');
                    Route::post('/insert', 'ContactController@Insert')->name('contact.insert');
                    Route::get('/delete/{id}', 'ContactController@Delete')->name('contact.delete');
                    Route::get('/edit/{id}', 'ContactController@EditFormShow')->name('contact.edit');
                    Route::post('/update/{id}', 'ContactController@Update')->name('contact.update');
                });

                // contact
                Route::group(['prefix' => 'slider'], function () {
                    Route::get('/add', 'SliderController@Add')->name('slider.add');
                    Route::get('/all', 'SliderController@All')->name('slider.all');
                    Route::post('/insert', 'SliderController@Insert')->name('slider.insert');
                    Route::get('/delete/{id}', 'SliderController@Delete')->name('slider.delete');
                    Route::get('/edit/{id}', 'SliderController@EditFormShow')->name('slider.edit');
                    Route::post('/update/{id}', 'SliderController@Update')->name('slider.update');
                });
            });
        });

        //Start About Section
        Route::group(['prefix' => 'about', 'middleware' => 'about'], function () {
            //history
            Route::group(['prefix' => 'history'], function () {
                Route::get('/add', 'HistoryController@Add')->name('history.add');
                Route::get('/all', 'HistoryController@All')->name('history.all');
                Route::post('/insert', 'HistoryController@Insert')->name('history.insert');
                Route::get('/delete/{id}', 'HistoryController@Delete')->name('history.delete')->middleware('delete');
                Route::get('/edit/{id}', 'HistoryController@EditFormShow')->name('history.edit');
                Route::post('/update/{id}', 'HistoryController@Update')->name('history.update');
            });

             //history
             Route::group(['prefix' => 'vision'], function () {
                Route::get('/add', 'VisionController@Add')->name('vision.add');
                Route::get('/all', 'VisionController@All')->name('vision.all');
                Route::post('/insert', 'VisionController@Insert')->name('vision.insert');
                Route::get('/delete/{id}', 'VisionController@Delete')->name('vision.delete')->middleware('delete');
                Route::get('/edit/{id}', 'VisionController@EditFormShow')->name('vision.edit');
                Route::post('/update/{id}', 'VisionController@Update')->name('vision.update');
            });


            //Mission
            Route::group(['prefix' => 'mission'], function () {
                Route::get('/add', 'MissionController@Add')->name('mission.add');
                Route::get('/all', 'MissionController@All')->name('mission.all');
                Route::post('/insert', 'MissionController@Insert')->name('mission.insert');
                Route::get('/delete/{id}', 'MissionController@Delete')->name('mission.delete')->middleware('delete');
                Route::get('/edit/{id}', 'MissionController@EditFormShow')->name('mission.edit');
                Route::post('/update/{id}', 'MissionController@Update')->name('mission.update');
            });

            //business-operation
            Route::group(['prefix' => 'business-operation'], function () {
                Route::get('/add', 'BUoperationController@Add')->name('business-operation.add');
                Route::get('/all', 'BUoperationController@All')->name('business-operation.all');
                Route::post('/insert', 'BUoperationController@Insert')->name('business-operation.insert');
                Route::get('/delete/{id}', 'BUoperationController@Delete')->name('business-operation.delete')->middleware('delete');
                Route::get('/edit/{id}', 'BUoperationController@EditFormShow')->name('business-operation.edit');
                Route::post('/update/{id}', 'BUoperationController@Update')->name('business-operation.update');
            });

            //Corporate Structure-operation
            Route::group(['prefix' => 'structure'], function () {
                Route::get('/add', 'StructureController@Add')->name('structure.add');
                Route::get('/all', 'StructureController@All')->name('structure.all');
                Route::post('/insert', 'StructureController@Insert')->name('structure.insert');
                Route::get('/delete/{id}', 'StructureController@Delete')->name('structure.delete')->middleware('delete');
                Route::get('/edit/{id}', 'StructureController@EditFormShow')->name('structure.edit');
                Route::post('/update/{id}', 'StructureController@Update')->name('structure.update');
            });

            //Headquarter
            Route::group(['prefix' => 'headqarter'], function () {
                Route::get('/add', 'HeadquarterController@Add')->name('headqarter.add');
                Route::get('/all', 'HeadquarterController@All')->name('headqarter.all');
                Route::post('/insert', 'HeadquarterController@Insert')->name('headqarter.insert');
                Route::get('/delete/{id}', 'HeadquarterController@Delete')->name('headqarter.delete')->middleware('delete');
                Route::get('/edit/{id}', 'HeadquarterController@EditFormShow')->name('headqarter.edit');
                Route::post('/update/{id}', 'HeadquarterController@Update')->name('headqarter.update');
            });

            //Chairman Message
            Route::group(['prefix' => 'chairman-message'], function () {
                Route::get('/add', 'ChairmanMsgController@Add')->name('chairman.msg.add');
                Route::get('/all', 'ChairmanMsgController@All')->name('chairman.msg.all');
                Route::post('/insert', 'ChairmanMsgController@Insert')->name('chairman.msg.insert');
                Route::get('/delete/{id}', 'ChairmanMsgController@Delete')->name('chairman.msg.delete')->middleware('delete');
                Route::get('/edit/{id}', 'ChairmanMsgController@EditFormShow')->name('chairman.msg.edit');
                Route::post('/update/{id}', 'ChairmanMsgController@Update')->name('chairman.msg.update');
            });

            //President Message
            Route::group(['prefix' => 'president-message'], function () {
                Route::get('/add', 'PresidentMsgController@Add')->name('president.msg.add');
                Route::get('/all', 'PresidentMsgController@All')->name('president.msg.all');
                Route::post('/insert', 'PresidentMsgController@Insert')->name('president.msg.insert');
                Route::get('/delete/{id}', 'PresidentMsgController@Delete')->name('president.msg.delete')->middleware('delete');
                Route::get('/edit/{id}', 'PresidentMsgController@EditFormShow')->name('president.msg.edit');
                Route::post('/update/{id}', 'PresidentMsgController@Update')->name('president.msg.update');
            });



        });
        //End About Section

        //Start CSR Section
        Route::group(['prefix'=>'csr', 'middleware' => 'csr'], function()
        {

            //Social Responsibility
            Route::group(['prefix' => 'social-responsibility'], function () {
                Route::get('/add', 'SRController@Add')->name('sr.add');
                Route::get('/all', 'SRController@All')->name('sr.all');
                Route::post('/insert', 'SRController@Insert')->name('sr.insert');
                Route::get('/delete/{id}', 'SRController@Delete')->name('sr.delete')->middleware('delete');
                Route::get('/edit/{id}', 'SRController@EditFormShow')->name('sr.edit');
                Route::post('/update/{id}', 'SRController@Update')->name('sr.update');
            });

            //Community
            Route::group(['prefix' => 'community'], function () {
                Route::get('/add', 'CommunityController@Add')->name('community.add');
                Route::get('/all', 'CommunityController@All')->name('community.all');
                Route::post('/insert', 'CommunityController@Insert')->name('community.insert');
                Route::get('/delete/{id}', 'CommunityController@Delete')->name('community.delete')->middleware('delete');
                Route::get('/edit/{id}', 'CommunityController@EditFormShow')->name('community.edit');
                Route::post('/update/{id}', 'CommunityController@Update')->name('community.update');
            });

            //Community
            Route::group(['prefix' => 'news'], function () {
                Route::get('/add', 'NewsController@Add')->name('news.add');
                Route::get('/all', 'NewsController@All')->name('news.all');
                Route::post('/insert', 'NewsController@Insert')->name('news.insert');
                Route::get('/delete/{id}', 'NewsController@Delete')->name('news.delete')->middleware('delete');
                Route::get('/edit/{id}', 'NewsController@EditFormShow')->name('news.edit');
                Route::post('/update/{id}', 'NewsController@Update')->name('news.update');
            });

        });
        //End CSR Section

        //Start News Section
        Route::group(['prefix' => 'news', 'middleware' => 'news'], function ()
        {
            //Press Section
            Route::group(['prefix' => 'press'], function () {
                Route::get('/add', 'PressController@Add')->name('press.add');
                Route::get('/all', 'PressController@All')->name('press.all');
                Route::post('/insert', 'PressController@Insert')->name('press.insert');
                Route::get('/delete/{id}', 'PressController@Delete')->name('press.delete')->middleware('delete');
                Route::get('/edit/{id}', 'PressController@EditFormShow')->name('press.edit');
                Route::post('/update/{id}', 'PressController@Update')->name('press.update');
            });
            //Training & Developlopment Section
            Route::group(['prefix' => 'training-developlopment'], function () {
                Route::get('/add', 'TrDevController@Add')->name('trdev.add');
                Route::get('/all', 'TrDevController@All')->name('trdev.all');
                Route::post('/insert', 'TrDevController@Insert')->name('trdev.insert');
                Route::get('/delete/{id}', 'TrDevController@Delete')->name('trdev.delete')->middleware('delete');
                Route::get('/edit/{id}', 'TrDevController@EditFormShow')->name('trdev.edit');
                Route::post('/update/{id}', 'TrDevController@Update')->name('trdev.update');
            });
            //Event Section
            Route::group(['prefix' => 'event'], function () {
                Route::get('/add', 'EventController@Add')->name('event.add');
                Route::get('/all', 'EventController@All')->name('event.all');
                Route::post('/insert', 'EventController@Insert')->name('event.insert');
                Route::get('/delete/{id}', 'EventController@Delete')->name('event.delete')->middleware('delete');
                Route::get('/edit/{id}', 'EventController@EditFormShow')->name('event.edit');
                Route::post('/update/{id}', 'EventController@Update')->name('event.update');
            });

            //Photos Section
            Route::group(['prefix' => 'photo'], function () {
                Route::get('/add', 'PhotoController@Add')->name('photo.add');
                Route::get('/all', 'PhotoController@All')->name('photo.all');
                Route::post('/insert', 'PhotoController@Insert')->name('photo.insert');
                Route::get('/delete/{id}', 'PhotoController@Delete')->name('photo.delete')->middleware('delete');
            });

        });
        //End News Section

        //Start Product Section
        Route::group(['prefix' => 'product', 'middleware' => 'product'], function ()
        {
            Route::get('/add', 'ProductController@Add')->name('product.add');
            Route::get('/all', 'ProductController@All')->name('product.all');
            Route::post('/insert', 'ProductController@Insert')->name('product.insert');
            Route::get('/delete/{id}', 'ProductController@Delete')->name('product.delete')->middleware('delete');
            Route::get('/edit/{id}', 'ProductController@EditFormShow')->name('product.edit');
            Route::post('/update/{id}', 'ProductController@Update')->name('product.update');
        });
        //End Product Section

        //Start Recruit Section
        Route::group(['prefix' => 'recruit', 'middleware' => 'recruit'], function () {
            Route::get('/add', 'RecruitController@Add')->name('recruit.add');
            Route::get('/all', 'RecruitController@All')->name('recruit.all');
            Route::post('/insert', 'RecruitController@Insert')->name('recruit.insert');
            Route::get('/delete/{id}', 'RecruitController@Delete')->name('recruit.delete')->middleware('delete');
            Route::get('/edit/{id}', 'RecruitController@EditFormShow')->name('recruit.edit');
            Route::post('/update/{id}', 'RecruitController@Update')->name('recruit.update');
            Route::get('/application', 'RecruitController@Application')->name('application.all');

            Route::post('/user-details', 'RecruitController@UserDetails')->name('user.details');
            Route::post('/recruit-details', 'RecruitController@RecruitDetails')->name('recruit.details');
            //User Section
            Route::group(['prefix' => 'user'], function () {
                Route::get('/all', 'RecruitController@AllUser')->name('user.all');
                Route::get('/delete/{id}', 'RecruitController@Delete')->name('user.delete')->middleware('delete');
            });
        });
        //End Recruit Section


    });

});
//end Loging middleware


Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
 });


 Route::get('/test', 'ContactController@Test');
