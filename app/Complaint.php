<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model {
    protected $table = 'complaints';
    public $timestamps = false;


    /** Retorna o autor da Denuncia */
    public function autor() {
        return $this->belongsTo('App\AuthorReports', 'id_author_reports');
    }

    /** Retorna o tipo da denuncia */
    public function tipoViolencia() {
        return $this->belongsTo('App\ViolationType', 'id_violation_types');
    }

    /** Retorna uma mídia */
    public function midia() {
        return $this->hasOne('App\Media');
    }

    /** Retorna uma mídia */
    public function vitima() {
        return $this->hasOne('App\Victim');
    }

    /** Retorna uma mídia */
    public function agressor() {
        return $this->hasOne('App\Aggressor');
    }
}
