<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
   
    public function index()
        {
            $notes = Note::latest()->paginate(5);
            return view ('notes.index',compact('notes'))
            ->with('i',(request()->input('page',1)-1)*5);
        }

    public function create()
        { 
            return view('notes.create');
        }

    public function store(Request $request)
        {
            $request->validate([
            'notes_title' => 'required',
            'notes_entries' => 'required',
            ]);

            Note::create($request->all());

            return redirect()->route('notes.index')
            ->with('success','Notes successfully created.');
        }


//  DISPLAY NOTE
    public function show (Note $note)
        {
            return view('notes.show',compact('note'));
        }


//  EDIT NOTE
    public function edit(Note $note)
        {
            return view('notes.edit',compact('note'));
        }


//  UPDATE NOTICE NOTE
    public function update(Request $request, Note $note)
        {
            $request->validate([
            ]);

            $note->update($request->all());

            return redirect()->route('notes.index')
            ->with('success','Notes updated successfully.');
        }

// DELETE NOTE 
    public function destroy(Note $note)
        {
            $note->delete();
            return redirect()->route('notes.index')
            ->with('success','Notes deleted successfully.');
        }
}
