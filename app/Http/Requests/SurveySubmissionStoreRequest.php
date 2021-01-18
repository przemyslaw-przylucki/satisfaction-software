<?php

namespace App\Http\Requests;

use Browser;
use Illuminate\Foundation\Http\FormRequest;

class SurveySubmissionStoreRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'rate' => 'required|in:0,1,2,3,4',
            'additional' => 'nullable|array'
        ];
    }

    public function validated() : array
    {
        $data = $this->validator->validated();

        $data['url'] = $this->headers->get('origin', 'https://google.com');
        $data['browser_name'] = Browser::browserName();
        $data['operating_system'] = Browser::platformName();
        $data['ip'] = $this->getClientIp();

        return $data;
    }
}
