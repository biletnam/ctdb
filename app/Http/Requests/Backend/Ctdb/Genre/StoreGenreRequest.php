<?php

namespace App\Http\Requests\Backend\Ctdb\Genre;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreGenreRequest.
 */
class StoreGenreRequest extends FormRequest
{
    /**
     * Determine if the Genre is authorized to make this request.
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
            'name'     => 'required|max:191',
        ];
    }
}
