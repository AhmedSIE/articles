<?php

Route::group(['namespace' => 'Sm\Articles\Http\Controllers'], function () {
    //backend
    //Route Articles 
    Route::get('articles/liste',                     'ArticlesController@index')->name('listearticles');
    Route::get('articles/create',                    'ArticlesController@create')->name('articlecreate');
    Route::post('articles/save',                      'ArticlesController@store')->name('articlessave');
    Route::get('articles/update',                    'ArticlesController@update')->name('articlesupdate');
    //Route Catégories
    Route::get('categories/liste',                   'CategoriesController@index')->name('listecategories');
    Route::get('categories/create',                  'CategoriesController@create')->name('createcategorie');
    Route::post('categories/save',                   'CategoriesController@save')->name('savecategorie');

    //frontend

    //  Route::get('liste',                              'ArticlesController@index2')->name('listearticles2');
   
});


