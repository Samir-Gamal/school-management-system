<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Request;

class Authenticate extends Middleware
{

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            if (Request::is(app()->getLocale() . '/student/dashboard')) {
                return route('selection');
            }
            elseif(Request::is(app()->getLocale() . '/teacher/dashboard')) {
                return route('selection');
            }
            elseif(Request::is(app()->getLocale() . '/parent/dashboard')) {
                return route('selection');
            }
            else {
                return route('selection');
            }
        }
    }
}
