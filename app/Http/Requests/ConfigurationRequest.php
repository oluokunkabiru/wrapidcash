<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigurationRequest extends FormRequest
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
            'name' => 'required|string|min:4',
            'phone' => 'required|string|min:10|max:15',
            'email' => 'required|email',
            'address' => 'sometimes|nullable|string',
            'vision' => 'sometimes|nullable|string',
            'mission' => 'sometimes|nullable|string',
            'about' => 'sometimes|nullable|string',
            'refbonus' => 'required|numeric|min:1|max:50',
            'dbonus' => 'required|numeric|min:1|max:50',
            'icharge' => 'required|numeric|min:1|max:50',
            'wcharge' => 'required|numeric|min:1|max:50',
            'duration' => 'required|numeric|min:1|max:50',
            'rwmax' => 'required|numeric|min:1',
            'logo' => 'sometimes|nullable|image|mimes:png,jpg'
        ];
    }
}
