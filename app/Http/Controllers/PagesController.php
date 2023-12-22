<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function employeesList()
    {
        return view('employee-list')
            ->with('employee1', ['name' => 'Medhin Mulat',
                'role' => 'web developer',
                'company' => 'ETH Defence',
                'quote' => 'pause and ponder in the silence'],)

            -> with('employee2',['name' => 'tesfa tolosa',
                'role' => 'web developer',
                'company' => 'ETH Defence',
                'quote' => 'pause and ponder in the silence'],)

            -> with('employee3',['name' => 'bruk uddo',
                'role' => 'web developer',
                'company' => 'ETH Defence',
                'quote' => 'pause and ponder in the silence'],);

    }
    
}


