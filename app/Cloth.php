<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{   // questo protected table, mi serve per forzare il nome della tabella se voglio assegnare un nome anticonvenzionale
    // o se laravel non riconosce correttamente il plurale del nome assegnato al model
    // nel nostro caso abbiamo il problema che stiamo lavorando con un nome collettivo, che quindi non ha singolare.
    // in questo modo laravel non aggiunge la 's' di default al nome e riesce a leggere la query correttamente
    protected $table = 'clothes';
}
