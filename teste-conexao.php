<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Configs\Database;

try {
    // Tenta obter a conexão PDO através do nosso Singleton
    $pdo = Database::getConnection();
    
    echo "<h2 style='color: green;'>Sucesso! Conexão com o banco de dados estabelecida com sucesso! 🛡️🚀</h2>";
    
    // Executa uma consulta simples para testar o MySQL
    $stmt = $pdo->query("SELECT VERSION() as versao");
    $resultado = $stmt->fetch();
    
    echo "<p>Versão do MySQL ativa: <strong>" . $resultado['versao'] . "</strong></p>";

} catch (\Exception $e) {
    echo "<h2 style='color: red;'>Erro na conexão:</h2>";
    echo "<p>" . $e->getMessage() . "</p>";
}