<!DOCTYPE html>
<html>
<head>
    <title>Kartu Anggota</title>
</head>
<body>
    
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>Kartu Anggota</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
            border: 1px solid #000;
            padding: 20px;
            width: 300px;
        }
        .card h2 {
            margin: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="card">
        <!-- <h1>Kartu Anggota</h1>
    <p>Member ID: <?= $member['member_id']; ?></p> -->
    <p>Nama: <?= $member['first_name']; ?></p>
    <p>No Telepon:  <?= $member['phone']; ?></p>
    <p>Lokasi: <?= esc($member['address']); ?></p>
    </div>
</body>
</html>