<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class PartnersMiddleware
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
        if($request->is('admin/doi-tac/create')) //If user creating partners
        {
            if(!Auth::user()->hasPermissionTo('Create partners')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/doi-tac') && $request->isMethod('Post')) {
            if(!Auth::user()->hasPermissionTo('Create partners')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/doi-tac/*/edit')) //If user editing partners
        {
            if(!Auth::user()->hasPermissionTo('Edit partners')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/doi-tac/*')) 
        {
            if($request->isMethod('Put')) {
                if(!Auth::user()->hasPermissionTo('Edit partners')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }

            if($request->isMethod('Delete')) {
                if(!Auth::user()->hasPermissionTo('Delete partners')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }
        } 

        //Middleware loại tin
        if($request->is('admin/loai-doi-tac/create')) //If user creating partners
        {
            if(!Auth::user()->hasPermissionTo('Create partners')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/loai-doi-tac') && $request->isMethod('Post')) {
            if(!Auth::user()->hasPermissionTo('Create partners')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/loai-doi-tac/*/edit')) //If user editing partners
        {
            if(!Auth::user()->hasPermissionTo('Edit partners')) {
                abort(403);
            } else {
                return $next($request);
            }
        }

        if($request->is('admin/loai-doi-tac/*')) 
        {
            if($request->isMethod('Put')) {
                if(!Auth::user()->hasPermissionTo('Edit partners')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }

            if($request->isMethod('Delete')) {
                if(!Auth::user()->hasPermissionTo('Delete partners')) {
                    abort(403);
                } else {
                    return $next($request);
                }
            }
        } 

        return $next($request);
    }
}
