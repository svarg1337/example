<?php

namespace App\Http\Requests\Cars;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Save extends FormRequest
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
        $bodyTypes = config('app-car.body');
        //dd(array_keys($bodyTypes));

        return [
            'brand_id' => 'required|exists:brands,id',
            'model' => ['required', 'max:255'],  //'required|max:255|unique:cars',
            'price' => 'required|integer|multiple_of:1000',
            'body_type' => ['required', 'integer', Rule::in(array_keys($bodyTypes))],
            'vin' => [
                'required',
                'min:6',
                'max:14',
                Rule::unique('cars')->whereNull('deleted_at')->ignore($this->route('car'))
            ],
            'tags' => ['array'],
            'tags.*' => ['exists:tags,id']
        ];
    }

    public function attributes(): array
    {
        return [
            'brand' => 'марка',
            'model' => 'модель',
            'price' => 'цена',
        ];
    }
}
