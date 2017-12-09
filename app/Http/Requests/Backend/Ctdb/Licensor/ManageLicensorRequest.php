<?php

namespace App\Http\Requests\Backend\Ctdb\Licensor;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageLicensorRequest.
 */
class ManageLicensorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            //
        ];
    }
}
