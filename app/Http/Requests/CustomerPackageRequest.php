<?php

namespace App\Http\Requests;

use App\Models\Customer\CustomerPackage;
use App\Models\Customer\CustomerType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerPackageRequest extends FormRequest
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
            'package_name_en' => ['required', 'string', 'max:255', Rule::unique(CustomerPackage::class)->ignore($this->id)],
            'package_name_ar' => ['string', 'max:255', Rule::unique(CustomerPackage::class)->ignore($this->id)],
            'package_description_en' => 'nullable|string|max:255',
            'package_description_ar' => 'nullable|string|max:255',
            'price' => 'required|numeric|gt:0',
            'icon' => 'nullable|mimes:jpg,webp,png,svg|max:2048',
            'image' => 'nullable|mimes:jpg,webp,png,svg|max:2048',
            'customer_type_id' => ['required', Rule::exists(CustomerType::class, 'id')]
            // 'required|exists:customer-types,id'
        ];
    }
}
