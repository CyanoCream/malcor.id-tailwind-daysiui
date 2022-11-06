<?php

namespace Database\Seeders;
use App\Models\Layanan;
use App\Models\News;
use App\Models\Pesanan;
use App\Models\Portofolio;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'nama_layanan' => 'Pengadaan Pakaian Perusahaan',
            'keterangan' => 'Jasa pembuatan baju polo, kemeja seragam PDH/PDL, kaos, jaket, dan pakain lainnya.',
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/web-asset-srisandang-8-2.png'
        ]);

        Layanan::create([
            'nama_layanan' => 'Pembuatan Kaos Premium',
            'keterangan' => 'Pembuatan kaos khusus kualitas clothing Brand. Spesifikasi sablon premium, dan pilihan bahan terbaik dengan harga bersahabat.',
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/web-asset-srisandang-9-2.png'
        ]);

        Layanan::create([
            'nama_layanan' => 'Jasa Makloon: Potong, Sablon, Jahit, Packing.',
            'keterangan' => 'Membantu kebutuhan produksi anda dengan cepat, mutu terbaik, dan bertanggung jawab.',
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/web-asset-srisandang-13-2.png'
        ]);

        News::create([
            'judul' => 'Inilah Proses Pengerjaan Sablon manual Plastisol',
            'konten' => 'Pecah warna,
            Sablon Plastisol adalah salah satu sablon yang di proses secara manual atau digesut dengan tenaga manusia. Maka dari itu setiap design harus dipecah ke masing-masing warna penyusunnya. Setiap warna akan menjadi satu screen. Jika design tersusun dari 3 warna, maka akan dibutuhkan 3 screen untuk melakukan proses sablon. Jika design terdiri dari 8 warna, maka dibutuhkan 8 screen juga untuk melakukan proses sablon. Setelah design dipecah maka akan di print dengan tinta hitam yang selanjutnya akan masuk di proses afdruk.
            Afdruk
            Setelah hasil pecah warna di print, kemudian hasil print setiap warna akan dibuat menjadi screen melalui proses afdruk. Proses afdruk adalah proses mencetak gambar pada sebuah screen yang nantinya akan dijadikan cetakan untuk disablon.
            Setting screen
            Setiap hasil afdruk yang masing-masing mewakili satu warna kemudian di setting di meja sablon untuk disatukan menjadi sebuah gambar sesuai design yang dipesan customer.
            Proses ini juga dibarengi dengan proses pencampuran warna tinta plastisol sesuai dengan warna penyusun pada design.
            Proving
            Ini adalah proses yang paling krusial. Sebelum disablon secara masal, hasil setting sablon dipastikan sama dengan design yang di pesan customer. Hal yang dicocokan meliputi: warna, font, kelengkapan huruf, ejaan, ukuran design, dan kelengkapan elemen design.
            Mass Printing
            Setelah hasil proving bisa dikatakan memenuhi syarat cetak, lalu lanjut proses sablon secara massal. Dalam proses ini sablon dilakukan per warna, dikeringkan per warna juga hingga membentuk design utuh di semua kaos.
            Finishing
            Setelah di sablon, hasil sablon di finishing sesuai permintaan customer. Jenis finishing yang paling umum yaitu finishing doff. Alat yang digunakan adalah mesin heatpress.
            Itulah 6 proses pengerjaan sablon manual menggunakan tinta plastisol.',
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/11/Featured-Image-Article-5.png'
        ]);

        News::create([
            'judul' => 'Pesan Dari KEMENDIKBUD untuk Kami',
            'konten' => 'For the first time bikin di Srisandang setelah beberapa kali coba di vendor konveksi lainnya..
            Good Job deh pokoknya..Mulai dengan customer service nya dari awal dihubungi langsung sat set sat set.. fast response 👍
            Lanjut ke proses order, Srisandang paham banget keperluan kita apa, dan disarankan juga bahan2 yg direkomendasiin apa..
            Masuk ke Produksi, laporan SPK dulu nih, kalo kita oke, mereka langsung eksekusi..
            Trus Quality Check juga loh.. mereka share foto2 lagi produksinya sampai detil jahitan or sablonnya..
            Udah deh pas jadi langsung kirim, pas selesai unboxing langsung lihat hasilnya SUPEEERRR..
            
            Jadinya lanjut deh order barang lain lagi disini. Hahahaa
            Sebelumnya bikin kaos dengan pilihan combed 24s 300pcs..
            Sekarang pesen lagi kemeja PDH 40pcs..
            Hoiyaa satu lagi, harga produksinya Srisandang itu AFFORDABLE bos.. heran murah tp qualitynya yahud.. wkwkwk
            
            Sukses terus bisnisnya 😎😎
            Udah ku rekomendasiin juga ke temenku yg lain kalo perlu konveksi, ke Srisandang aja.. 😊',
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/Featured-Image-Article-4-2.png'
        ]);

        News::create([
            'judul' => 'Ciri – Ciri Vendor yang Produksi Sendiri (Bukan Broker)',
            'konten' => 'Saat ingin memesan baju di sebuah vendor, kita dihadapkan dengan banyak pilihan vendor. Kita juga sering bertanya-tanya, apakah vendor yang kita pilih benar-benar mengerjakan sendiri atau hanya melempar pada vendor lain. Nah disini kita akan membahas tuntas ciri-ciri vendor yang bukan makelar.

            Menerima jasa makloon:
            Hal ini bisa menjadi salah satu indikator karena, ketika memiliki alat sendiri, vendor cenderung untuk menggunakan alatnya tidak hanya untuk mengerjakan pesanannya sendiri. Vendor itu pasti membuka layanan untuk menerima jasa pembuatan pakaian secara parsial, misal menerima jasa jahit untuk vendor yang belum memiliki mesin jahit. Jika vendor belum memiliki alat sendiri secara lengkap akan sangat repot jika membuka layanan makloon.
            Ada konten tentang alat-alat produksi secara rutin
            Di era digital seperti ini kita bisa mengulik sebuah perusahaan dari apa yang mereka tampilkan di dunia maya. Jika vendor memiliki alat sendiri, dalam konten keseharian pasti menampilkan kesibukan produksi vendor tersebut. Dari konten-konten harian seperti ini kita bisa lebih mengetahui apakah vendor ini mengerjakan pesanannya sendiri atau hanya melempar pekerjaan di vendor lain.
            Bisa menentukan estimasi lama pengerjaan
            Jika vendor memiliki alat sendiri maka akan lebih mudah bagi vendor itu untuk menentukan jadwal produksi. Vendor tersebut bisa memonitor seberapa banyak antrian dan menentukan jadwal lembur untuk divisi produksi. Jika vendor melempar pekerjaan pada vendor lain, maka estimasi pekerjaan akan bergantung pada vendor lain.
            Memberikan informasi secara transparan
            saat kita menunggu pesanan kita untuk jadi, kita seringkali menanyakan sampai mana proses produksi pesanan kita. Jika vendor mengerjakan pesanan kita secara inhouse maka akan cukup mudah bagi vendor untuk memberikan informasi tentang proses pengerjaan pesanan kita.
            jadi itulah 4 hal yang bisa kita cari saat memesan pakaian di sebuah vendor. Sekian dari kami, semoga bermanfaat. Terima kasih!',
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/6-1.png'
        ]);

        Portofolio::create([
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-05-at-10.41.03-768x1024.jpeg',
            'gmbr_2' => 'https://srisandang.com/wp-content/uploads/2022/11/WhatsApp-Image-2022-11-05-at-10.41.03-768x1024.jpeg',
            'jenis' => 'Tumbol’s Family'
        ]);

        Portofolio::create([
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-8-2.png',
            'gmbr_2' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-8-2.png',
            'jenis' => 'Vihara Natuna'
        ]);

        Portofolio::create([
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-6-2.png',
            'gmbr_2' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-8-2.png',
            'jenis' => 'Mangata'
        ]);

        Portofolio::create([
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-5-2.png',
            'gmbr_2' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-8-2.png',
            'jenis' => 'Civil Enginering'
        ]);

        Portofolio::create([
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-3-2.png',
            'gmbr_2' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-8-2.png',
            'jenis' => 'Toko Bakmi'
        ]);

        Portofolio::create([
            'gambar' => 'https://srisandang.com/wp-content/uploads/2022/10/1E6F922F-569A-4EFE-9009-9F1CA5CD5E93-2-e1664875891934-819x1024.jpg',
            'gmbr_2' => 'https://srisandang.com/wp-content/uploads/2022/10/THE-VIBE-8-2.png',
            'jenis' => 'Relax'
        ]);

        


    }
}
