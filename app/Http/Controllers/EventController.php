<?php


 namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Event;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
 use Illuminate\Database\Eloquent\Model; 
 use Illuminate\Database\Eloquent\Factories\HasFactory;

 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    
    // public function store(Request $request)
    // {
    //     $request->validate(['titre'=>['required','string','max:225'],
    //     'description'=>['required','string','max:250'],
    //     'lien'=>['required','string','max:225'],
    //     'date_heure'=>['required','date'],
    //     'categorie'=>['required','in:sport,musique,éducation,autre'],
    //     'max_participants'=>['required','integer','min:1'],
       
    // ]);
    // dd('hello');
    // $event= Event::create([
    //     'titre'=>$request->titre,
    //     'description'=>$request->description,
    //     'lien'=>$request->lien,
    //     'date_heure'=>$request->date_heure,
    //     'categorie'=>$request->categorie,
    //     'max_participants'=>$request->max_participants,
    //     'user_id'=>$request->user_id

    // ]);
    // return redirect()->route('/')->with('success', 'Événement créé avec succès.');
       
    // }
    public function store(Request $request)
{
    // Validation des données
    $validated = $request->validate([
        'titre' => ['required', 'string', 'max:225'],
        'description' => ['required', 'string', 'max:250'],
        'lien' => ['required', 'string', 'max:225'],
        'date_heure' => ['required', 'date'],
        'categorie' => ['required', 'in:sport,musique,éducation,autre'],
        'max_participants' => ['required', 'integer', 'min:1'],
        // Pas besoin de valider `user_id` si tu utilises Auth::id()
    ]);

    // Récupère l'ID de l'utilisateur authentifié
    $user_id = Auth::id();

    // Crée l'événement
    $event = Event::create([
        'titre' => $request->titre,
        'description' => $request->description,
        'lien' => $request->lien,
        'date_heure' => $request->date_heure,
        'categorie' => $request->categorie,
        'max_participants' => $request->max_participants,
        'user_id' => $user_id  // Utilisation de Auth::id() pour l'ID de l'utilisateur
    ]);

    // Redirige avec un message de succès
    return redirect()->route('/')->with('success', 'Événement créé avec succès.');
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
