<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class DashboardController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $taskCount = Task::count();
        // $sliderCount = Slider::count();
        // $reservations = Reservation::where('status', false)->get();
        // $contactCount = Contact::count();
        return view('admin.dashboard', compact('categoryCount', 'taskCount'));
    }
}

