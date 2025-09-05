<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProductosModel extends Model{
    protected $table      = 'productos';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array'; // array or object
    protected $useSoftDeletes = false; // si es falso $deletedField no se usa, si es false el campo se elimina de la tabla

    protected $allowedFields = ['codigo', 'nombre', 'stock', 'id_almacen', 'estatus'];

    // Dates
    protected $useTimestamps = true; // si es false no se usan los campos de fecha
    protected $dateFormat    = 'datetime'; // datetime, date, int
    protected $createdField  = 'fecha_alta';
    protected $updatedField  = 'fecha_modifica';
    protected $deletedField  = ''; // 'fecha_elimina' es el campo que se usa para soft delete, SOLO si useSoftDeletes es TRUE
}

?>