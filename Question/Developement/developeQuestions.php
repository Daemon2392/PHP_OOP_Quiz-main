<?php
require_once './Helper/create.php';
?>


<?php
    class DevelopeQuestion extends Question
    {
        public function createQuestion()
        {
            echo "Question is :</br></br>";
            echo " - What of this Therms are 'Access Modifier' in PHP ?</br></br>";
            
            require './Question/Developement/htmlForDevelope.php';
            return;
        }
        public function createAnsware(): string
        {
            echo "Answare is :</br></br>";
            return "";
        }
        public function createSolution(): bool
        {
            return true || false;
        }
    }

?>