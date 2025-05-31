<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Lengkap</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-8">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-center mb-8">Kalkulator Lengkap</h1>
        
        <!-- Grid Layout untuk Kalkulator -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Kalkulator Penjumlahan -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Penjumlahan</h2>
                <form action="" method="post" class="space-y-4">
                    <input type="hidden" name="form_type" value="penjumlahan">
                    <input type="number" name="penjumlahan1" placeholder="Angka 1" class="w-full p-2 border rounded-md" required>
                    <input type="number" name="penjumlahan2" placeholder="Angka 2" class="w-full p-2 border rounded-md" required>
                    <input type="submit" value="Hitung" class="w-full bg-green-500 text-white py-2 rounded-md hover:bg-green-600">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "penjumlahan") {
                    echo "<div class='mt-4 p-4 bg-gray-100 rounded-md'>";
                    echo "<h3 class='font-medium'>Hasil:</h3>";
                    echo "<p class='text-green-600 font-bold'>" . ($_POST["penjumlahan1"] + $_POST["penjumlahan2"]) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>

            <!-- Kalkulator Pengurangan -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Pengurangan</h2>
                <form action="" method="post" class="space-y-4">
                    <input type="hidden" name="form_type" value="pengurangan">
                    <input type="number" name="pengurangan1" placeholder="Angka 1" class="w-full p-2 border rounded-md" required>
                    <input type="number" name="pengurangan2" placeholder="Angka 2" class="w-full p-2 border rounded-md" required>
                    <input type="submit" value="Hitung" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "pengurangan") {
                    echo "<div class='mt-4 p-4 bg-gray-100 rounded-md'>";
                    echo "<h3 class='font-medium'>Hasil:</h3>";
                    echo "<p class='text-blue-600 font-bold'>" . ($_POST["pengurangan1"] - $_POST["pengurangan2"]) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>

            <!-- Kalkulator Perkalian -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Perkalian</h2>
                <form action="" method="post" class="space-y-4">
                    <input type="hidden" name="form_type" value="perkalian">
                    <input type="number" name="perkalian1" placeholder="Angka 1" class="w-full p-2 border rounded-md" required>
                    <input type="number" name="perkalian2" placeholder="Angka 2" class="w-full p-2 border rounded-md" required>
                    <input type="submit" value="Hitung" class="w-full bg-purple-500 text-white py-2 rounded-md hover:bg-purple-600">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "perkalian") {
                    echo "<div class='mt-4 p-4 bg-gray-100 rounded-md'>";
                    echo "<h3 class='font-medium'>Hasil:</h3>";
                    echo "<p class='text-purple-600 font-bold'>" . ($_POST["perkalian1"] * $_POST["perkalian2"]) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>

            <!-- Kalkulator Pembagian -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Pembagian</h2>
                <form action="" method="post" class="space-y-4">
                    <input type="hidden" name="form_type" value="pembagian">
                    <input type="number" name="pembagian1" placeholder="Angka 1" class="w-full p-2 border rounded-md" required>
                    <input type="number" name="pembagian2" placeholder="Angka 2" class="w-full p-2 border rounded-md" required>
                    <input type="submit" value="Hitung" class="w-full bg-yellow-500 text-white py-2 rounded-md hover:bg-yellow-600">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "pembagian") {
                    echo "<div class='mt-4 p-4 bg-gray-100 rounded-md'>";
                    echo "<h3 class='font-medium'>Hasil:</h3>";
                    if ($_POST["pembagian2"] == 0) {
                        echo "<p class='text-red-600 font-bold'>Tidak bisa membagi dengan 0!</p>";
                    } else {
                        echo "<p class='text-yellow-600 font-bold'>" . ($_POST["pembagian1"] / $_POST["pembagian2"]) . "</p>";
                    }
                    echo "</div>";
                }
                ?>
            </div>

            <!-- Kalkulator Perpangkatan -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-bold text-center mb-4">Perpangkatan</h2>
                <form action="" method="post" class="space-y-4">
                    <input type="hidden" name="form_type" value="perpangkatan">
                    <input type="number" name="perpangkatan1" placeholder="Angka 1" class="w-full p-2 border rounded-md" required>
                    <input type="number" name="perpangkatan2" placeholder="Angka 2" class="w-full p-2 border rounded-md" required>
                    <input type="submit" value="Hitung" class="w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600">
                </form>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == "perpangkatan") {
                    echo "<div class='mt-4 p-4 bg-gray-100 rounded-md'>";
                    echo "<h3 class='font-medium'>Hasil:</h3>";
                    echo "<p class='text-pink-600 font-bold'>" . ($_POST["perpangkatan1"] ** $_POST["perpangkatan2"]) . "</p>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
