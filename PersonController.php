<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PersonImport;
use Maatwebsite\Excel\Facades\Excel;

class PersonController extends Controller
{
    public function index()
    {
        return view('person.index');
    }
    public function importExceldata(Request $request)
    {
        $request->validate([
            'import_file' => [
                'required',
                'file',

            ]
        ]);
        Excel::import(new PersonImport, $request->file('import_file'));
        return redirect()->back()->with('status', 'Excel file imported successfully.');
    }
}
