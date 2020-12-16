<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /* user added code */
    public function __construct(User $user)
    {
        $this->user = $user;
    } /* user added code */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* user added code */
        // return $this->user->all();
        $users = $this->user->paginate(1);
        return  UserResource::collection($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( $users = $this->user->saveData($request)){
            $new_user = $this->user->findOrFail($users->id);
            return new UserResource($new_user);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = $this->user->findOrfail($id);
        return new UserResource($users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request /*, $id */)
    {
        if($users = $this->user->saveData($request) ){
            $new_user = $this->user->findOrFail($users->id);

            return new UserResource($new_user);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( $users = $this->user->deleteData($id) ){
            return new UserResource($users);
        }
    }
}
