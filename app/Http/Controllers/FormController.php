<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Requests\StoreForm;
use App\Mail\MessageReceived;
use App\Mail\NewMessage;
use App\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class FormController extends Controller
{
    protected $model;

    public function __construct() {
        $this->model = new Form();
    }

    /**
     * returns view of all form entries
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function index(Request $request) {
        return view('Forms.index', [
            'models' => $this->model->getAll(),
        ]);
    }

    /**
     * this is the submission form
     *
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function create() {
        return view('Forms.create');
    }

    /**
     * this stores and saves the data entry on the submission form
     * and submits to database
     *
     * @param StoreForm $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreForm $request) {
        $validated = $request->validated();
        $this->model->fill($validated);
        $this->model->save();
        Mail::to(Form::getSender())->send(new NewMessage());
        Mail::to(Owner::getAll())->send(new MessageReceived());
        return redirect('/');
    }
}
