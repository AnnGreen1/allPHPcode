<?php
    class DB{
        // 设置一个容器存储DB类的实例
        static private $_instance;

        // 设置一个容器存储pdo对象
        private $_pdo;

        // 提供一个配置用于实例化pdo
        private $_config = [
            "dsn" => "mysql:host=127.0.0.1;port=3306;dbname=exam;charset=utf8",
            "username" => "root",
            "password" => "",
            "options" => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        ];

        // 私有化构造函数
        private function __construct()
        {
            
        }

        // 获取DB类的实例
        static public function getInstance(){
            // 判断 $_instance有没有值
            if (!self::$_instance instanceof self) {
               self::$_instance = new self();
            }

            return self::$_instance;
        }

        // 获取pdo连接对象
        function connect(){

            // 判断$_pdo有没有值
            if (!$this->_pdo) {
                $this->_pdo = new PDO($this->_config["dsn"],$this->_config["username"],$this->_config["password"],$this->_config["options"]);
            }

            return $this->_pdo;
        }

    }