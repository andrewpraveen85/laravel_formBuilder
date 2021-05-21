<?php

namespace Modules\Forms\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Forms;
use Illuminate\Support\Facades\Auth;

class FormsController extends Controller {

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index() {
        $user = Auth::user();
        $forms = Forms::latest()->where('user_id', $user->id)->paginate(5);

        return view('forms::index', compact('forms'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);

//        return view('forms::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create() {
        return view('forms::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request) {
        $request->validate([
            'form_code' => 'required',
        ]);

        Forms::create($request->all());

        return true;
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id) {
        $form = Forms::find($id);
        return view('forms::show', compact('form'));
    }

    public function read($id) {
        $form = Forms::find($id);
        return $form->form_code;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id) {
        $form = Forms::find($id);
        return view('forms::edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id) {
        $request->validate([
            'form_code' => 'required',
        ]);

        $form = Forms::find($id);
        $form->form_code =  $request->get('form_code');
        $form->save();
        return true;
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id) {
        $contact = Forms::find($id);
        $contact->delete();

        return redirect('/forms')->with('success', 'Contact deleted!');
    }

}
