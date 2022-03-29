<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;

class QuestionController extends Controller
{
    public function index($id)
    {
        $questions = Question::query()
            ->where(
                'quiz_id',
                $id
            )
            ->get()
        ;

        return view('questions.index', ['questions' => $questions]);
    }

    public function show($id, $question_id)
    {
        $question = Question::query()
            ->where(
                'quiz_id',
                $id
            )
            ->findOrFail($question_id)
        ;

        $quiz = Quiz::query()
            ->findOrFail($id)
        ;

        return view(
            'questions.show', compact('quiz', 'question')
        );
    }

    public function create($id)
    {
        return view('questions.create', ['id' => $id]);
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request, $id)
    {
        $this->validate($request, [
            'text' => 'required',
            'variant1' => 'required',
            'variant2' => 'required',
            'variant3' => 'required',
            'variant4' => 'required',
            'answer' => 'required',
        ]);

        Question::query()
            ->create(
                array_merge(
                    Arr::except($request->all(), '_token'),
                    [
                        'quiz_id' => $id
                    ],
                )
            )
        ;

        return redirect()
            ->route(
                'questions.index',
                [
                    'id' => $id
                ]
            )
        ;
    }
}
