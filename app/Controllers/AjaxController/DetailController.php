<?php

namespace App\Controllers\AjaxController;

use App\Controllers\BaseController;
use App\Models\BienTheModel;

class DetailController extends BaseController
{
    function test($id)
    {
        $idcolor = $_POST['color'];
        $idsp = $id;

        $all_size = BienTheModel::bienTheSC($idcolor, $idsp);

        if (empty($all_size)) {
            echo 'SIZE:<p style="border: 1px solid; text-align: center; width: 200px; height: 45px; padding-top: 10px; margin-left: 20px; color: red;">HẾT SIZE</p>';
        }
        if (!empty($all_size)) {
            echo "SIZE:";
            foreach ($all_size as $key => $value) {
                echo " <div class='custom-radio' id='size'>
            <input type='radio' id='<?= $value->size ?>' name='size' value='<?= $value->id ?>'>
            <label for='<?= $value->size ?>'>$value->size</label>
        </div>";
            }
        }
    }
}
