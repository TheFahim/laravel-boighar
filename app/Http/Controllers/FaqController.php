<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use Illuminate\Database\QueryException;

class FaqController extends Controller
{
    public function store(FaqRequest $request, Faq $faq)
    {
        try {

            $faq->update([
                'title' => $request->name,
                'email' => $request->email,
                'comment' => $request->comment
            ]);

            return redirect()->route('faq')->withMessage('Your Question Submitted');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
}
