<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Add New Task</h1>
        
        <form action="index.php?action=add_task" method="post" class="form-inline">
            <div class="form-group">
                <input type="text" name="task" class="form-control mr-2" placeholder="Enter new task" required>
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
