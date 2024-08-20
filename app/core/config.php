<?php

if($_SERVER['SERVER_NAME'] == 'localhost')
{
    
    define('ROOT','http://localhost/mvc/public');//define the constant to identify actual path of images or something
}else

{
    
    define('ROOT', 'https://www.yourwebsite.com');//for if it is we log throught the online website

}
    
   
    

