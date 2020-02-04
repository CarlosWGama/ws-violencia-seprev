<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationApiRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'id_violation_types' => 'required',
                'id_author_reports' => 'required',
                'classificacao' => 'required',
                'identificacao' => 'required',
                'local_violacao' => 'required',
                'data_violacao' => 'required',
                'descricao_violacao' => 'required',
                'midia_anexada' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id_violation_types.required' => 'Campo Vazio ou Nulo'
        ];
    }
    

}
