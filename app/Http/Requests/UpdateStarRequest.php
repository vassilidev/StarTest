<?php

namespace App\Http\Requests;

use App\Services\StarService;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): true
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return StarService::getValidationRules();
    }
}
