<?php

namespace App\Http\Requests;

use App\Models\Customer\ClientAccount;
use App\Models\Customer\CustomerList;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class CustomerListRequest extends FormRequest
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
         //   'client_account_id' => ['required', Rule::exists(ClientAccount::class, 'id')],
            'account_name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(CustomerList::class)->ignore($this->id)],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
            'phone' => 'nullable|numeric|min:10',
            'address' => 'nullable',
            'nationality_id' => 'nullable|string|numeric',
            'image' => 'nullable|mimes:jpg,webp,png,svg|max:2048',
        ];
    }
}
