<!DOCTYPE html>
<html>

<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h1 class="mb-4">My To-Do List</h1>

        <ul class="list-group">
            <?php foreach ($tasks as $task) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $task['task']; ?>
                    <?php if (!$task['completed']) : ?>
                        <a href="index.php?action=mark_completed&id=<?php echo $task['id']; ?>" class="badge badge-primary badge-pill">Mark as Completed</a>
                    <?php else : ?>
                        <span class="badge badge-success badge-pill">Completed</span>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>


        <h2 class="mt-4">Add New Task</h2>
        <form action="index.php?action=add_task" method="post" class="form-inline mb-4">
            <input type="text" name="task" class="form-control mr-2" placeholder="Enter new task" required>
            <button type="submit" class="btn btn-primary">Add Task</button>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>