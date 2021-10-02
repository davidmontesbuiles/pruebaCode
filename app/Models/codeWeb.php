<?php   

namespace App\Models;

use CodeIgniter\Model;

class codeWeb extends Model{
    protected $table = 'clientes';
    protected $primaryKey = 'Id';
    protected $allowedFields = ['Nombres','Apellidos','Email','Identificacion'];
}

?>