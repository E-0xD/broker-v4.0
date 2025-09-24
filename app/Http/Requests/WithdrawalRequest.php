<?php

namespace App\Http\Requests;

use App\Enums\WithdrawalOption;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Enum;

class WithdrawalRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'amount' => [
                'required',
                'numeric',
                'min:1',
                'max:' . Auth::user()->balance, 
            ],
            'crypto' => [
                'required',
                new Enum(WithdrawalOption::class), 
            ],
            'address' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'amount.required' => 'Please enter the withdrawal amount.',
            'amount.numeric' => 'The withdrawal amount must be a valid number.',
            'amount.min' => 'The minimum withdrawal amount is $1.',
            'amount.max' => 'The withdrawal amount cannot exceed your current balance of $' . Auth::user()->balance . '.',
            'crypto.required' => 'Please select a cryptocurrency for withdrawal.',
            'crypto.enum' => 'The selected cryptocurrency is invalid. Please choose a valid option.',
            'address.required' => 'Please provide a withdrawal address.',
            'address.string' => 'The withdrawal address must be a valid string.',
            'address.max' => 'The withdrawal address cannot exceed 255 characters.',
        ];
    }
}