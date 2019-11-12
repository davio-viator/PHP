<?php
class File{

    public static function build_path($path_array){
        //$ROOT_FOLDER = "http://webinfo/~viatord/Davio-Viator/TD5/";
        $DS = DIRECTORY_SEPARATOR;
        $ROOT_FOLDER = __DIR__.$DS.'..';
        echo $path_array."<br>";

        return $ROOT_FOLDER . "/" .$path_array."";
    }


}