<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 25px; line-height: 1.6; }
        nav a { margin-right: 15px; text-decoration: none; color: #0056b3; font-weight: bold; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .card { border: 1px solid #ddd; padding: 15px; width: 320px; border-radius: 6px; }
    </style>
</head>
<body>
    <nav>
        <a href="<?= site_url('/') ?>">Welcome (Today)</a> |
        <a href="<?= site_url('/tasks') ?>">All Tasks</a> |
        <a href="<?= site_url('/profile') ?>">Profile</a> |
        <a href="<?= site_url('/about') ?>">About</a>
    </nav>
    <hr>