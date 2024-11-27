<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
class ExampleController extends Controller
{
    public function adminDashboard()
    {
        if (Gate::denies('admin-only')) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Admin-specific functionality
        return response()->json(['message' => 'Welcome to the Admin Dashboard']);
    }

    public function staffDashboard()
    {
        if (Gate::denies('staff-only')) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Staff-specific functionality
        return response()->json(['message' => 'Welcome to the Staff Dashboard']);
    }

    public function studentDashboard()
    {
        if (Gate::denies('student-only')) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Student-specific functionality
        return response()->json(['message' => 'Welcome to the Student Dashboard']);
    }

}
