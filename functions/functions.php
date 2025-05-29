<?php
   //Getting the files and display them on the mainpage
   function get_titles()
   {
        if(isset($_GET['title']))
        {
            $title = $_GET['title'];
            $title = str_replace('_', ' ', $title);
            $title = ucwords($title);
            return $title;
        }
        else
        {
            echo "Dashboard";
        }
   }

   function get_files()
   {
        if(isset($_GET['file']))
        {
            $file = $_GET['file'];
            include "includes/$file";
        }
        else
        {
             include "includes/home.php";
           
        }
   }
?>
