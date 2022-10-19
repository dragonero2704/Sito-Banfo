<?php
    class CSV{
        public $filename = null;
        public $pathToFile = null;
        public $size = null;
        private $stream = null;
        protected $nRows = 0;
        protected $nHeaders = 0;

        function __construct($file)
        {
            $this->filename = $file['name'];
            $this->pathToFile = $file['tmp_name'];
            $this->size = $file['size'];
            $stream = fopen($this->pathToFile, 'r');
            while($row = fgetcsv($stream, 10000, ',')){
                if($this->nRows == 0){
                    $this->nHeaders = sizeof($row);
                }
                $this->nRows++;
            }
            $this->stream = fopen($this->pathToFile, 'r');
        }

        public function getRows(){
            $stream = fopen($this->pathToFile, 'r');
            $rows = array();
            while($row = fgetcsv($stream, 10000, ',')){
                array_push($rows, $row);
            }
            return $rows;
        }

        public function getNextRow(){
            if($row = fgetcsv($this->stream, 10000, ',')){
                return $row;
            }else{
                return false;
            }
        }

        public function getHeader(){
            $stream = fopen($this->pathToFile, 'r');
            $headers = fgetcsv($stream, 10000, ',');
            $head = array();
            $counter = 0;
            //associo il nome dell'head all'indice della colonna
            foreach($headers as $header){
                $head[$header] = $counter;
                $counter += 1;
            }
            //print_r($head);
            return $head;
        }
        public function getTotalRows(){
            return $this->nRows;
        }
        public function getTotalHeaders(){
            return $this->nHeaders;
        }

    }
