<?php

    namespace app\traits;

    trait Create {

      public function acreate($data) {

            try {

                $query = $this->connection->query("INSERT INTO `students`(`nome`, `turma`) VALUES (?,?);");
                return $query -> $data;

            } catch(PDOException $e) {
                var_dump($e->getMessage());
            }
        }
    }