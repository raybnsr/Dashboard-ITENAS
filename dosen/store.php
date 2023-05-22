<?php
session_start();
require_once '../helper/connection.php';

$nidn = $_POST['nidn'];
$nama_dosen = $_POST['nama'];
$jenkel = $_POST['jenkel'];
$keahlian = $_POST['keahlian'];

$query = mysqli_query($connection, "insert into dosen(nidn, nama_dosen, jenkel_dosen, keahlian) value('$nidn', '$nama_dosen', '$jenkel', '$keahlian')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
