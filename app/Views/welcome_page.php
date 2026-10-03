<?= include('header.php') ?>

<h2>Welcome - Tasks for Today (<?= date('Y-m-d') ?>)</h2>

<?php if (!empty($tasks)): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Status</th>
                <th>Task Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= $task['id'] ?></td>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Walang nakatala na task para sa araw na ito.</p>
<?php endif; ?>

</body>
</html>