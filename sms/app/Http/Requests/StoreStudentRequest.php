<?php

namespace App\Http\Requests;
use App\Rules\PhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required','max:30'],
            'last_name' => ['nullable','max:30'],
            'telno' => ['required',new PhoneNumberRule],
            'email' => ['required','unique:students','max:20']
        ];
    }
}