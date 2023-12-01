<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    private static $patient;
    use HasFactory;

    public static function addOrUpdate($request){
        $folderName = 'Patient';
        if ($request->id){
            self::$patient = Patient::find($request->id);
        }
        else{
            self::$patient = new Patient();
        }
        self::$patient->name            = $request->name;
        self::$patient->age             = $request->age;
        self::$patient->phone           = $request->phone;
        self::$patient->emergency_num   = $request->emergency_num;
        self::$patient->gender          = $request->gender;
        self::$patient->email           = $request->email;
        self::$patient->weight          = $request->weight;
        self::$patient->address         = $request->address;

        if ($request->file('image')){
            if (self::$patient->image_path){
                if (file_exists(self::$patient->image_path)){
                    unlink(self::$patient->image_path);
                }
                self::$patient->image_path = saveImageUrl($request, $folderName);
            }
            else{
                self::$patient->image_path = saveImageUrl($request, $folderName);
            }
        }
        self::$patient->save();
    }

    public static function remove($id){
        self::$patient = Patient::find($id);
        if (self::$patient->image_path){
            unlink(self::$patient->image_path);
        }
        self::$patient->delete();
    }
}
