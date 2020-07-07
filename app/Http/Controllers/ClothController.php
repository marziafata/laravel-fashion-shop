<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth; //gli dico che oltre a vedere tutto quello che è in questo namespace, ti serve anche ciò che è nel namespace del model. Ecco il percorso, vai a prendertli

class ClothController extends Controller
{
    public function index() {
        //questa funzione mi permette di andare a leggere il contenuto del database che ho in precedenza creato (come fosse la query select * from clothes)
        $vestiti = Cloth::all(); //avendo collegato il namespace del model a questo, adesso Cloth è definito anche in questo ambiente
        return view('clothes', compact('vestiti'));//la funzione compact cerca la variabile che si chiama 'vestiti' e la passa alla view con lo stesso nome
        //in alternativa si può fare un array (non si usa tantissimo)
        //return('view', ['lista_vestiti' => $vestiti]);
        // è la stessa cosa: arriva alla view la variabile vestiti
    }
}
