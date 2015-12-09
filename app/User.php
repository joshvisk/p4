<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['last_name', 'first_name', 'username', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
	
	public function beer() {
        # User has many beers
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Beer');
    }
	
	public function address() {
        # User has many addresses
        # Define a one-to-many relationship.
        return $this->hasMany('\App\Address');
    }
	
	public function phone() {
        # User has many phone numbers
        # Define a one-to-many relationship.
        return $this->hasMany('\App\phone');
    }
	
	public function email() {
        # User has many emails
        # Define a one-to-many relationship.
        return $this->hasMany('\App\email');
    }
	
	public function password() {
        # User has many Passwords
        # Define a one-to-many relationship.
        return $this->hasMany('\App\password');
    }
}
