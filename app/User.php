<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function saveData($request){
        $user = new User;

        if($request->user_id) $user = $this->find($request->user_id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt( $request->password );
        $user->save();

        return $user;
    }

    public function deleteData($id){

        $user = self::findOrFail($id);
        $user->delete();

        return $user;
    }
}
