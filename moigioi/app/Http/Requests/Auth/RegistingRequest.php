<?php

namespace App\Http\Requests\Auth;


use App\Enums\UserRoleEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RegistingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
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
            'password'=>[
                'required',
                'string',
                'min:0',
                'max:255',
            ],
            'role'     => [
                'required',
                 Rule::in([
                    UserRoleEnum::APPLICANT,
                    UserRoleEnum::HR,
                 ])
            ],
        ];
    }
}
