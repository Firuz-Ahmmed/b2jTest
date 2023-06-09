<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class searchController extends Controller
{
    public function search()
    {
        //dd('hi');
        $data = DB::table('m_users')->get();
        return view('search', ['data' => $data]);
    }
    public function searchData(Request $request)
    {
        $search = $request->input('searchInputValue');
        if ($request->has('search'))  {
            $inputValue = $search;
                $data = DB::table('m_users')->where('user_id', 'like', '%' . $search . '%')
                    ->orWhere('name', 'like', '%' . $search . '%')
                    ->orWhere('age', 'like', '%' . $search . '%')
                    ->orWhere('gender', 'like', '%' . $search . '%')
                    ->get();
                    //dd($searchData);
                return view('search', compact('inputValue', 'data'));
            } elseif ($request->has('reset')) {
                $inputValue = null;
                $data = DB::table('m_users')->get();
                return view('search', compact('inputValue', 'data'));
            }
        }
    }
