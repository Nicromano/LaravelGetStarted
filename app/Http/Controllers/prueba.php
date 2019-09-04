<?php 

namespace First_app\Http\Controllers;

use First_app\Http\Controllers\Controller;

class prueba extends Controller {

    public function prueba($param = null){
        return 'Im inside of the controller class '.$param ;
    }

}
?>