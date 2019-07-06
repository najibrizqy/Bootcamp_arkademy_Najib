<?php
    function is_username_valid($username) {
        return preg_match('/^(?![0-9])(?=.*[A-z])(?!.*[!@#$%&*._-])(?=.*[0-9])\S{5,9}$/',$username);
    }

    function is_password_valid($password) {
        return preg_match('/(?=.*[A-z])(?=.*[!#$%&*._-])(?=.*[@])(?=.*[0-9])\S{8,15}$/',$password);
    }
 
   // Validasi Username
   if (is_username_valid("A2yu99v")) {
       echo "Username Is Valid <br>" ;
   } else {
       echo "Username Is Invalid <br>" ;
   }
 
   // Validasi Password
   if (is_password_valid("p@ssW0rd#")) {
       echo "Password Is Valid" ;
   } else {
       echo "Password Is Invalid" ;
   }

?>