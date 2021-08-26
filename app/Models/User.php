<?php

namespace App\Models;

use curl;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function moodleFunction($function, $param = [])
    {
        $token = env('LM_TOKEN');
        $domainname = env('LM_URL');
        $functionname = $function;
        $restformat = 'json';

        $serverurl = $domainname . '/webservice/rest/server.php'. '?wstoken=' . $token . '&wsfunction='.$functionname;

        require_once('curl.php');
        $curl = new curl;

        $restformat = ($restformat == 'json')?'&moodlewsrestformat=' . $restformat:'';

        $resp = $curl->post($serverurl . $restformat, $param);

        return json_decode($resp);
    }
}
