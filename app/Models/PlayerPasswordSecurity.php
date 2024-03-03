<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerPasswordSecurity extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $connection = 'sqlsrv_tank41';

    protected $table = 'Sys_Users_Password';
    protected $primaryKey = 'UserID';
    public $timestamps = false;
    protected $guarded = ['UserID'];
    protected $fillable = ['UserID','PasswordQuestion1','PasswordAnswer1','PasswordQuestion2','PasswordAnswer2','LastFindDate','FailedPasswordAttemptCount'];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}