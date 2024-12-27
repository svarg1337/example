<?php

namespace App\Http\Requests\Auth\Sessions;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Store extends FormRequest
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
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ];
    }

    public function attributes(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Пароль',
        ];
    }

    public function tryAuthUser() {
        if (! Auth::attempt($this->validated(), $this->boolean('remember'))) {
            throw ValidationException::withMessages(['email' => trans('auth.failed')]);
        }
    }
}
