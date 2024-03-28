<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'number' => 'required|string|min:1|max:100',
            'due_date' => 'nullable|date|after_or_equal:today',
            'send_date' => 'nullable|date|after_or_equal:due_date|after_or_equal:today',
        ];
    }
}
