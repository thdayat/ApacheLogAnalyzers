# Apache Log Analayzer


### Tentang
Aplikasi ini dapat digunakan dalam melakukan pembacaan dan analisis dari Akses Log web server jenis Apache. Dengan menggunakan aplikasi ini, pengguna juga dapat melakukan pencarian secara spesifik melalui query string.

![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/b7e925e2-e9a0-481d-99ac-235905b1905c)

---

### Penyesuaian Log
Sebelum menggunakan aplikasi, perlu dilakukan sedikit penyesuaian terhadap Log. Penyesuaian ini dapat dilakukan dengan menggunakan fitur Log Converter pada aplikasi ini

![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/148b2517-a9db-49c2-9ef2-fc2ea0125a9c)

Langkah yang perlu dilakukan adalah sebagai berikut :
 - akses IP anda pada laman browser
 - masukkan lokasi log yang akan di konversi dan lokasi penyimpanan log hasil konversi
 
 ![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/f3bdccae-efda-4624-b692-797a85074da8)
 
 - setelah form terisi, tekan tombol konversi
 - apabila konversi berhasil, anda akan diarahkan ke laman seperti berikut
 
 ![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/046306f4-d62d-44a8-a838-cee630e0b10a)
 
 - jika ingin melanjutkan konversi log lain, bisa memilih menu Halaman Konversi
 - jika ingin melakukan analisis, bisa memilih menu Halaman Dashboard
 
### Penggunaan Program
 - lakukan penyesuaian  log seperti pada pembahasan diatas
 - ubah bagian konfigurasi `path access log` sesuai lokasi access log yang akan di analisis pada file log_parser.php
 - akses IP anda pada browser
 - masukkan pencarian kata pada kolom yang disediakan 
 
 ### Proses Pengembangan Lebih Lanjut
 - fitur multiple filtering  
