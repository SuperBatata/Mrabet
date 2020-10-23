<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;
use DataTables;
 

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        if ($request->ajax())
        {
            $users=User::all();
            return DataTables::of($users)
            ->addColumn('Edit',function ($row)
            {
                $btn="<a href=".route('admin.users.edit',$row->id)."> <button type=\"button\" class=\"btn btn-outline-primary\">Edit </button></a>" ;
                return $btn;
            })
            ->addColumn('Delete',function ($row)
            {
                $user=User::find($row->id);
                $btn="<td> <form action=".route('admin.users.destroy',$user)."  method=\"POST\" >"
                .csrf_field(csrf_token())
                .method_field('DELETE')."<button class=\"btn btn-outline-primary\" type=\"submit\">Delete</button>  </form> </td>" ;
                return $btn;
            })
            ->rawColumns(['Edit','Delete'])
            ->make(true);
        }
         
        return view('admin.users.index'); 
        
            //
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Gate::denies('edit-users')){
            return redirect(route('admin.users.index'));
        }
       $roles =Role::all();
       return view('admin.users.edit')->with([
           'user'=>$user,
           'roles'=>$roles
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->lastname=$request->lastname;
        $user->cin=$request->cin;
        
        $user->save();
        if($user->save())
        $request->session()->flash('success',  $user->name .' successfully updated');
else
$request->session()->flash('danger', 'There was an error updating '. $user->name);

return redirect()->route('admin.users.index');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        
        if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }
            $user->roles()->detach();
            $user->delete();
            return redirect()->route('admin.users.index');
    }
}


