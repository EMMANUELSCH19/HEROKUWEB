// *este es para encriptar la contraseña

<?php
    class encriptar{//*encripta la constraseña
        public function encriptar_password($password){
            $hash = password_hash($password, PASSWORD_DEFAULT);
            return $hash;
        }

        public function verificar_password($password, $hash){ //*verifica la contraseña
            $verificar = password_verify($password, $hash);
            return $verificar;
        }
    }
?>