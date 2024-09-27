<!DOCTYPE html>
<html lang="en">
<style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
            font-family: Arial, sans-serif; /* Font yang lebih bersih */
        }
        .container {
            width: 80%;
            margin: 50px auto; /* Mengatur margin untuk pusat */
            padding: 20px;
            background-color: #fff; /* Warna latar belakang kontainer */
            border-radius: 10px; /* Sudut bulat */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
        }
        h3 {
            text-align: center; /* Teks berada di tengah */
            color: #343a40; /* Warna teks gelap */
            margin-bottom: 30px; /* Margin bawah */
        }
        table {
            width: 100%; /* Tabel mengambil lebar penuh */
            border-collapse: collapse; /* Menghilangkan celah antar border */
        }
        th, td {
            padding: 12px; /* Padding untuk sel */
            text-align: left; /* Teks berada di kiri */
            border: 1px solid #dee2e6; /* Border sel */
        }
        th {
            background-color: #00FF00; /* Warna latar belakang header */
            color: white; /* Warna teks header */
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna latar belakang baris genap */
        }
        tr:hover {
            background-color: #e9ecef; /* Warna saat hover */
        }
    </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Daftar Komentar</h3>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Nama</th>
        <th>Komentar</th>
        <th>Waktu</th>
    </tr>
    <?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
    <tr>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['comment']); ?></td>
        <td><?php echo $row['created_at']; ?></td>
    </tr>
    <?php } ?>    
</body>
</html>

