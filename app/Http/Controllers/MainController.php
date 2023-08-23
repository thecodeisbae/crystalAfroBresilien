<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    function login()
    {
        return view('login');
    }
    function forget()
    {
        return view('forget');
    }

    function dashboard()
    {
        return view('dashboard');
    }

    function addPaper()
    {
        return view('addPaper');
    }

    function getDepartement()
    {
        $departements = \DB::select('SELECT * FROM departement',[]);
        echo json_encode($departements);
    }

    function getCommune()
    {
        $dep = request('data');
        $communes = \DB::select('SELECT * FROM commune where Codedepartement = ?',[$dep]);
        echo json_encode($communes);
    }

    function getArrondissement()
    {
        $com = request('data');
        $arrondissements = \DB::select('SELECT * FROM arrondissement where Codecommune  = ?',[$com]);
        echo json_encode($arrondissements);
    }

    function displayAll()
    {
        $fiches = \DB::select('select * from identification where Modisuppr = ?', [0]);
        return view('displayAll',compact('fiches'));
    }

    function getFichesAjax()
    {
        $query = 'SELECT * FROM identification ident ';

        $query .= ' INNER JOIN localisation loc ON loc.Codelocal  = ident.Codelocal
                    INNER JOIN arrondissement arr ON arr.Codearrondis = loc.Codearrondis
                    INNER JOIN commune com ON com.Codecommune  = arr.Codecommune
                    INNER JOIN departement dep ON dep.Codecommune  = arr.Codecommune
                    INNER JOIN propriete prop ON ident.Codepropri = prop.Codepropri
                    INNER JOIN qualification qual ON ident.Codequalif  = qual.Codequalif
                    INNER JOIN conservation cons ON cons.Codeconserv  = ident.Codeconserv
                    INNER JOIN protection prot ON prot.Codeprotec   = ident.Codeprotec
                    LEFT JOIN coordonnees coor ON coor.Codelocal = loc.Codelocal
            ';

        $whereRequest = '';

        if(request('departement'))
        {
            $whereRequest .= ' AND dep.Codedepartement = "'.request('departement').'"';
        }

        if(request('commune'))
        {
            $whereRequest .= ' AND com.Codecommune  = "'.request('commune').'"';
        }

        if(request('arrondissement'))
        {
            $whereRequest .= ' AND arr.Codearrondis   = "'.request('arrondissement').'"';
        }

        if(request('quartier'))
        {
            $whereRequest .= ' AND loc.Localite  LIKE "%'.request('quartier').'%"';
        }

        if(request('longitude'))
        {
            $whereRequest .= ' AND coor.longitude  = '.request('longitude');
        }

        if(request('latitude'))
        {
            $whereRequest .= ' AND coor.latitude  = '.request('latitude');
        }

        if(request('proppub'))
        {
            $query .= ' LEFT JOIN proprietepub proppub ON proppub.Codepropri = prop.Codepropri ';
            $whereRequest .= ' AND proppub.'.request('proppub').' = 1';
        }

        if(request('proppriv'))
        {
            $query .= ' LEFT JOIN proprietepriv proppriv ON proppriv.Codepropri = prop.Codepropri ';
            $whereRequest .= ' AND proppriv.'.request('proppriv').' = 1';
        }

        if(request('bientype'))
        {

            switch (request('bientype')) {
                case 'Bien immeuble':
                    $query .= ' LEFT JOIN bienimmeuble bienimm ON bienimm.Codequalif  = qual.Codequalif  ';
                    $whereRequest .= ' AND bienimm.'.request('bienimmeuble').' = 1';
                    break;

                case 'Biens meubles associés':
                    $query .= ' LEFT JOIN bienmeuble bienmeu ON bienmeu.Codequalif  = qual.Codequalif  ';
                    $whereRequest .= ' AND bienmeu.Cochebienmeuble = 1';
                    break;

                case 'Biens immatériels associés':
                    $query .= ' LEFT JOIN bienimmateriel bienima ON bienima.Codequalif  = qual.Codequalif  ';
                    $whereRequest .= ' AND bienima.Cochebienimmat = 1';
                    break;
            }

        }

        if(request('etatgene'))
        {
            $query .= ' LEFT JOIN etatgeneral etatgene ON etatgene.Codeconserv  = cons.Codeconserv  ';
            $whereRequest .= ' AND etatgene.'.request('etatgene').' = 1';
        }

        if(request('modif'))
        {
            $query .= ' LEFT JOIN etatmodification etatmodif ON etatmodif.Codeconserv  = cons.Codeconserv  ';
            $whereRequest .= ' AND etatmodif.'.request('modif').' = 1';
        }

        if(request('occup'))
        {
            $query .= ' LEFT JOIN etatoccupation etatoccup ON etatoccup.Codeconserv  = cons.Codeconserv  ';
            $whereRequest .= ' AND etatoccup.'.request('occup').' = 1';
        }

        if(request('protact'))
        {
            $query .= ' LEFT JOIN protectionactuelle protact ON protact.Codeprotec  = prot.Codeprotec  ';
            $whereRequest .= ' AND protact.'.request('protact').' = 1';
        }

        if(request('protsug'))
        {
            $query .= ' LEFT JOIN echelleprotectsuggeree echprotsug ON echprotsug.Codeprotec  = prot.Codeprotec  ';
            $whereRequest .= ' AND echprotsug.'.request('protsug').' = 1';
        }

        if(request('classesug'))
        {
            $query .= ' LEFT JOIN echelleclasssugeree echclassesug ON echclassesug.Codeprotec  = prot.Codeprotec  ';
            $whereRequest .= ' AND echclassesug.'.request('classesug').' = 1';
        }

        $results = \DB::select($query.' WHERE 1 '.$whereRequest,[]);
        echo json_encode($results);

    }

    function savePaper()
    {
        // dd(request());
        try
        {
            \DB::beginTransaction();

            //Localisation
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM localisation where CodeLocal = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO localisation (CodeLocal,Localite,Adresse,Codearrondis) VALUES (?,?,?,?)',[$code,request('quartier'),request('adresse'),request('arrondissement')]);
            $localisation = $code;

            //Coordonnees
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM coordonnees where Codecoord  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO coordonnees (Codecoord,Latitude,Longitude,Codelocal ) VALUES (?,?,?,?)',[$code,request('latitude'),request('longitude'),$localisation]);
            $coordonnees = $code;

            //Qualification
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM qualification where Codequalif = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO qualification (Codequalif) VALUES (?)',[$code]);
            $qualification = $code;
            switch (request('bientype')) {
                case 'Bien immeuble':
                    do
                    {
                        $code = random_int(10000001, 99999999);
                        $valid = false;
                        $data = \DB::select('SELECT * FROM bienimmeuble where Codebienimmeuble = ?',[$code]);
                    }
                    while ($data);
                    \DB::insert('INSERT INTO bienimmeuble (Codebienimmeuble,'.request('bienimmeuble').',Codequalif) VALUES (?,?,?)',[$code,1,$qualification]);
                    break;

                case 'Biens meubles associés':
                    do
                    {
                        $code = random_int(10000001, 99999999);
                        $valid = false;
                        $data = \DB::select('SELECT * FROM bienmeuble where Codebienmeuble = ?',[$code]);
                    }
                    while ($data);
                    \DB::insert('INSERT INTO bienmeuble (Codebienmeuble,Cochebienmeuble,Descriptionbienmeuble,Codequalif) VALUES (?,?,?,?)',[$code,1,request('bienmeubleassocieDescription'),$qualification]);
                    break;

                case 'Biens immatériels associés':
                    do
                    {
                        $code = random_int(10000001, 99999999);
                        $valid = false;
                        $data = \DB::select('SELECT * FROM bienimmateriel where Codebienimmat = ?',[$code]);
                    }
                    while ($data);
                    \DB::insert('INSERT INTO bienimmateriel (Codebienimmat,Cochebienimmat,Descriptionbienimmat,Codequalif) VALUES (?,?,?,?)',[$code,1,request('bienimmaterielassocieDescription'),$qualification]);
                    break;
            }

            //Proprietes
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM propriete where Codepropri  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO propriete (Codepropri) VALUES (?)',[$code]);
            $propriete = $code;

            //Proprietes privées
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM proprietepriv where Codepropripriv  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO proprietepriv (Codepropripriv,'.request('proppriv').',Codepropri ) VALUES (?,?,?)',[$code,1,$propriete]);

            //Proprietes publics
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM proprietepub where Codepropripub  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO proprietepub (Codepropripub,'.request('proppub').',Codepropri ) VALUES (?,?,?)',[$code,1,$propriete]);

            //Proprietes ident
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM proprieteident where Codepropident  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO proprieteident (Codepropident,Nompren,Lienobj,Residence,Contact1,Contact2,Codepropri) VALUES (?,?,?,?,?,?,?)',[$code,request('nomPrenom'),request('lien'),request('residence'),request('contact1'),request('contact2'),$propriete]);

            //Conservation
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM conservation where Codeconserv  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO conservation (Codeconserv) VALUES (?)',[$code]);
            $conservation = $code;

            //Etat général
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM etatgeneral where Codeetatconserve8  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO etatgeneral (Codeetatconserve8,'.request('etatgene').',Codeconserv ) VALUES (?,?,?)',[$code,1,$conservation]);

            //Etat modification
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM etatmodification where Codeetatconserve9  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO etatmodification (Codeetatconserve9,'.request('modif').',Codeconserv ) VALUES (?,?,?)',[$code,1,$conservation]);

            //Etat occupation
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM etatoccupation where Codeetatoccup  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO etatoccupation (Codeetatoccup,'.request('occup').',Codeconserv ) VALUES (?,?,?)',[$code,1,$conservation]);


            //Protection
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM protection where Codeprotec  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO protection (Codeprotec) VALUES (?)',[$code]);
            $protection = $code;

            //Protection actuelle
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM protectionactuelle where Codeprotecactu  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO protectionactuelle (Codeprotecactu,'.request('protact').',Codeprotec ) VALUES (?,?,?)',[$code,1,$protection]);

            //Protection echelle suggeree
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM echelleprotectsuggeree where Codeechelleprot  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO echelleprotectsuggeree (Codeechelleprot,'.request('protsug').',Codeprotec ) VALUES (?,?,?)',[$code,1,$protection]);

            //Protection classe suggérée
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM echelleclasssugeree where Codeechelleclass  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO echelleclasssugeree (Codeechelleclass,'.request('classesug').',Codeprotec ) VALUES (?,?,?)',[$code,1,$protection]);


            //Info inventaire
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM infoinventaire where Codeinfoinvent  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO infoinventaire (Codeinfoinvent,Dateinvent,Inventoriste ) VALUES (?,?,?)',[$code,request('dateInvent'),request('inventoriste')]);
            $inventaire = $code;

            //Identification
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM identification where Codeident   = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO identification (Codeident,Synthesehisto,Diagnosticarch,Nature,Denominationof,Denominationpop,Autredenomination,Codelocal,Codepropri,Codequalif,Codeconserv,Codeprotec,Codeinfoinvent)
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)',[$code,request('synthese'),request('diagnostic'),request('nature'),request('denominationOff'),request('denominationPop'),request('autresDenomination'),$localisation,$propriete,$qualification,$conservation,$protection,$inventaire]);
            $identification = $code;

            //Image
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM image where Codeimage  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO image (Codeimage,Codeident ) VALUES (?,?)',[$code,$identification]);
            $codeImage = $code;

            //Photos entiers
            if(request()->file('photosEntier'))
            {

                foreach (request()->file('photosEntier') as $pic)
                {
                    $filenameWithExt = $pic->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $pic->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    // $path = request()->file('pic')->store('fichiers', 'public');
                    $path = $pic->storeAs('public/fichiers', $fileNameToStore);
                    $image = explode('/',$path)[sizeof(explode('/',$path))-1];

                    do
                    {
                        $code = random_int(10000001, 99999999);
                        $valid = false;
                        $data = \DB::select('SELECT * FROM photoobjentier where Codephotobj  = ?',[$code]);
                    }
                    while ($data);
                    \DB::insert('INSERT INTO photoobjentier (Codephotobj,Photo,Cheminphoto,Codeimage ) VALUES (?,?,?,?)',[$code,$fileNameToStore,$image,$codeImage]);

                }
            }

            //Photos details
            if(request()->file('photosDetails'))
            {

                foreach (request()->file('photosDetails') as $pic)
                {
                    $filenameWithExt = $pic->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $pic->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    // $path = request()->file('pic')->store('fichiers', 'public');
                    $path = $pic->storeAs('public/fichiers', $fileNameToStore);
                    $image = explode('/',$path)[sizeof(explode('/',$path))-1];

                    do
                    {
                        $code = random_int(10000001, 99999999);
                        $valid = false;
                        $data = \DB::select('SELECT * FROM photodetails where Codephotobj  = ?',[$code]);
                    }
                    while ($data);
                    \DB::insert('INSERT INTO photodetails (Codephotobj,Photo,Cheminphoto,Codeimage ) VALUES (?,?,?,?)',[$code,$fileNameToStore,$image,$codeImage]);

                }
            }

            //Image aer
            do
            {
                $code = random_int(10000001, 99999999);
                $valid = false;
                $data = \DB::select('SELECT * FROM photoaerienne where Codephotoaeri  = ?',[$code]);
            }
            while ($data);
            \DB::insert('INSERT INTO photoaerienne (Codephotoaeri,Codeimage ) VALUES (?,?)',[$code,$codeImage]);
            $codeaer = $code;

            //Photos aerienne obj
            if(request()->file('photosAerObj'))
            {

                foreach (request()->file('photosAerObj') as $pic)
                {
                    $filenameWithExt = $pic->getClientOriginalName();
                    //Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $pic->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                    // $path = request()->file('pic')->store('fichiers', 'public');
                    $path = $pic->storeAs('public/fichiers', $fileNameToStore);
                    $image = explode('/',$path)[sizeof(explode('/',$path))-1];

                    do
                    {
                        $code = random_int(10000001, 99999999);
                        $valid = false;
                        $data = \DB::select('SELECT * FROM photoaerobj where Codephotobj  = ?',[$code]);
                    }
                    while ($data);
                    \DB::insert('INSERT INTO photoaerobj (Codephotobj,Photo,Cheminphoto,Codephotoaeri ) VALUES (?,?,?,?)',[$code,$fileNameToStore,$image,$codeaer]);

                }
            }

             //Photos aerienne ilot
             if(request()->file('photosAerIlot'))
             {

                 foreach (request()->file('photosAerIlot') as $pic)
                 {
                     $filenameWithExt = $pic->getClientOriginalName();
                     //Get just filename
                     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                     // Get just ext
                     $extension = $pic->getClientOriginalExtension();
                     // Filename to store
                     $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                     // $path = request()->file('pic')->store('fichiers', 'public');
                     $path = $pic->storeAs('public/fichiers', $fileNameToStore);
                     $image = explode('/',$path)[sizeof(explode('/',$path))-1];

                     do
                     {
                         $code = random_int(10000001, 99999999);
                         $valid = false;
                         $data = \DB::select('SELECT * FROM photoaerilot where Codephotobj  = ?',[$code]);
                     }
                     while ($data);
                     \DB::insert('INSERT INTO photoaerilot (Codephotobj,Photo,Cheminphoto,Codephotoaeri ) VALUES (?,?,?,?)',[$code,$fileNameToStore,$image,$codeaer]);

                 }
             }

            \DB::commit();
            echo 'Enregistrement effectué';
        }
        catch(\Throwable $e)
        {
            \DB::rollback();
            dd($e);
        }
    }

}
