<?php

namespace App\Http\Requests;

use Ramsey\Uuid\Uuid;
use Illuminate\Foundation\Http\FormRequest;

class SurveyStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'name' => 'required|min:3|max:64'
        ];
    }

    public function validated() : array
    {
        $data = $this->validator->validated();

        $data['uuid'] = (string) Uuid::uuid4();
        $data['user_id'] = $this->user()->id;

        return $data;
    }
}
