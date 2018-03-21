<?php

Route::get('/', 'BillController@index');

Route::get('/split-bill', 'BillController@splitBill');
