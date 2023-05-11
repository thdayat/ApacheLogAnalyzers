# Apache Log Analayzer

## Deskripsi
### Tentang
Aplikasi ini dapat digunakan dalam melakukan pembacaan dan analisis dari Akses Log web server jenis Apache. Dengan menggunakan aplikasi ini, pengguna juga dapat melakukan pencarian secara spesifik melalui query string.

![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/fd8a95c4-27d7-4986-b421-2cc29ec11c94)

---

### Penyesuaian Log
Sebelum menggunakan aplikasi, perlu dilakukan sedikit penyesuaian terhadap Log. Penyesuaian ini dapat dilakukan dengan alat bantu Olah Kata seperti [Notepad++](https://notepad-plus-plus.org/downloads/v8.5.2/).
Langkah yang perlu dilakukan adalah sebagai berikut :
 - Buka alat bantu olah kata, dalam hal ini kami menggunakan Notepad++
 - Lalu gunakan fitur `Find and Replace` dengan menekan tombol `Ctrl + f`
 - Ubah bulan dalam Huruf menjadi Angka seperti pada gambar berikut
 
   ![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/e107aa96-7f0f-4578-9686-3944ccd6dc95)
   
 - Ubah format Tanggal dengan menghilangkan tanda Kurung Siku Besar di kedua sisi
 
   ![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/7c1b6cd8-c677-467c-b642-400f2e5bc8ea)
   
   ![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/012e5562-215a-4e9a-936c-56d95df8fbe3)
   
 - Ubah format 'tanggal/bulan/tahun:jam:menit:detik' menjadi 'tanggal/bulan/tahun jam:menit:detik'  dengan menghilangkan tanda `:` antara tahun dan jam
 
   ![image](https://github.com/TaufikSharePoint/apacheloganalayzer/assets/117842809/5e5648bf-3cc3-47a8-a88e-4f81f46dd440)


### Penggunaan Program
 - lakukan penyesuaian  log seperti pada pembahasan diatas
 - ubah bagian konfigurasi `path access log` sesuai lokasi access log yang akan di analisis
 - akses IP anda pada browser
 - masukkan pencarian kata pada kolom yang disediakan 
 
 ### Proses Pengembangan Lebih Lanjut
 - penyesuaian log otomatis
 - fitur multiple filtering  
