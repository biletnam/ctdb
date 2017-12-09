<?php

namespace App\Http\Requests\Backend\Ctdb\Type;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ManageTypeRequest.
 */
class ManageTypeRequest extends FormRequest
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
