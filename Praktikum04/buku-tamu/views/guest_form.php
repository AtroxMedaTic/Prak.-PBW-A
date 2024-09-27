<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
            font-family: Arial, sans-serif; /* Font yang bersih */
            padding: 20px; /* Padding untuk seluruh body */
        }
        .container {
            max-width: 600px; /* Maksimal lebar kontainer */
            margin: 50px auto; /* Pusatkan kontainer */
            padding: 20px;
            background-color: #fff; /* Warna latar belakang putih untuk formulir */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }
        h2 {
            text-align: center; /* Teks berada di tengah */
            color: #343a40; /* Warna teks gelap */
            margin-bottom: 20px; /* Margin bawah */
        }
        label {
            font-weight: bold; /* Menebalkan teks label */
            display: block; /* Membuat label berada di baris baru */
            margin-bottom: 5px; /* Margin bawah untuk label */
        }
        input[type="text"], textarea {
            width: 100%; /* Lebar penuh untuk input dan textarea */
            padding: 10px; /* Padding di dalam input */
            margin-bottom: 20px; /* Margin bawah untuk jarak antar elemen */
            border: 1px solid #ced4da; /* Border dengan warna netral */
            border-radius: 5px; /* Sudut bulat pada input */
            box-sizing: border-box; /* Menghindari masalah box-sizing */
        }
        input[type="submit"] {
            background-color: #00FF00; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            padding: 10px; /* Padding di dalam tombol */
            border: none; /* Menghilangkan border */
            border-radius: 5px; /* Sudut bulat pada tombol */
            cursor: pointer; /* Menunjukkan bahwa tombol dapat diklik */
            width: 100%; /* Lebar penuh untuk tombol */
            font-size: 16px; /* Ukuran font pada tombol */
        }
        input[type="submit"]:hover {
            background-color: #00FF00; /* Warna tombol saat hover */
        }
    </style>
</head>

<body>
    <div class="container"><h2>Selamat Datang di Buku Tamu</h2>

<form action="index.php" method="post">
    <label for="name">Nama:</label><br>
    <input type="text" name="name" required><br><br>
    <label for="comment">Komentar:</label><br>
    <textarea name="comment" rows="5" required></textarea><br><br>
    <input type="submit" value="Kirim">
</form>    
</div>
</body>
</html>
