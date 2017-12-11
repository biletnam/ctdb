<?php

namespace App\Http\Requests\Backend\Ctdb\Company;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateCompanyRequest.
 */
class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the Company is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required|max:191',
        ];
    }
}
