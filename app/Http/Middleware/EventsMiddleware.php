<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class EventsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //Middleware sự kiện
        if($request->is('admin/su-kien/create')) //If user creating events
        {
            if(!Auth::user()->hasPermissionTo('Create events')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/su-kien') && $request->isMethod('Post')) {
            if(!Auth::user()->hasPermissionTo('Create events')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/su-kien/*/edit')) //If user editing events
        {
            if(!Auth::user()->hasPermissionTo('Edit events')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/su-kien/*')) 
        {
            if($request->isMethod('Put')) {
                if(!Auth::user()->hasPermissionTo('Edit events')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }

            if($request->isMethod('Delete')) {
                if(!Auth::user()->hasPermissionTo('Delete events')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }
        } 

        return $next($request);
    }
}
