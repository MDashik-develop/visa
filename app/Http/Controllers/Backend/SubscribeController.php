<?php

namespace App\Http\Controllers\Backend;

use App\Exports\SubscribersExport;
use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SubscribeController extends Controller
{
    //
    public function index()
    {
        $subscribers = Subscribe::all();
        return view('backend.subscribe.index', compact('subscribers'));
    }

    public function destroy($id)
    {
        $subscriber = Subscribe::findOrFail($id);
        $subscriber->delete();
        return redirect()->route('admin.subscribe')->with('success', 'Subscriber deleted successfully.');
    }
    
    public function export()
    {
        return Excel::download(new SubscribersExport, 'subscribers.xlsx');
    }

}