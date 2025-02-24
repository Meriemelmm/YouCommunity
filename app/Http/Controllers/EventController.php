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
 use Illuminate\Validation\ValidationException;

 

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

   




     


public function store(Request $request)
{
   

   
   
 

   
    
    try {
        $validated = $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:250'],
          
           'lien' => 'nullable|string|max:255',

            'date_heure' => ['required', 'date'],
            'categorie' => ['required', 'in:sport,musique,éducation,autre'],
            'max_participants' => ['required', 'integer', 'min:1'],
        ]);
        // $lieu = isset($validated['lien']) ? $validated['lien'] : null;
     
    
 
        $event = Event::create([
            'titre' => $request->titre,
            'description' =>$request->description,
           
             'lien' => $request->lien,
            'date_heure' =>$request->date_heure,
            'categorie' => $request->categorie,
            'max_participants' => $request->max_participants,
            'user_id' => Auth::id(),
        ]);
     
     

        if ($event) {
             return redirect()->route('cree')->with('success', 'Événement créé avec succès ');
            
        } else {
            return redirect()->back()->with('error', 'Échec de l\'insertion ');
        } 

    } catch (ValidationException $e) {
        dd("erreur:", $e->errors()); 
    }
       
    
    
    

   
}
public function showEvents() {
    try {
        $events = Event::all(); 
        return view('liste', ['events' => $events]); 

    } catch (ValidationException $e) {
        dd("Erreur", $e->errors());
    }
}

public function showmyevents(){
    try {
        $userid = Auth::id();
        $events = Event::where('user_id', $userid)->get();
 
        return view('my_events', ['events' => $events]); 
    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Une erreur est survenue : ' . $e->getMessage()]);
    }
   

}


    

    /**
     * Display the specified resource.
     */
    public function show( $edit_id)

    { try{
        $event= Event::find($edit_id);
       
           return view('event_edit', compact('event'));

    }
        catch( ValidationException $e){
            return back()->withErrors(['error' => 'Une erreur est survenue : ' . $e->getMessage()]); 
        }
    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $event_id)

    {
        $validated = $request->validate([
            'titre' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'lieu' => 'nullable|string',
            'date_heure' => ['required', 'date'],
            'categorie' =>  ['required', 'in:sport,musique,éducation,autre'],
            'max_participants' => ['required', 'integer', 'min:1'],

        ]);
       
        
        
       $update= Event::where('id', $event_id)->update(['titre' => $request->titre,
            'description' =>$request->description,
           
             'lieu' => $request->lien,
            'date_heure' =>$request->date_heure,
            'categorie' => $request->categorie,
            'max_participants' => $request->max_participants,]);
         

          
            return redirect()->route('myEvents')->with('success', 'Événement update avec succès !');
       
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($remove_id)
{
    try {
        $event = Event::find($remove_id);

        if (!$event) {
            return back()->withErrors(['error' => 'Événement non trouvé.']);
        }

        $event->delete();

        return redirect()->route('myEvents')->with('success', 'Événement supprimé avec succès !');

    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Une erreur est survenue : ' . $e->getMessage()]);
    }
}

}
