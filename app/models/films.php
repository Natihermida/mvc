<?php
namespace Formacom\models;
use Illuminate\Database\Eloquent\Model;
class Films extends Model{
    protected $table="film";
    protected $primaryKey="film_id";
    public $timestamps=false;
}

?>