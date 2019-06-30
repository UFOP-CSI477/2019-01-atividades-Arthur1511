<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    // lista dos campos que podem ser gravados

    protected $fillable = ['nome', 'sigla'];

//    lista de campos protegidos - nao podem ser atualizados diretamente

//    protected $guarded = ['senha'];

    public function cidades(){
        return $this->hasMany('App\Cidade');
    }
}
