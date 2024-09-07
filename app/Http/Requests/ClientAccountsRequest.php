<?php

namespace App\Http\Requests;

use App\Models\Customer\ClientAccount;
use App\Models\Customer\CustomerPackage;
use App\Models\Customer\CustomerType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;

class ClientAccountsRequest extends FormRequest
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
            'account_name' => 'required|string|max:100',
            'owner_name' => 'required|string|max:100',
            'phone' => 'numeric|min:10',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique(ClientAccount::class)->ignore($this->id)],
            'password' => ['sometimes', 'confirmed', Rules\Password::defaults()],
            'start_date' => 'required|after_or_equal:now()',
            'end_date' => 'required|after:start_date',
            'customer_type_id' => ['required', Rule::exists(CustomerType::class, 'id')],
            'customer_package_id' => ['required', Rule::exists(CustomerPackage::class, 'id')],
            'image' => 'nullable|mimes:jpg,webp,png,svg|max:2048',
        ];
    }
}
