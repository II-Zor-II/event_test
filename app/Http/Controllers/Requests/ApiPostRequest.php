<?php

namespace App\Http\Controllers\Requests;

use Illuminate\Foundation\Http\FormRequest;


/**
 * Class ApiPostRequest
 * @package App\Http\Controllers\Requests
 */
class ApiPostRequest extends FormRequest
{
    public function rules(){
        return [
            'events' => 'required|json'
        ];
    }
}
