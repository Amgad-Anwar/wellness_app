<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TitlesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:25',
            'description' => 'nullable|string|max:255',
            'icon' => 'nullable|mimes:jpg,webp,png,svg|max:2048',
            'parent_id' => 'nullable|exists:titles,id',
            'department_id' => 'required|exists:departments,id',
        ];
    }
}
