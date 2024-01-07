<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function getCars()
    {
        $cars = [
            [
                'name' => "VW Golf 6",
                'price' => "37",
                'img' => 'nuoroda',
                'model' => "Golf 6",
                'mark' => "Volkswagen",
                'year' => "2008",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Diesel",

            ],
            [

                'name' => "Audi A1 S-Line",
                'price' => "45",
                'img' => "nuoroda",
                'model' => "Audi",
                'mark' => "A1",
                'year' => "2012",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Gasoline",
            ],
            [

                'name' => "Toyota Camry",
                'price' => "30",
                'img' => "nuoroda",
                'model' => "Camry",
                'mark' => "Toyota",
                'year' => "2006",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Automatic",
                'fuel' => "Hybrid",
            ],
            [

                'name' => "BMW 320 ModernLine",
                'price' => "35",
                'img' => "nuoroda",
                'model' => "320",
                'mark' => "BMW",
                'year' => "2012",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Diesel",
            ],
            [

                'name' => "Mercedes-Benz GLK",
                'price' => "50",
                'img' => "nuoroda",
                'model' => "Benz GLK",
                'mark' => "Mercedes",
                'year' => "2006",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Manual",
                'fuel' => "Diesel",
            ],
            [

                'name' => "VW Passat CC",
                'price' => "25",
                'img' => "nuoroda",
                'model' => "Passat CC",
                'mark' => "Volkswagen",
                ' year' => "2008",
                'doors' => "4/5",
                'air' => "Yes",
                'transmission' => "Automatic",
                'fuel' => "Gasoline",
            ],
        ];

        return view(
            'cars',
            ['masinos' => $cars]
        );
    }
}
