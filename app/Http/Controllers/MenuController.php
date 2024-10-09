<?php

// // app/Http/Controllers/MenuController.php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class MenuController extends Controller
// {
//     public function index()
//     {
//         // You can fetch the menu items from the database and pass them to the view
//         return view('menu');
//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Display the menu items
    public function menu()
    {
        // Example data, replace with actual data from your database
        $menuItems = [
            ['id' => 1, 'name' => 'Burger', 'price' => 100, 'image' => 'images/burger.jpg', 'rating' => 4.5],
            ['id' => 2, 'name' => 'Pizza', 'price' => 200, 'image' => 'images/pizza.jpg', 'rating' => 4.8],
            ['id' => 3, 'name' => 'Pasta', 'price' => 150, 'image' => 'images/pasta.jpg', 'rating' => 4.2],
        ];

        // Return the view with the menu items
        return view('menu', ['menuItems' => $menuItems]);
    }
}
