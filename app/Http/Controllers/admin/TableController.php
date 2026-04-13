<?php

namespace App\Http\Controllers\admin;

use App\Models\Table;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    /**
     * Display a listing of the tables.
     */
    public function index(Request $request)
    {
        $query = Table::latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('name_kh', 'LIKE', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $tables = $query->paginate(10);

        return view('admin.tables.index', compact('tables'));
    }

    /**
     * Show the form for creating a new table.
     */
    public function create()
    {
        return view('admin.tables.create');
    }

    /**
     * Store a newly created table in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tables,name',
            'name_kh' => 'nullable|string|max:255',
            'capacity' => 'required|integer|min:1',
            'status' => 'required|in:available,occupied,reserved',
        ]);

        Table::create($request->all());

        return redirect()->route('tables.index')->with('success', 'Table created successfully!');
    }

    /**
     * Display the specified table.
     */
    public function show(Table $table)
    {
        return view('admin.tables.show', compact('table'));
    }

    /**
     * Show the form for editing the specified table.
     */
    public function edit(Table $table)
    {
        return view('admin.tables.edit', compact('table'));
    }

    /**
     * Update the specified table in storage.
     */
    public function update(Request $request, Table $table)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:tables,name,' . $table->id,
            'name_kh' => 'nullable|string|max:255',
            'capacity' => 'required|integer|min:1',
            'status' => 'required|in:available,occupied,reserved',
        ]);

        $table->update($request->all());

        return redirect()->route('tables.index')->with('success', 'Table updated successfully!');
    }

    /**
     * Remove the specified table from storage.
     */
    public function destroy(Table $table)
    {
        $table->delete();

        return redirect()->route('tables.index')->with('success', 'Table deleted successfully!');
    }
}
