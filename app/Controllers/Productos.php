<?php

    namespace App\Controllers;

    class Productos extends BaseController{
        public function index(){
            $data = ['titulo'=> 'Catalogo de Productos'];
            return view('plantilla/header')
                .view('productos/index',$data)
                . view('plantilla/footer',['copy'=>"220323"]);

            //return view('productos/index',$data);
        }
        public function show($id){
            $data = ['titulo'=> 'Catalogo de Productos',
            'id'=>$id
        ];
            return view('plantilla/header')
                .view('productos/show',$data)
                . view('plantilla/footer',['copy'=>"220323"]);        }
        public function cat($categoria,$id){
            return "<h2>Caterogria $categoria <br> Producto  $id</h2>";
        }
    }


?>