<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "usuario";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword() {
        return $this->password;
    }

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = md5($value);
    }

    /**
        * Overrides the method to ignore the remember token.
    */
    public function setAttribute($key, $value) {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute) {
          parent::setAttribute($key, $value);
        }
    }

    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('email');
            $table->longText('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

}
