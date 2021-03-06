<?php

namespace App\Http\Requests\dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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
    {  return [
            
        'room_owner'=> 'required|numeric',
        'room_background' => 'required',
        'room_name'=> 'required|string|max:225',
        'room_desc'=> 'required|string|max:225',
        'room_background.*' => 'required|mimes:png,jpg|max: 10048',
        
    ];
    }
}
