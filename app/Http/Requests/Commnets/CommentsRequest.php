<?php

namespace App\Http\Requests\Commnets;

use App\Models\Article;
use App\Models\Car;
use App\Models\Comment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Fluent;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class CommentsRequest extends FormRequest
{
    /* Тут происходит предварительная валидация поля commentable_type.
       Она нужна для потому что значение этого поля используется
       в правиле валидации поля commentable_id в качестве указателя на таблицу в бд.
       commentable_type должно содержать корректное имя модели. 
       Используется белый список разрешенных моделей.
       Он хранися в константе Comment::COMMENTABLE_MODELS
    */
    public function prepareForValidation(): void
    {
        if (! in_array($this->commentable_type, Comment::COMMENTABLE_MODELS)) {
            throw ValidationException::withMessages(
                ['commentable_id' => trans('validation.in', ['attribute' => 'commentable_id'])]
            );
        }
    }

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
            'body' => ['required'],
            // Rule::in тут не обязателен, тк идентичен той проверке которая уже была в prepareForValidation()
            'commentable_type' => ['required', Rule::in(Comment::COMMENTABLE_MODELS)], 
            'commentable_id' => ['required', Rule::exists($this->commentable_type, 'id')],
        ];
    }

    public function passedValidation(): void
    {
        // dd($this->validator);
    }

    // public function withValidator(Validator $validator)
    // {
    //     $validator->sometimes(
    //         'commentable_id',
    //         $this->commentableIdRules(),
    //         fn(Fluent $input) => in_array($input->commentable_type, Comment::COMMENTABLE_MODELS)
    //     );
    // }

    // public function after(): array
    // {
    //     return [
    //         function (Validator $validator) {

    //         }
    //     ];
    // }

 
}
