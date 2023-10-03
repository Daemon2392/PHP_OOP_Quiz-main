<?php
    abstract class Question
    {
        //Propreties
        public $question;
        public $answer;
        public $solution;


        //Constructor
        public function __constructor($question, $answer, $solution)
        {
            $this -> question = $question;
            $this -> answer = $answer;
            $this -> solution = $solution;
        }

        //Methods
        
        //Method-Question
        abstract public function createQuestion(); 

        //Get
        public function getQuestion()
        {
            return $this -> question;
        }

        //Method-Answare
        abstract public function createAnsware();

        //Get
        public function getAnsware()
        {
            return $this -> answer;
        }

        //Method-Solution
        abstract public function createSolution(): bool;

        //Get
        public function getSolution()
        {
            return $this -> solution; 
        }
    }

?>