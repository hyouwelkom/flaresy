<?php


namespace App\Http\Controllers;


use App\Categorie;
use App\Fichier;
use App\Mail\Contact;
use App\Niveau;
use App\Production;
use App\Projet;
use App\Reseau;
use App\Service;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class GlobalController extends Controller
{

    public function index() {
        return view('home', [
            'id_page' => 0,
            'users' => User::with('reseaux')->administrateurs()->get(),
            'services' => Service::all(),
            'categories' => Categorie::all(),
            'productions' => Production::with('categories')->limit(8)->get()
        ]);
    }

    public function nosServices() {
        return view('nos-services', [
            'id_page' => 1,
            'services' => Service::all()
        ]);
    }

    public function nosProds() {
        return view('nos-prods', [
            'id_page' => 2,
            'categories' => Categorie::all(),
            'productions' => Production::with('categories')->get()
        ]);
    }

    public function lequipe() {
        return view('l-equipe', [
            'id_page' => 3,
            'users' => User::with('reseaux')->administrateurs()->get()
        ]);
    }

    public function contact() {
        return view('contact', [
            'id_page' => 4
        ]);
    }

    public function gestionDeProjet()
    {
        return view('gestion-de-projet', [
            'projets' => Projet::where('user_id', Auth::user()->id)->with('fichiers')->get()
        ]);
    }

    public function administration()
    {
        if(Auth::user()->isAdmin()) {
            return view('administration', [
                'id_page' => 5,
                'users' => User::with('niveau')->get(),
                'niveaux' => Niveau::all(),
                'services' => Service::all(),
                'reseaux' => Reseau::all(),
                'categories' => Categorie::all(),
                'productions' => Production::all(),
                'clients' => User::clients()->get(),
                'projets' => Projet::with('client')->get()

            ]);
        } else {
            abort(404);
        }
    }

    public function mentionsLegales()
    {
        return view('mentions-legales');
    }

    public function mailing(Request $request)
    {
        Mail::to('contact@flaresy.fr')
            ->send(new Contact($request->input('name'), $request->input('email'), $request->input('tel'), $request->input('msg')));

        return redirect()->back()->with('success','Message reçu avec succès !');


    }

    public function addProjetToClient(Request $request)
    {
        $p = new Projet();

        $p->nom = $request->input('nom');
        $p->user_id = $request->input('user_id');
        $p->cloture = false;

        $p->save();

        if($p->save()) {
            return redirect()->route('administration')->with('success','Projet créé avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la création du projet !');
        }
    }

    public function addFichierToProjet(Request $request)
    {
        $f = new Fichier();

        $f->nom = $request->input('nom');
        $f->nom_fichier = Str::slug($f->nom).'_'.time().'.'.$request->file('fichier')->getClientOriginalExtension();
        $f->projet_id = $request->input('projet_id');

        $file = $request->file('fichier')->storeAs(
            'fichiers-client/'.Projet::find($request->input('projet_id'))->client->id, Str::slug($f->nom).'_'.time().'.'.$request->file('fichier')->getClientOriginalExtension(), 'public'
        );

        if($f->save()) {
            return redirect()->route('administration')->with('success','Fichier ajouté avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de l\'ajout du fichier !');
        }
    }

    public function createCategorie(Request $request)
    {
        $c = new Categorie();

        $c->libelle = $request->input('nom');
        $c->nom = Str::slug($c->libelle);

        if($c->save()) {
            return redirect()->route('administration')->with('success','Catégorie créée avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la création de la catégorie !');
        }
    }

    public function createReseau(Request $request)
    {
        $r = new Reseau();

        $r->nom = $request->input('nom');
        $r->icon =$request->input('icon');

        if($r->save()) {
            return redirect()->route('administration')->with('success','Réseau social ajouté avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de l\'ajout du réseau social !');
        }
    }

    public function destroyReseau($id)
    {
        $r = Reseau::find($id);

        if($r->delete()) {
            return redirect()->route('administration')->with('success','Réseau social supprimé avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la suppression du réseau social !');
        }
    }

    public function destroyUser($id)
    {
        $u = User::find($id);

        if($u->delete()) {
            return redirect()->route('administration')->with('success','Utilisateur supprimé avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la suppression de l\'utilisateur !');
        }
    }

    public function destroyService($id)
    {
        $s = Service::find($id);

        if($s->delete()) {
            return redirect()->route('administration')->with('success','Service supprimé avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la suppression du service !');
        }
    }

    public function destroyProduction($id)
    {
        $p = Production::find($id);

        if($p->delete()) {
            return redirect()->route('administration')->with('success','Production supprimée avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la suppression de la production !');
        }
    }

    public function destroyCategorie($id)
    {
        $c = Categorie::find($id);

        if($c->delete()) {
            return redirect()->route('administration')->with('success','Categorie supprimée avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la suppression de la catégorie !');
        }
    }

    public function createProduction(Request $request)
    {
        $p = new Production();

        $p->nom_projet = $request->input('nom_projet');
        $p->nom_client = $request->input('nom_client');
        $p->nom_img = Str::slug($p->nom_projet).'_'.Str::slug($p->nom_client).'.'.$request->file('nom_img')->getClientOriginalExtension();

        $p->save();

        foreach($request->input('categories') as $id_cat) {
            $p->categories()->attach($id_cat);
        }

        $path = $request->file('nom_img')->storeAs(
            'public/photos/nos-prods/', Str::slug($p->nom_projet).'_'.Str::slug($p->nom_client).'.'.$request->file('nom_img')->getClientOriginalExtension()
        );

        if($p->save()) {
            return redirect()->route('administration')->with('success','Production enregistrée avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de l\'enregistrement de la production !');
        }

    }

    public function createService(Request $request)
    {
        $s = new Service();

        $s->nom = $request->input('nom');
        $s->descriptif = $request->input('descriptif');
        $s->img_nom = Str::slug($s->nom).'.'.$request->file('img_nom')->getClientOriginalExtension();
        $s->img_nom_home = Str::slug($s->nom).'_black.'.$request->file('img_nom_home')->getClientOriginalExtension();

        $path = $request->file('img_nom')->storeAs(
            'public/photos/nos-services/', Str::slug($s->nom).'.'.$request->file('img_nom')->getClientOriginalExtension()
        );

        $path = $request->file('img_nom_home')->storeAs(
            'public/photos/nos-services/', Str::slug($s->nom).'_black.'.$request->file('img_nom_home')->getClientOriginalExtension()
        );

        if($s->save()) {
            return redirect()->route('administration')->with('success','Service créé avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la création du service !');
        }
    }

    public function createUser(Request $request)
    {
        $u = new User();

        $u->username = $request->input('username');
        $u->email = $request->input('email');
        $u->nom = $request->input('nom');
        $u->prenom = $request->input('prenom');
        $u->password = bcrypt($request->input('password'));
        $u->niveau_id = $request->input('niveau');

        if($u->isAdmin()) {
            $u->role = $request->input('role');
            $u->poste = $request->input('poste');
            $u->save();
            $path = $request->file('img_membre')->storeAs(
                'public/photos/users/', $u->id.'.jpg'
            );
        } else {
            $u->role = 'CLIENT';
            $u->poste = 'CLIENT';
        }

        if($u->save()) {
            foreach(Reseau::all() as $reseau) {
                if($request->input(Str::slug($reseau->nom)) != '') {
                    $u->reseaux()->attach($reseau->id, [
                        'link' => $request->input(Str::slug($reseau->nom))
                    ]);
                }
            }
            return redirect()->route('administration')->with('success','Utilisateur créé avec succès !');
        } else {
            return redirect()->route('administration')->with('error','Erreur lors de la création de l\'utilisateur !');
        }
    }

}
