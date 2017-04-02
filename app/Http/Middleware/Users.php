<?php namespace App\Http\Middleware;

use Closure;

class Users {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        //echo "User Information<br>";
        //echo $request->input('name');

        if($request->input('name') == 'Admin'){
            return redirect('users/list')->with('status','Admin not Acceptable');
        }
        return $next($request);
	}

}
