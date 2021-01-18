<?php

namespace App\Http\Controllers;

use Browser;
use App\Models\Survey;
use App\Http\Requests\SurveySubmissionStoreRequest;

class SurveySubmissionController
{
    public function __invoke(SurveySubmissionStoreRequest $request, string $uuid)
    {
        $survey = Survey::whereUuid($uuid)->first();

        if (! $survey) {
            return response()->json([
                'message' => 'No survey was found'
            ]);
        }

        $survey->submissions()->create(
            $request->validated()
        );

        return response()->json([
            'message' => 'Thank you for your submission'
        ], 201);
    }
}
