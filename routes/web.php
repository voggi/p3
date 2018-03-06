<?php

Route::get('/', 'BillSplitterController@index');

Route::get('/split-bill', 'BillSplitterController@splitBill');
