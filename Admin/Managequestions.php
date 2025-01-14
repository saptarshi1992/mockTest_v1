<?php
require '../Database.php';

try {
    $stmt = $db->prepare("SELECT * FROM questions ORDER BY id ASC");
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error fetching questions: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manage Questions</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="d-flex">
            <!-- Sidebar -->
            <div class="sidebar">
                <h3>Admin Dashboard</h3>
                <a href="manage_users.php">Manage Users</a>
                <a href="Manage_questions.php">Manage Questions</a>
                <a href="Questions_Form.php">Add Questions</a>
                <a href="view_results.php">View Test Results</a>
                <a href="reports.php">Reports</a>
                <a href="logout.php">Logout</a>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <div class="container mt-4">
                    <h2>Manage Questions</h2>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Option A</th>
                                <th>Option B</th>
                                <th>Option C</th>
                                <th>Option D</th>
                                <th>Correct Option</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($questions)): ?>
                                <?php foreach ($questions as $question): ?>
                                    <tr>
                                        <td><?= $question['id']; ?></td>
                                        <td><?= htmlspecialchars($question['question']); ?></td>
                                        <td><?= htmlspecialchars($question['option_a']); ?></td>
                                        <td><?= htmlspecialchars($question['option_b']); ?></td>
                                        <td><?= htmlspecialchars($question['option_c']); ?></td>
                                        <td><?= htmlspecialchars($question['option_d']); ?></td>
                                        <td><?= $question['correct_option']; ?></td>
                                        <td>
                                            <a href="edit_question.php?id=<?= $question['id']; ?>"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <a href="delete_question.php?id=<?= $question['id']; ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this question?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="8" class="text-center">No questions found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>