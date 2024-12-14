<?php

namespace App\Http\Requests\Commnets;

use App\Models\Article;
use App\Models\Car;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class CommentsRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

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
            'body' => ['bail', 'required'],
            'commentable_type' => ['bail', 'required', $this->commentableTypeRule()],
            'commentable_id' => ['bail', 'required', $this->commentableIdRule()],
        ];
    }

    protected function commentableTypeRule()
    {
        return Rule::in([Car::class, Article::class]);
    }

    protected function commentableIdRule()
    {
        return Rule::exists($this->commentable_type, 'id');
    }
}
