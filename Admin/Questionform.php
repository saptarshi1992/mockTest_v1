
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Questions</title>
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
                <div class="container">
                    <h2>Add New Question</h2>
                    <form action="insert_question.php" method="POST">
                        <div class="mb-3">
                            <label for="question" class="form-label">Question</label>
                            <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="option_a" class="form-label">Option A</label>
                            <input type="text" class="form-control" id="option_a" name="option_a" required>
                        </div>
                        <div class="mb-3">
                            <label for="option_b" class="form-label">Option B</label>
                            <input type="text" class="form-control" id="option_b" name="option_b" required>
                        </div>
                        <div class="mb-3">
                            <label for="option_c" class="form-label">Option C</label>
                            <input type="text" class="form-control" id="option_c" name="option_c" required>
                        </div>
                        <div class="mb-3">
                            <label for="option_d" class="form-label">Option D</label>
                            <input type="text" class="form-control" id="option_d" name="option_d" required>
                        </div>
                        <div class="mb-3">
                            <label for="correct_option" class="form-label">Correct Option</label>
                            <select class="form-select" id="correct_option" name="correct_option" required>
                                <option value="A">Option A</option>
                                <option value="B">Option B</option>
                                <option value="C">Option C</option>
                                <option value="D">Option D</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Question</button>
                    </form>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>