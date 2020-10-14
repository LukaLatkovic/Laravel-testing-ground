<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){

        $slice = Str::of('Welcome to the world')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello')->append('world');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('Laravel 7')->replace('7','8');
        echo $replaced . '<br>';

        $converted = Str::of('this is a title')->title();
        echo $converted . '<br>';

        $slug = Str::of('Laravel 8 Framework')->slug('-');
        echo $slug . '<br>';

        $str = Str::of('Laravel Framework')->substr(8);
        echo $str . '<br>';

        $str2 = Str::of('/Laravel8/')->trim('/');
        echo $str2 . '<br>';

        $str3 = Str::of('laravel 8')->upper();
        echo $str3 . '<br>';

    }
}
