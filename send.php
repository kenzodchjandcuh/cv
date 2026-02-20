<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Ambil data dari form
    $nama = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $telp = $_POST['phone'] ?? '';
    $pesan = $_POST['message'] ?? '';
    $option = $_POST['option'] ?? 'auto';

    // 2. Validasi sederhana (pastikan tidak kosong)
    if (empty($nama) || empty($email) || empty($telp) || empty($pesan)) {
        echo json_encode(['status' => false, 'reason' => 'Mohon isi semua data!']);
        exit;
    }

    // 3. Susun isi pesan yang akan masuk ke WA Anda
    $isiPesanWA = "🔔 *PESAN BARU DARI WEB*\n\n" .
                  "👤 Nama: $nama\n" .
                  "📧 Email: $email\n" .
                  "📞 No. Telp: $telp\n\n" .
                  "💬 Pesan:\n\"$pesan\"";

    // 4. Tentukan target berdasarkan pilihan
    if ($option === 'developer') {
        $target = '082216460833'; // Nomor pengembang (ganti jika berbeda)
    } else {
        $target = '082216460833'; // Kirim otomatis ke nomor default
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.fonnte.com/send',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array(
    'target' => $target,
    'message' => $isiPesanWA, 
    'countryCode' => '62', //optional
    ),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Hwc71cBatyeUUrxizrSQ' //change TOKEN to your actual token
      ),
    ));

    $response = curl_exec($curl);
    if (curl_errno($curl)) {
      $error_msg = curl_error($curl);
    }
    curl_close($curl);

    if (isset($error_msg)) {
     echo json_encode(['status' => false, 'reason' => $error_msg]);
    } else {
     echo $response;
    }
} else {
    echo json_encode(['status' => false, 'reason' => 'Invalid request method.']);
}
?>