<?php

    namespace app\database\models;

    use app\traits\Connection;
    use app\traits\Read;
    use app\traits\Create;
    
    abstract class Model {

        use Read, Connection; 
        use Create, Connection;

    }