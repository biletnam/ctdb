<?php

namespace App\Http\Requests\Backend\Ctdb\Type;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateTypeRequest.
 */
class UpdateTypeRequest extends FormRequest
{
    /**
     * Determine if the Type is authorized to make this request.
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
