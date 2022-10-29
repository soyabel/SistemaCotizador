<?php
    function get_view($view_name){
        $view =VIEWS.$view_name.'View.php';
        if (!is_file($view)) {
            die('la vista no existe');
        }
        require_once $view;
    }

 //Cotización

 function get_quote(){
     if (!isset($_SESSION['new_quote'])) {
         return $_SESSION['new_quote']=
         [
            'number'    =>rand(111111,999999),
            'name'      =>'',
            'company'   =>'',
            'email'     =>'',
            'items'     =>[],
            'subtotal'  =>0,
            'taxes'     =>0,  //taxes = impuestos
            'shipping'  =>0,  //shipping = envio
            'total'     =>0           
         ];
     }

        //calcular todos los totales
        recalculate_quote();
        return $_SESSION['new_quote'];
}

 function recaculate_quote(){
    $items      =[];
    $subtotal   =0;
    $taxes      =0;
    $shipping   =0;
    $total      =0;

    if (!isset($_SESSION['new_quote'])) {
        return false;
    }

    //validar items
    $items=$_SESSION['new_quote']['items'];

    //si la lista de items esta vacia no es necesario calcular nada

    if (!empty($items)) {
        foreach($items as $item) {
            $subtotal +=item['total'];
            $taxes    +=item['taxes'];
        }
    }

    $shipping=$_SESSION['new_quote']['shipping'];
    $total= $subtotal+ $taxes +$shipping;

    $_SESSION['new_quote']['subtotal']=$subtotal;
    $_SESSION['new_quote']['taxes']=$taxes;
    $_SESSION['new_quote']['shipping']=$shipping;
    $_SESSION['new_quote']['total']=$total;

    return true;

}

function restart_quote(){
    $_SESSION['new_quote'] =
    [
       'number'    =>rand(111111,999999),
       'name'      =>'',
       'company'   =>'',
       'email'     =>'',
       'items'     =>[],
       'subtotal'  =>0,
       'taxes'     =>0,  
       'shipping'  =>0,     
       'total'     =>0    
    ];
    return true;
}

function get_items(){ //funcion para obtener todos los conceptos
    $items = [];

    if (!isset($_SESSION['new_quote']['items'])){
        return $items;
    }

    $items=$_SESSION['new_quote']['items'];
    return $items;

}

function get_item($id){
    $items=get_items();
    if (empty(items)) {
       return false;
    }

    foreach ($items as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }

    return false;
}


?>