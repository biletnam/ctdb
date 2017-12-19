<?php

namespace App\Http\Requests\Backend\Ctdb\Venue;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateVenueRequest.
 */
class UpdateVenueRequest extends FormRequest
{
    /**
     * Determine if the Venue is authorized to make this request.
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
            'address1' => 'required|max:191',
            'city'     => 'required|max:191',
            'state'    => 'required|max:191',
            'zip'      => 'required|max:191',
            'phone'    => 'nullable|phone:US',
        ];
    }
}
