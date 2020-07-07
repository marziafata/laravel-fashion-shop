<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth; //gli dico che oltre a vedere tutto quello che è in questo namespace, ti serve anche ciò che è nel namespace del model. Ecco il percorso, vai a prendertli

class ClothController extends Controller
{
    public function index() {
        //questa funzione mi permette di andare a leggere il contenuto del database che ho in precedenza creato (come fosse la query select * from clothes)
        $vestiti = Cloth::all(); //avendo collegato il namespace del model a questo, adesso Cloth è definito anche in questo ambiente
        dd($vestiti); //mi permette di stampare a video come il var_dump ma più performante. con questo dd vado a vedere se la funzione va a buon fine (che è mappata lo so già perchè il test funziona)
    }
}
