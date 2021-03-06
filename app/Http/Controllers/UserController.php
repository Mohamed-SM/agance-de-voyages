<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); //isAdmin middleware lets only users with a //specific permission permission to access these resources
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);

        $user = User::create($request->only('email', 'name', 'password')); //Retrieving only the email and password data

        $roles = $request['roles']; //Retrieving the roles field
    //Checking if a role was selected
        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();            
            $user->assignRole($role_r); //Assigning role to user
            }
        }        
    //Redirect to the users.index view and display message
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id); //Get user with specified id
        $roles = Role::get(); //Get all roles

        return view('users.edit', compact('user', 'roles')); //pass user and roles data to view
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); //Get role specified by id

    //Validate name, email and password fields  
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$id,
        ]);
        if ($request['password'] != null) { //check if the password is updated
            $this->validate($request, [
                'password'=>'required|min:6|confirmed'
            ]);
            $input = $request->only(['name','email', 'password','phone','address']); //Retreive the name, email and password fields
        }else{
            $input = $request->only(['name', 'email','phone','address']);  //Retreive only the name, email fields
        }
        if ($request['image']) {
            $getimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/avatars'),$getimageName);    
            $user->image = $getimageName;
        }
        
        $user->fill($input)->save();
        
        //setting roles
        $roles = $request['roles']; //Retreive all roles
        if (isset($roles)) {        
            $user->roles()->sync($roles);  //If one or more role is selected associate user to roles          
        }        
        else {
            $user->roles()->detach(); //If no role is selected remove exisiting role associated to a user
        }
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully edited.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editprofile(){
        return view('users.useredit');
    }
    
    public function updateprofile(Request $request)
    {
        $user = Auth::user();

        //Validate name, email and password fields  
        $this->validate($request, [
            'name'=>'required|max:120',
            'email'=>'required|email|unique:users,email,'.$user->id,
        ]);
        if ($request['password'] != null) { //check if the password is updated
            $this->validate($request, [
                'password'=>'required|min:6|confirmed'
            ]);
            $input = $request->only(['name','email', 'password','phone','address']); //Retreive the name, email and password fields
        }else{
            $input = $request->only(['name', 'email','phone','address']);  //Retreive only the name, email fields
        }
        if ($request['image']) {
            $getimageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/avatars'),$getimageName);    
            $user->image = $getimageName;
        }
        
        $user->fill($input)->save();
        
        return redirect()->route('dashboard')
            ->with('flash_message',
             'User successfully edited.');
    }
}
