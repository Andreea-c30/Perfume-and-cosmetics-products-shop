<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class ContactUsRequest extends FormRequest
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
            'name' => 'required|string',
           'email' => 'required|email',
           'Department' => [
               'nullable',
               'string',
              Rule::in(['Secretariat','Accountancy','Marketing','Social media',]),],
           'message' =>[
               'required',
               'string',
               'min:10',
               'max:1000'
           ],
           'readTerms'=>'required|boolean',
        ];
    }
}
