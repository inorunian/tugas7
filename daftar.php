<html>
    <head>
        <title>::Data Registrasi::</title>
        <style type="text/css">
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-size: cover;
                background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }
            .container {
                background-color: white;
                border: 2px solid grey;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 3px 6px rgba(0,0,0,0.1);
                width: 90%;
                max-width: 480px;
                max-height: 500px;
                overflow-y: auto;
            }
            h1 {
                text-align: center;
                color: #333;
                margin-bottom: 15px;
                font-size: 20px;
            }
            .success-message {
                background-color: #d4edda;
                color: #155724;
                padding: 8px;
                margin-bottom: 12px;
                border: 1px solid #c3e6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
                font-size: 13px;
            }
            .error-message {
                background-color: #f8d7da;
                color: #721c24;
                padding: 10px;
                border: 1px solid #f5c6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
                margin-bottom: 10px;
                font-size: 13px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 10px;
                font-size: 13px;
            }
            th, td {
                padding: 8px;
                text-align: center;
                border: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                font-weight: bold;
                color: white;
            }
            tr:nth-child(even) td {
                background-color: #f9f9f9;
            }
            tr:nth-child(odd) td {
                background-color: #ffffff;
            }
            .back-button {
                text-align: center;
                margin-top: 10px;
            }
            .back-button a {
                background-color: #007bff;
                color: white;
                padding: 8px 18px;
                text-decoration: none;
                border-radius: 5px;
                display: inline-block;
                font-size: 13px;
                transition: background-color 0.3s;
            }
            .back-button a:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Data Registrasi User</h1>

            <?php if (isset($_POST['submit'])): ?>
                <?php
                    // Ambil data dari form
                    $nama_depan   = $_POST['nama_depan'];
                    $nama_belakang = $_POST['nama_belakang'];
                    $asal_kota    = $_POST['asal_kota'];
                    $umur         = (int)$_POST['umur'];
                    $nama_lengkap = strtoupper($nama_depan . " " . $nama_belakang);
                ?>

                <?php if ($umur < 10): ?>
                    <div class="error-message">
                        Umur minimal yang diperbolehkan adalah 10 tahun.
                    </div>
                    <div class="back-button">
                        <a href="index.html">Kembali ke Form Registrasi</a>
                    </div>

                <?php else: ?>
                    <div class="success-message">
                        Registrasi Berhasil!!
                    </div>

                    <table>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Umur</th>
                            <th>Asal Kota</th>
                        </tr>
                        <?php 
                            for ($i = 1; $i <= $umur; $i++): 
                                if ($i % 2 != 0 && $i != 7 && $i != 13): 
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $nama_lengkap; ?></td>
                                <td><?php echo $umur . " tahun"; ?></td>
                                <td><?php echo strtoupper($asal_kota); ?></td>
                            </tr>
                        <?php 
                                endif;
                            endfor; 
                        ?>
                    </table>

                    <div class="back-button">
                        <a href="index.html">Kembali ke Form Registrasi</a>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div style="text-align: center;">
                    <img src="https://blog.engram.us/content/images/size/w760h400/2024/01/error.png" style="width: 120px;" />
                </div>
                <div style="text-align: center; color: #dc3545; padding: 10px;">
                    <h3 style="margin: 8px 0;">Error: Data tidak ditemukan</h3>
                    <p style="font-size: 13px;">Silakan isi form registrasi terlebih dahulu.</p>
                    <div class="back-button">
                        <a href="index.html">Kembali ke Form Registrasi</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>