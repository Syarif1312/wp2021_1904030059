<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030059');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapi
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat_rumah = htmlspecialchars($data['alamat_rumah']);
  $agama = htmlspecialchars($data['agama']);
  $foto = htmlspecialchars($data['foto']);

  $query = "INSERT INTO tb_anggota 
  VALUES
  (null,'$nama','$jenis_kelamin','$alamat_rumah','$agama','$foto');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id_anggota)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_anggota WHERE id_anggota=$id_anggota") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusbuku($id_buku)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_buku WHERE id_buku=$id_buku") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function edit($data)
{
  global $conn;

  $id_anggota = $data['id_anggota'];
  $nama = htmlspecialchars($data['nama']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat_rumah = htmlspecialchars($data['alamat_rumah']);
  $agama = htmlspecialchars($data['agama']);
  $foto = htmlspecialchars($data['foto']);

  $query = "UPDATE tb_anggota SET
  nama ='$nama',
  jenis_kelamin ='$jenis_kelamin',
  alamat_rumah ='$alamat_rumah',
  agama ='$agama',
  foto ='$foto'
  WHERE id_anggota = $id_anggota;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function editbuku($data)
{
  global $conn;

  $id_buku = $data['id_buku'];
  $judul = htmlspecialchars($data['judul']);
  $penulis = htmlspecialchars($data['penulis']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $tahun = htmlspecialchars($data['tahun']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE tb_buku SET
  judul ='$judul',
  penulis ='$penulis',
  penerbit ='$penerbit',
  tahun ='$tahun',
  gambar ='$gambar'
  WHERE id_buku = $id_buku;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM tb_angggota WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function caribuku($keyword)
{
  global $conn;

  $query = "SELECT * FROM tb_buku WHERE judul LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
