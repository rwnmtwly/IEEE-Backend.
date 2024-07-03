<?php
class m0001_initial{
    public function up(){
        $db = \app\core\Application::$app->db;
        $SQL = "CREATE TABLE user(
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255)NOT NULL,
                firstname VARCHAR(255)NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                status TINYINT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP) ENGINE INNODB;";
        $db->pdo->exec($SQL);
        echo 'Applying migration'.PHP_EOL;
    }

    public function down(){
        $db = \app\core\Application::$app->db;
        $SQL = "DROP TABLE user;";
        $db->pdo->exec($SQL);
    }
}
?>