<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ES-SPAWNS</title>

    assets/images/logo.svg

    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:#f8fafc;
        }

        .navbar{
            background:#0f172a;
            color:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 40px;
            position:sticky;
            top:0;
            z-index:999;
        }

        .logo{
            display:flex;
            align-items:center;
            gap:12px;
        }

        .logo img{
            width:45px;
            height:45px;
        }

        .logo span{
            font-size:24px;
            font-weight:bold;
        }

        .menu a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            transition:.3s;
        }

        .menu a:hover{
            color:#60a5fa;
        }

        .hero{
            min-height:90vh;
            background:linear-gradient(
                135deg,
                #0f172a,
                #1e40af,
                #7c3aed
            );

            display:flex;
            justify-content:center;
            align-items:center;
            text-align:center;
            color:white;
            padding:30px;
        }

        .hero-content h1{
            font-size:72px;
            margin-bottom:15px;
        }

        .hero-content p{
            font-size:22px;
            margin-bottom:30px;
            color:#e2e8f0;
        }

        .btn{
            display:inline-block;
            padding:15px 30px;
            background:white;
            color:#2563eb;
            text-decoration:none;
            border-radius:10px;
            font-weight:bold;
            transition:.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }

        .section{
            max-width:1200px;
            margin:auto;
            padding:80px 20px;
        }

        .section-title{
            text-align:center;
            margin-bottom:50px;
        }

        .section-title h2{
            font-size:42px;
            color:#0f172a;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
            gap:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            padding:25px;
            box-shadow:0 10px 25px rgba(0,0,0,.08);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

        .card-icon{
            font-size:40px;
            color:#2563eb;
            margin-bottom:15px;
        }

        .card h3{
            margin-bottom:10px;
            color:#0f172a;
        }

        .download-btn{
            display:inline-block;
            margin-top:15px;
            padding:10px 20px;
            background:#2563eb;
            color:white;
            border-radius:8px;
            text-decoration:none;
        }

        .stats{
            background:#0f172a;
            color:white;
            padding:80px 20px;
        }

        .stats-grid{
            max-width:1200px;
            margin:auto;
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:20px;
        }

        .stat{
            text-align:center;
            background:#1e293b;
            padding:30px;
            border-radius:15px;
        }

        .stat h3{
            font-size:42px;
            margin-bottom:10px;
        }

        footer{
            background:#020617;
            color:white;
            text-align:center;
            padding:25px;
        }

        @media(max-width:768px){

            .navbar{
                flex-direction:column;
                gap:15px;
            }

            .hero-content h1{
                font-size:48px;
            }

            .stats-grid{
                grid-template-columns:1fr;
            }

        }

    </style>

</head>

<body>

<!-- Navbar -->
<header class="navbar">

    <div class="logo">
        assets/images/logo.svg
        <span>ES-SPAWNS</span>
    </div>

    <div class="menu">
        index.php
            <i class="fa-solid fa-house"></i> หน้าแรก
        </a>

        download.php
            <i class="fa-solid fa-download"></i> ดาวน์โหลด
        </a>

        about.php
            <i class="fa-solid fa-circle-info"></i> เกี่ยวกับ
        </a>

        admin/login.php
            <i class="fa-solid fa-user-shield"></i> Admin
        </a>
    </div>

</header>

<!-- Hero -->
<section class="hero">

    <div class="hero-content">

        <h1>ES-SPAWNS</h1>

        <p>
            Download Center & Resource Hub
            <br>
            ศูนย์รวมไฟล์ เอกสาร และทรัพยากรสำหรับดาวน์โหลด
        </p>

        download.php
            ดาวน์โหลดไฟล์
        </a>

    </div>

</section>

<!-- Latest Files -->
<section class="section">

    <div class="section-title">
        <h2>ไฟล์ล่าสุด</h2>
    </div>

    <div class="cards">

        <div class="card">

            <div class="card-icon">
                <i class="fa-solid fa-file-pdf"></i>
            </div>

            <h3>Next.js Ebook</h3>

            <p>
                คู่มือการใช้งาน Next.js ฉบับเริ่มต้น
            </p>

            #
                ดาวน์โหลด
            </a>

        </div>

        <div class="card">

            <div class="card-icon">
                <i class="fa-solid fa-file-zipper"></i>
            </div>

            <h3>Template Pack</h3>

            <p>
                ชุด Template พร้อมใช้งาน
            </p>

            #
                ดาวน์โหลด
            </a>

        </div>

        <div class="card">

            <div class="card-icon">
                <i class="fa-solid fa-code"></i>
            </div>

            <h3>Source Code</h3>

            <p>
                ตัวอย่างระบบ PHP และ MySQL
            </p>

            #
                ดาวน์โหลด
            </a>

        </div>

    </div>

</section>

<!-- Stats -->
<section class="stats">

    <div class="stats-grid">

        <div class="stat">
            <h3>25</h3>
            <p>ไฟล์ทั้งหมด</p>
        </div>

        <div class="stat">
            <h3>520</h3>
            <p>ดาวน์โหลดแล้ว</p>
        </div>

        <div class="stat">
            <h3>1</h3>
            <p>ผู้ดูแลระบบ</p>
        </div>

    </div>

</section>

<footer>

    © <?php echo date("Y"); ?>
    ES-SPAWNS. All Rights Reserved.

</footer>

</body>
</html>
