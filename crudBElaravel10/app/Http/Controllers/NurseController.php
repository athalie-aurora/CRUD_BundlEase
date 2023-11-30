<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nurse;
use Yajra\DataTables\DataTables;

class NurseController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Nurse::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="'.route('nurse.edit', $row->id).'" class="edit btn btn-primary btn-sm">Edit</a>';
                    $btn .= ' <a href="javascript:void(0);" class="delete btn btn-danger btn-sm" onclick="deleteNurse('.$row->id.')">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('nurse.index');
    }

    public function create()
    {
        return view('nurse.create');
    }

    public function store(Request $request)
    {
        Nurse::create($request->all());

        return redirect()->route('nurse.index')
            ->with('success', 'Nurse created successfully');
    }

    public function edit($id)
    {
        $nurse = Nurse::find($id);
        return view('nurse.edit', compact('nurse'));
    }

    public function update(Request $request, $id)
    {
        Nurse::find($id)->update($request->all());

        return redirect()->route('nurse.index')
            ->with('success', 'Nurse updated successfully');
    }

    public function destroy($id)
    {
        Nurse::find($id)->delete();

        return response()->json(['success'=>'Nurse deleted successfully']);
    }
}
