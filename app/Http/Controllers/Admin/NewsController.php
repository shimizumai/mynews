<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function add()
    {
        return view('adimin.news.create');
    }
}
//【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう