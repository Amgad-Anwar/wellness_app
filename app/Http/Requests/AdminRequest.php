<?php

namespace App\Http\Requests;

use App\Models\Admin\Admin;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class AdminRequest extends FormRequest
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
            'full_name' => 'required|string|max:255',
            'hr_code' => 'integer',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(Admin::class)->ignore($this->id)],
            'password' => ['sometimes', 'confirmed', Rules\Password::defaults()],
            'department_id' => 'required|exists:departments,id',
            'title_id' => 'required|exists:titles,id',
            'roles' => 'nullable|array',
        ];
    }
}
