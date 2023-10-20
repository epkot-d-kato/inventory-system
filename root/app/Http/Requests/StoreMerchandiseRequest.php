<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMerchandiseRequest extends FormRequest
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
            'merchandise_number' => 'required',
            'merchandise_name' => 'required',
            'merchandise_classification' => 'required',
            'merchandise_price' => 'required',
            'merchandise_color' => 'required',
            'merchandise_size' => 'required',
            'merchandise_plastic' => 'required', // プラチェックボックスのルール
            'merchandise_plastic_notes' => 'required',
            'merchandise_paper' => 'required', // 紙チェックボックスのルール
            'merchandise_paper_notes' => 'required',
        ];
    }
}
