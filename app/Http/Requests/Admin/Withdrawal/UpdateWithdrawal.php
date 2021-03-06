<?php

namespace App\Http\Requests\Admin\Withdrawal;

use Brackets\Translatable\TranslatableFormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateWithdrawal extends TranslatableFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.withdrawal.edit', $this->withdrawal);
    }

/**
     * Get the validation rules that apply to the requests untranslatable fields.
     *
     * @return array
     */
    public function untranslatableRules(): array {
        return [
            'price' => ['sometimes', 'numeric'],
            'in_out' => ['sometimes', 'boolean'],
            'enabled' => ['sometimes', 'boolean'],
            'from_id' => ['sometimes', 'integer'],
            'to_id' => ['sometimes', 'integer'],
            'way_id' => ['sometimes', 'integer'],
            

        ];
    }

    /**
     * Get the validation rules that apply to the requests translatable fields.
     *
     * @return array
     */
    public function translatableRules($locale): array {
        return [
            'status' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
