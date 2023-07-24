<?php
require 'config/db_connect.php';
require 'config/function.libs.php';
?>

    
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website Desa Salo Timur</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">

  </head>
  <body>
    <header>
    <nav class="navbar">
        <div class="logo">
          <img src="assets/images/bgg.png" alt="Logo">
        </div>
        <ul>
          <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-info-circle"></i> Kelembagaan</a>
            <div class="dropdown-content">
              <a href="bpd.php">BPD</a>
              <a href="lpm.php">LPM</a>
              <a href="pkk.php">PKK</a>
              <a href="karang.php">Karang Taruna</a>
              <a href="posyandu.php">Posyandu</a>
              <a href="tani.php">Kelompok Tani</a>
              <a href="tokoh.php">Tokoh Agama</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-cogs"></i> Penduduk</a>
            <div class="dropdown-content">
              <a href="penduduk.php">Data Penduduk</a>
              <a href="grafik.php">Grafik Penduduk</a>
              <a href="pps.php">Data PPS</a>
              <a href="tps.php">Data TPS</a>
              <a href="dpt.php">Data DPT</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-images"></i> Gallery</a>
            <div class="dropdown-content">
              <a href="galeri.php">foto</a>
              <a href="video.php">Video</a>
            </div>
          </li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-envelope"></i> Profil</a>
            <div class="dropdown-content">
              <a href="struktur.php">Struktur</a>
              <a href="staff.php">Staff</a>
              <a href="rt.php">Data RT/RW</a>
            </div>
          </li>
          <li><a href="#"><i class="fas fa-cogs"></i> Kontak</a></li>
          <li class="dropdown">
            <a href="#" class="dropbtn"><i class="fas fa-images"></i> Lainnya</a>
            <div class="dropdown-content">
              <a href="#">File Download</a>
              <a href="#">Agenda</a>
              <a href="#">Konsultasi</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    <style>
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        background-color: #1e3a5d; /* Dark Blue color */
        justify-content: flex-start;
      }
      
      .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
      }
      
      .navbar ul li {
        margin-right: 10px;
      }
      
      .navbar ul li a {
        text-decoration: none;
        color: #fff; /* White color */
        padding: 10px;
      }
      
      /* Styles for the logo */
      .logo {
        display: flex;
        align-items: center;
      }
      
      .logo img {
        height: 50px; /* Adjust the height as needed */
        margin-right: 10px;
      }
      
      /* Styles for the dropdown menu */
      .dropdown {
        position: relative;
      }
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #1e3a5d; /* Dark Blue color */
        min-width: 200px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      
      .dropdown:hover .dropdown-content {
        display: block;
      }
      
      .dropdown-content a {
        color: #fff; /* White color */
        padding: 10px;
        text-decoration: none;
        display: block;
      }
      
      /* Responsive styles */
      @media screen and (max-width: 768px) {
        .logo img {
          height: 40px; /* Adjust the height as needed */
        }
        
        .navbar ul li {
          margin-right: 0;
          margin-bottom: 10px;
        }
        
        .dropdown-content {
          min-width: 160px;
        }
      }
      
      @media screen and (max-width: 480px) {
        .logo img {
          height: 30px; /* Adjust the height as needed */
        }
      }
    </style>