<?php
require_once __DIR__."/../Models/Event.php";
class EventsController{
    private static function uploadImage(&$error){
        $img = $_FILES["img"];
        
        // Make sure that there is no upload error
        if($img["error"] != 0){
            $error = "There was a problem with uploading the image, try again later.";
            return "";
        }

        // Make sure that the image size is less than 3MB
        if($img["size"] > 3000000){
            $error = "Image Size was Greater Than 3MB";
            return "";
        }

        // Make sure that the file is an image
        if(explode("/", $img["type"])[0] !== "image"){
            $error = "File Choosen was not an Image";
            return "";
        }

        $base = $_SERVER["DOCUMENT_ROOT"].ObjectManager::getBase()."/Views/Uploads/Events/";
        $name = explode(".", $img["name"]);
        $extension = $name[count($name) -1];
        $newName = uniqid("IMG-", true).".".$extension;
        move_uploaded_file($img["tmp_name"], $base.$newName);
        return $newName;
    }

    public static function createEvent(){
        $error = "";
        $success = "";

        // if anything is empty
        if(empty($_POST["name"])){
            $error = "Name Field is Required";
        }else if(empty($_POST["description"])){
            $error = "Description Field is Required";
        }else if(empty($_FILES["img"])){
            $error = "Image Field is Required";
        }else if(empty($_POST["date"])){
            $error = "Date Field is Required";
        }

        //if the date is older than today
        $date = explode("-", $_POST["date"]);
        if($date[0] < date("Y")){
            $error = "Date choosen has already passed";
        }else if($date[0] == date("Y") && $date[1] < date("m")){
            $error = "Date choosen has already passed";
        }if($date[0] == date("Y") && $date[1] == date("m") && $date[2] < date("d")){
            $error = "Date choosen has already passed";
        }

        // Upload Image file to Uploads/Events/
        $location = self::uploadImage($error);
        if($location !== ""){
            $_POST["img"] = $location;
        }

        // insert row if no error
        if($error === ""){
            unset($_POST["submit"]);
            $event = new Event();
            $event->insert($_POST);
            $success = "Event Created Successfuly";
        }

        // remove post data so form gets cleared on successful insertion
        if(!empty($success)){
            unset($_POST["name"]);
            unset($_POST["description"]);
            unset($_POST["img"]);
            unset($_POST["date"]);
        }

        require_once __DIR__."/../Views/Pages/create-event.php";
    }

    public static function getEvents(){
        $event = new Event(); 
        $events = $event->getAll();
	    require_once "Views/Pages/events.php";
    }
}
?>