<?php
/*
 * log_converter.php
 *
 * Apache Log Analayzer
 *
 * @category   Blue Team Tools
 * @package    Apache Log Analyzer
 * @author     0x545e
 * @copyright  2023 0x545e
 * @license    https://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    2.0.0
 * @link       https://github.com/TaufikSharePoint/apacheloganalayzer
 *
 *
*/

$logFilePath = $_POST['logFilePath'];
$outputFilePath = $_POST['outputFilePath'];

// Fungsi untuk mengubah format waktu
function changeDateFormat($logLine) {
    // Mencocokkan format waktu pada baris log menggunakan ekspresi reguler
    preg_match('/\[(\d{2})\/(\w{3})\/(\d{4}):(\d{2}):(\d{2}):(\d{2})/', $logLine, $matches);

    if (count($matches) === 7) {
        $day = $matches[1];
        $month = $matches[2];
        $year = $matches[3];
        $hour = $matches[4];
        $minute = $matches[5];
        $second = $matches[6];

        // Mengonversi nama bulan menjadi angka bulan
        $monthNum = date('m', strtotime($month));

        // Menggabungkan kembali format waktu baru
        $newTime = "{$day}/{$monthNum}/{$year} {$hour}:{$minute}:{$second} ";

        // Mengganti format waktu pada baris log dengan yang baru, termasuk tanda ]
        $logLine = str_replace($matches[0], $newTime, $logLine);
    }

    return str_replace(']', '', $logLine);
}

// Membaca log dari file
$logLines = file($logFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($logLines === false) {
    die("Gagal membaca file log.");
}

// Mengubah format waktu pada setiap baris log dan menghilangkan tanda ]
$modifiedLogLines = array_map('changeDateFormat', $logLines);

// Menyimpan hasil log yang telah diubah format waktunya ke dalam file
$outputContent = implode(PHP_EOL, $modifiedLogLines);
$outputResult = file_put_contents($outputFilePath, $outputContent);

if ($outputResult === false) {
    die("Gagal menyimpan file output.");
}

//echo "Hasil log telah disimpan dalam file: $outputFilePath";

header("Location: berhasil.html");
//exit();

?>

