<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\View\View;

class PortfolioSimple extends Controller
{
    public function show()
    {
			
			$portfolio = [
						['title' => 'Proyecto #1'],
						['title' => 'Proyecto #2'],
						['title' => 'Proyecto #3'],
						['title' => 'Proyecto #4'],
						['title' => 'Proyecto #5'],
						['title' => 'Proyecto #6']
				];
				
				return view('portfolio', compact('portfolio'));
			
    }
}
