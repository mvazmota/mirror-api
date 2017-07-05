<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShoppingList;

class Lists extends Controller
{
    public function getLists()
    {
        $lists = ShoppingList::with('products')
            ->get();

        $response = response($lists)
            ->header('Content-Type', 'application/json');

        return $response;
    }

    public function createLists(Request $request)
    {
        $list = new ShoppingList;

        $list->name = $request->name;
        $list->icon = $request->icon;

        $list->save();

        $response = response($list)
            ->header('Content-Type', 'application/json');

        return $response;
    }
}
