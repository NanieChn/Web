<!-- Collaborate with  andriantsehenoanja926@gmail.com -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Départements</title>
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">
    <h1 class="mb-4">Liste des Départements</h1>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Département</th>
                <th>Manager</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT d.id, d.nom AS departement, e.nom AS manager_nom, e.prenom AS manager_prenom
                    FROM departement d
                    LEFT JOIN employe e ON d.manager_id = e.id";
            $stmt = $pdo->query($sql);

            while ($row = $stmt->fetch()) {
                echo "<tr>
                        <td>{$row['departement']}</td>
                        <td>{$row['manager_prenom']} {$row['manager_nom']}</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
