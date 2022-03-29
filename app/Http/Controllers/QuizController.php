<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::query()
            ->get()
        ;

        return view('quizzes.index', ['quizzes' => $quizzes]);
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $quiz = Quiz::query()->create(
            [
                'name' => $request->get('name')
            ]
        );

        return redirect()
            ->route(
                'questions.create',
                [
                    'id' => data_get($quiz, 'id')
                ]
            )
        ;
//        ->with(
//            'success', 'CREATED SUCCESSFULLY'
//        )
    }
}
