<?php
/**
 * Created by PhpStorm.
 * User: dimitri.casier
 * Date: 14/03/2019
 * Time: 17:18
 */

\Route::get('/laravel-package', function(){
   return 'You did it!' . __('laravel-package::app.hello') . config('laravel-package.author');
});