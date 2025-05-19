<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen">
    <!-- Navbar -->
    <nav class="bg-gray-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">MyApp</h1>
            <a href="logout.php"
               class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition duration-200">
               Logout
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-3xl mx-auto mt-16 p-6 bg-gray-800 rounded-2xl shadow-lg">
        <h2 class="text-2xl font-bold mb-4">Selamat Datang, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
        <p class="text-gray-300 mb-2">
            Kamu berhasil login ke dalam sistem.
        </p>
        <p class="text-gray-400">
            Ini adalah halaman dashboard sederhana
        </p>
    </main>
</body>

</html>
