<?php

namespace App\Http\Requests\Backend\Ctdb\Licensor;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateLicensorRequest.
 */
class UpdateLicensorRequest extends FormRequest
{
    /**
     * Determine if the Licensor is authorized to make this request.
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
