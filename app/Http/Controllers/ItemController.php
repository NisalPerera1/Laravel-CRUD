<?php

namespace App\Http\Controllers;

use App\Models\ItemModel;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ItemController extends Controller
{
    public function index()
    {
      //item data  fetched from model into data variable
        $data = ItemModel::get();
        //sent fetched data into view  using data object keyword
      return view('Items.Index', compact('data'));
      
      
    }

    public function create()
    {
        return view ('Items.Create');
    }

    public function store(Request $request)
{
    // Validate the input fields
    $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    // Create a new item record in the database
    ItemModel::create($request->all());

    // Redirect to the index page with a success message
    return redirect()->route('items.index')->with('success', 'Item added successfully.');
}


    public function show(ItemModel $itemModel)
    {
        //
    }

    public function edit($id)
    {
        $item = ItemModel::find($id);
        return view('Items.Edit', compact('item'));

    }

    
    public function update(Request $request, ItemModel $item)
    {
        //$request new value and $item is old record
        $item->update($request->all());
        return redirect()->route('items.index')->with('success', 'Item edited successfully.');
    }    

    public function destroy(ItemModel $item)
    {
        $item->delete();
        return redirect()->route('items.index')->with('success', 'Item Deleted successfully.');

    }
}
