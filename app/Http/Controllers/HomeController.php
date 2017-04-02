<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Database\Eloquent\Model;
use App\Model\UserInfo;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
        $this->middleware('auth');
        $this->middleware('users');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
    public function index()
    {
        return view('home');
    }

    public function users()
    {
        echo 'User List';exit;
        return view('home');
    }

    public function usersEntry()
    {
        //echo 'User Entry';exit;
        return view('users/new');
    }
    public function usersData(UserRequest $request)
    {
        //echo 'User Data';exit;
        //echo '<pre>'; print_r($request);
        $name = $request->input('name');
        echo 'Name: '.$name;
        $userinfo = new UserInfo;
        $userinfo->create($request->all());
        return redirect('users/list')->with('status','Data Insert');
    }

    public function usersList()
    {
        //echo 'List';exit;
        $userinfo = new UserInfo;
        $users = $userinfo->all();
        return view('users/list')->with('users',$users);
    }

    public function usersEdit($id)
    {
        //echo 'Edit: '.$id;exit;
        $userinfo = new UserInfo;
        //$users = $userinfo->find($id);
        $users = $userinfo->where('id', $id)->get();
        return view('users/update')->with('users',$users);
    }
    public function usersUpdate(UserRequest $request)
    {
        //echo 'Update Data';exit;
        //echo '<pre>'; print_r($request);
        $id = $request->input('id');
        $name = $request->input('name');

        $data = array(
            'name' => $name
        );

        $userinfo = new UserInfo;
        //$userinfo->where('id', $id)->update(['name'=>$name]);
        $userinfo->where('id', $id)->update($data);
        return redirect('users/list')->with('status','Data Update');
    }

    public function usersDelete($id)
    {
        //echo 'Update Data';exit;
        //echo '<pre>'; print_r($request);
        $userinfo = new UserInfo;
        $userinfo->where('id', $id)->delete();

        return redirect('users/list')->with('status','Data Delete');
    }

    public function rowQueryTest()
    {
        $userinfo = new UserInfo;
        //$userinfo->rowQuery();
        $userinfo->rowQuery2();
        exit;
        return redirect('users/list')->with('status','Data Delete');
    }


}
