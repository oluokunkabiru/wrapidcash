<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StaffUpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|string|min:5',
            'phone' => 'required|string|min:10|max:13|unique:users,phone,'.Auth::user()->id,
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'password' => 'sometimes|nullable|string|min:5|confirmed',
            'avatar' => 'required_if:avatarset,notset|image|mimes:png,jpg'
        ];
    }
}
