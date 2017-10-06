<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class NewsMiddleware
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
        //Middleware tin tức
        if($request->is('admin/tin-tuc/create')) //If user creating news
        {
            if(!Auth::user()->hasPermissionTo('Create news')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/tin-tuc') && $request->isMethod('Post')) {
            if(!Auth::user()->hasPermissionTo('Create news')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/tin-tuc/*/edit')) //If user editing news
        {
            if(!Auth::user()->hasPermissionTo('Edit news')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/tin-tuc/*')) 
        {
            if($request->isMethod('Put')) {
                if(!Auth::user()->hasPermissionTo('Edit news')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }

            if($request->isMethod('Delete')) {
                if(!Auth::user()->hasPermissionTo('Delete news')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }
        } 

        //Middleware loại tin
        if($request->is('admin/loai-tin/create')) //If user creating news
        {
            if(!Auth::user()->hasPermissionTo('Create news')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/loai-tin') && $request->isMethod('Post')) {
            if(!Auth::user()->hasPermissionTo('Create news')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/loai-tin/*/edit')) //If user editing news
        {
            if(!Auth::user()->hasPermissionTo('Edit news')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/loai-tin/*')) 
        {
            if($request->isMethod('Put')) {
                if(!Auth::user()->hasPermissionTo('Edit news')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }

            if($request->isMethod('Delete')) {
                if(!Auth::user()->hasPermissionTo('Delete news')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }
        } 

        return $next($request);
    }
}
