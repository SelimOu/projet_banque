<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'type' => ['required'],
            'source' => ['required'],
            'amount' => ['required'],
            'date' => ['required'],
        ];
    }
}
