<?php
try {
    // 1. Conexão com o banco de dados SQLite
    $pdo = new PDO('sqlite:database.db');
    // Configura o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. Preparação e execução da query
    $usuarioId = 1;
    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE id = ?');
    $stmt->execute([$usuarioId]);

    // 3. Busca dos dados do usuário
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    // 4. Exibição dos dados
    if ($usuario) {
        echo "<strong>Usuário Encontrado com PDO</strong><br><br>";
        echo $usuario['id'] . "<br>";
        echo $usuario['name'] . "<br>";
        echo $usuario['email'] . "<br>";
    } else {
        echo "<p>Usuário não encontrado.</p>";
    }
} catch (PDOException $e) {
    echo "<p style='color: red;'>Erro ao conectar com o banco de dados: " . $e->getMessage() . "</p>";
}
