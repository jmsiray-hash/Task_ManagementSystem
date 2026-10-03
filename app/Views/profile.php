<?= include('header.php') ?>

<h2>User Profile</h2>

<?php if ($user): ?>
    <div class="card">
        <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
        <p><strong>Full Name:</strong> <?= esc($user['full_name']) ?></p>
        <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
        <p><strong>Created At:</strong> <?= esc($user['created_at']) ?></p>
    </div>
<?php else: ?>
    <p>Walang nakitang user record.</p>
<?php endif; ?>

</body>
</html>