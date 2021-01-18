<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use App\Http\Requests\SurveyStoreRequest;
use Illuminate\Contracts\Foundation\Application;

class SurveyController
{
    /**
     * @param Request $request
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function index(Request $request)
    {
        $surveys = $request->user()->team->surveys()->withCount('submissions')->get();

        return view('surveys.index', [
            'surveys' => $surveys
        ]);
    }

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function create()
    {
        return view('surveys.create');
    }

    public function store(SurveyStoreRequest $request) : RedirectResponse
    {
        $request->user()->team->surveys()->create(
            $request->validated()
        );

        return redirect()->route('surveys.index');
    }

    /**
     * @param Survey $survey
     *
     * @return Application|Factory|\Illuminate\Contracts\View\View|View
     */
    public function details(Survey $survey)
    {
        return view('surveys.details', [
            'survey' => $survey
        ]);
    }
}
