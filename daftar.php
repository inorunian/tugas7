<html>
    <head>
        <title>::Data Registrasi::</title>
        <style type="text/css">
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-size: cover;
                background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                padding: 20px;
            }
            .container{
                background-color: white;
                border: 3px solid grey;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                max-width: 600px;
                width: 100%;
            }
            h1{
                text-align: center;
                color: #333;
                margin-bottom: 30px;
                font-size: 28px;
            }
            .success-message{
                background-color: #d4edda;
                color: #155724;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #c3e6cb;
                border-radius: 5px;
                text-align: center;
                font-weight: bold;
            }
            table{
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
            th, td{
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th{
                background-color: #f8f9fa;
                font-weight: bold;
                color: #333;
                width: 30%;
            }
            td{
                color: #666;
            }
            .back-button{
                text-align: center;
                margin-top: 20px;
            }
            .back-button button{
                background-color: #007bff;
                color: white;
                padding: 12px 24px;
                text-decoration: none;
                border: none;
                border-radius: 5px;
                display: inline-block;
                cursor: pointer;
                transition: background-color 0.3s;
                font-size: 16px;
            }
            .back-button button:hover{
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Data Registrasi User</h1>
            
            <?php if (isset($_POST['submit'])): ?>
                <?php
                $nama_depan = isset($_POST['nama_depan']) ? $_POST['nama_depan'] : '';
                $nama_belakang = isset($_POST['nama_belakang']) ? $_POST['nama_belakang'] : '';
                $asal_kota = isset($_POST['asal_kota']) ? $_POST['asal_kota'] : '';
                $umur = isset($_POST['umur']) ? (int)$_POST['umur'] : 0;
                
                if ($umur < 10) {
                    echo '<div style="text-align: center; color: #dc3545; padding: 20px;">
                        <h3>Error: Umur minimal 10 tahun</h3>
                        <p>Silakan isi form registrasi dengan umur minimal 10 tahun.</p>
                        <div class="back-button">
                            <button onclick="window.location.href=\'http://localhost/index.html\'">Kembali ke Form Registrasi</button>
                        </div>
                    </div>';
                } else {
                    echo '<div class="success-message">
                        Registrasi Berhasil!
                    </div>';
                    
                    echo '<table>';
                    echo '<tr><th>No</th><th>Nama Depan</th><th>Nama Belakang</th><th>Asal Kota</th><th>Umur</th></tr>';
                    
                    for ($i = 1; $i <= $umur; $i++) {
                        if ($i % 2 == 1 && $i != 7 && $i != 13) {
                            echo '<tr>';
                            echo '<td>' . $i . '</td>';
                            echo '<td>' . htmlspecialchars($nama_depan) . '</td>';
                            echo '<td>' . htmlspecialchars($nama_belakang) . '</td>';
                            echo '<td>' . htmlspecialchars($asal_kota) . '</td>';
                            echo '<td>' . $umur . '</td>';
                            echo '</tr>';
                        }
                    }
                    
                    echo '</table>';
                    
                    echo '<div class="back-button">
                        <button onclick="window.location.href=\'http://localhost/index.html\'">Kembali ke Form Registrasi</button>
                    </div>';
                }
                ?>
            <?php else: ?>
                <div style="text-align: center; color: #dc3545; padding: 20px;">
                    <h3>Error: Data tidak ditemukan</h3>
                    <p>Silakan isi form registrasi terlebih dahulu.</p>
                    <div class="back-button">
                        <button onclick="window.location.href=\'http://localhost/index.html\'">Kembali ke Form Registrasi</button>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </body>
</html>