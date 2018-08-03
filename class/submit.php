<?php
/**
 * A class that contains code to handle any requests for  /tasks
 */
/**
 * Support // or /home/tasks
 */
    class Submit extends \Framework\Siteaction
    {
/**
 * Handle tasks operations /
 *
 * @param object	$context	The context object for the site
 *
 * @return string	A template name
 */
        public function handle($context)
        {
          /*   if(isset($_POST['login']) && !empty($_POST['login'])){
 
            }
            else{
                header('location: home');
                exit();
            }

            $login = $_POST['login'];
            $email = $_POST['email'];
            $fullname = $_POST['fullname'];
            $password = $_POST['password'];
            $repeat = $_POST['repeat'];
            $therapistname = $_POST['therapistname'];
            $therapistcode = $_POST['therapistcode'];

            $db_host = 'localhost';
            $db_username = 'root';
            $db_password = '';
            $db_name = 'dissertation';

            $mysql_connect($db_host, $db_username, $db_password) or die($mysql_error);

            $mysql_select_db($db_name);

            $query = "SELECT * FROM `user` WHERE `login` = '$login'";
            $sqlsearch = mysql_query($query);
            $resultcount = mysql_numrows($sqlsearch);

            if ($resultcount > 0) {
                die(mysql_error());
            } 
            else {
                mysql_query("INSERT INTO `user` (login, email, fullname, password, repeat, therapistname, therapistcode) VALUES ('$login', '$email', '$fullname', '$password', '$repeat', '$therapistname', '$therapistcode') ");
            } */
            return 'index.twig';
        }
    }
?>