<?php
session_start();

if (isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-sm mx-auto p-6 bg-gray-800 rounded-2xl shadow-md">
        <h2 class="text-2xl font-bold text-center text-white mb-6">Login</h2>

        <?php if (isset($_SESSION['login_error'])): ?>
        <div class="mb-4 bg-red-600 text-white px-4 py-2 rounded text-sm">
            <?php 
            echo htmlspecialchars($_SESSION['login_error']); 
            unset($_SESSION['login_error']);
            ?>
        </div>
        <?php endif; ?>

        <form method="POST" action="login.php" class="space-y-4">
            <div>
                <label for="username" class="block text-gray-300 font-medium mb-1">Username</label>
                <input type="text" name="username" id="username" required
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="password" class="block text-gray-300 font-medium mb-1">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 bg-gray-700 text-white border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200">
                Login
            </button>
        </form>
    </div>
</body>

</html>
