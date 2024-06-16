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
            <?php if (empty($tasks)) : ?>
                <li class="list-group-item">No tasks found.</li>
            <?php else : ?>
                <?php foreach ($tasks as $task) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center <?php echo $task['completed'] ? 'completed' : ''; ?>">
                        <?php echo $task['task']; ?>
                        <div>
                            <?php if (!$task['completed']) : ?>
                                <a href="index.php?action=mark_completed&id=<?php echo $task['id']; ?>" class="badge badge-primary">Mark as Completed</a>
                            <?php else : ?>
                                <span class="badge badge-success">Completed</span>
                            <?php endif; ?>
                            <a href="index.php?action=delete_task&id=<?php echo $task['id']; ?>" class="badge badge-danger ml-2" onclick="return confirm('Are you sure you want to delete this task?')">Delete</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
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
