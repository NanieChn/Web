<?php include 'config.php';

$dept_id = isset($_GET['dept_id']) ? intval($_GET['dept_id']) : 0;

// Récupération du nom du département
$stmtDept = $pdo->prepare("SELECT nom FROM departement WHERE id = ?");
$stmtDept->execute([$dept_id]);
$dept = $stmtDept->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Employés du département</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h1 class="mb-4">Employés du département : <?= htmlspecialchars($dept['nom']) ?></h1>
    <a href="departements.php" class="btn btn-secondary mb-3">← Retour</a>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->prepare("SELECT prenom, nom FROM employe WHERE departement_id = ?");
            $stmt->execute([$dept_id]);

            foreach ($stmt as $emp) {
                echo "<tr><td>{$emp['prenom']}</td><td>{$emp['nom']}</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
