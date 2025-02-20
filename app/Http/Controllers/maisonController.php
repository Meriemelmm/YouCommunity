<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class maisonController extends Controller
{
    public function index(Request $request, $name)
    {
        dump($name); // Vérifie si la valeur est bien reçue
        echo " meryseyou";
        
        return view('welcome', [
            'added' => 'ahmed',
            'nom' => $name // Assure-toi que c'est bien la même clé que dans la vue
        ]);
    }
}

/*






dans rterminal on fais php artisan
 make controller nameController.php

*/
/* donc request recupere value dans url  ou une ofrmulaire  */
