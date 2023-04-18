<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataControllers extends Controller {



    public function getName(Request $request){

        $id = $request->input('id');

        $SQL = "SELECT Name FROM dbdata Where Id = ?";

        $request = DB::select($SQL,[$id]);

        return $request;
    }


    public function getData(Request $request){


        $SQL = 'SELECT * FROM dbdata';
        $request = DB::select($SQL);

        return $request;
    }

    public function createData(Request $request){

        $name = $request->input('name');
        $address = $request->input('address');
        $maritalStatus = $request->input('maritalStatus');

       $SQL = 'INSERT INTO dbdata(Name, Address, MaritalStatus) VALUES (?,?,?)';

       $result = DB::insert($SQL,[$name,$address,$maritalStatus]);

       return $result;
    }


    public function updateData(Request $request){
        $name = $request->input('name');
        $address = $request->input('address');
        $id = $request->input('id');

        $SQL = 'UPDATE dbdata SET Name = ?, Address = ? WHERE Id =?';
        $result = DB::delete($SQL,[$name,$address,$id]);
        
    }


    public function deleteData(Request $request){
        
        $id = $request->input('id');

        $SQL = 'DELETE FROM dbdata WHERE Id = ?';
        $result = DB::delete($SQL,[$id]);
    }


}