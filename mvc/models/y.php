<?php
    class y extends Database{
        public function hi() {
            $qr = "SELECT * FROM xinchao";
            return mysqli_query($this->con, $qr);
        }
    }
?>