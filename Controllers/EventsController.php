<?php
require_once __DIR__."/../Models/Event.php";
class EventsController{
    public static function createEvent(){
        $error = "";
        $success = "";

        if(empty($_POST["name"])){
            $error = "Name Field is Required";
        }else if(empty($_POST["description"])){
            $error = "Description Field is Required";
        }else if(empty($_POST["img"])){
            $error = "Image Field is Required";
        }else if(empty($_POST["date"])){
            $error = "Date Field is Required";
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
}
?>