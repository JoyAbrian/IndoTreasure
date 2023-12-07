<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Products::create([
            'seller_id' => 1,
            'category_id' => 2,
            'productName' => 'Kaos Lengan Panjnag Anak Laki Baju Distro Umur 10 Tahun Qurk Orkids - CREAM ALMOND, XXL',
            'slug' => 'kaos-lengan-panjnag-anak-laki-baju-distro-umur-10-tahun-qurk-orkids-cream-almond-xxl',
            'price' => 84900,
            'image' => 'img/for-seeder/product/orkids1.jpg',
            'description' => 'Baju Kaos Anak Laki Laki lengan Panjang',
            'notes' => 'Umur tidak bisa di jadikan patokan size ya mom,,Silahkan di Sesuaikan Ukuran dengan postur tubuh anak nya agar tidak salah pilih size..Jadikan sang buah hati bunda yang pertama memilikinya, jangan lewatkan kesempatan ini besok harga Normal',
            'quantity' => 10,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 1,
            'category_id' => 2,
            'productName' => 'ORKIDS Baju Kaos Anak Laki Laki Lengan Panjang 1-12 Tahun - STATE YELLOW, M',
            'slug' => 'orkids-baju-kaos-anak-laki-laki-lengan-panjang-1-12-tahun-state-yellow-m',
            'price' => 84500,
            'image' => 'img/for-seeder/product/orkids2.jpg',
            'description' => 'Baju Kaos Anak Laki Laki lengan Panjang',
            'notes' => 'Umur tidak bisa di jadikan patokan size ya mom,,Silahkan di Sesuaikan Ukuran dengan postur tubuh anak nya agar tidak salah pilih size..Jadikan sang buah hati bunda yang pertama memilikinya, jangan lewatkan kesempatan ini besok harga Normal',
            'quantity' => 13,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 1,
            'category_id' => 2,
            'productName' => 'Baju Kaos Anak Laki Laki Polos Bahan Katun Umur 10 tahun Orkids Mikato - NAVY, L',
            'slug' => 'baju-kaos-anak-laki-laki-polos-bahan-katun-umur-10-tahun-orkids-mikato-navy-l',
            'price' => 71500,
            'image' => 'img/for-seeder/product/orkids3.jpg',
            'description' => 'Baju Kaos Anak Laki Laki lengan Pendek',
            'notes' => 'Umur tidak bisa di jadikan patokan size ya mom,,Silahkan di Sesuaikan Ukuran dengan postur tubuh anak nya agar tidak salah pilih size..Jadikan sang buah hati bunda yang pertama memilikinya, jangan lewatkan kesempatan ini besok harga Normal',
            'quantity' => 14,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 2,
            'category_id' => 2,
            'productName' => 'Kikido X Ayla Cooler Bag Cream Series - 23x13x26 cm - Tas ASI',
            'slug' => 'kikido-x-ayla-cooler-bag-cream-series-23x13x26-cm-tas-asi',
            'price' => 110000,
            'image' => 'img/for-seeder/product/kikido1.jpg',
            'description' => 'Kikido merupakan toko peralatan bayi dan perlengkapan bayi online, yang menyediakan berbagai peralatan & perlengkapan bayi yang lengkap dengan harga terjangkau dan berkualitas. Produk Kikido dibuat dengan tujuan masing-masing demi kepentingan ibu dan bayi. Untuk bayi baru lahir atau newborn, Kikido menawarkan berbagai produk pakaian bayi mulai dari Sleepsuit yang merupakan Baju Bayi satu stel yang dilengkapi dengan kancing, selain itu terdapat Button Set yang merupakan pakaian bayi yang terdiri dari atasan dan bawahan yang terpisah, terdapat pula baju bayi satu bagian yang memiliki varian lengan panjang dan juga lengan pendek. Semua material yang digunakan oleh Kikido memiliki bahan premium yang aman dan nyaman untuk digunakan, begitu juga dengan perlengkapan tidur Kikido yang terdiri dari tempat tidur bayi, selimut waffle bayi, serta bantal dan guling bayi yang cocok digunakan untuk bayi.',
            'notes' => 'Kami menyadari, kami tidak luput dari kesalahan. Mohon untuk tidak melakukan komplain di chat yang bisa memicu emosi. ETIKA dan TATA KRAMA yang baik akan lebih baik untuk sama-sama menyelesaikan MASALAH YANG TERJADI.',
            'quantity' => 7,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 2,
            'category_id' => 2,
            'productName' => 'Kikido - BooBoo Long Sleeve Sleepsuit Spring - 3-12 M- Piyama Bayi - Flax Seed, 1 Tahun / L',
            'slug' => 'kikido-booboo-long-sleeve-sleepsuit-spring-3-12-m-piyama-bayi-flax-seed-1-tahun-l',
            'price' => 79000,
            'image' => 'img/for-seeder/product/kikido2.jpg',
            'description' => 'Toko ini menjual barang Official dari KikidoBaby BrandUntuk ukuran lihat di banner kami, cocok untuk usia dr newborn sampai dengan max 36 bulan (tergantung size anaknya)',
            'notes' => 'Produk di Kikido Official Shop mempunyai 3 kelebihan : Material yang premium dengan design kekinian, Nyaman dipakai dan Bahan 100 % Cotton, Harga terjangkau.',
            'quantity' => 13,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 2,
            'category_id' => 2,
            'productName' => 'Baju Tidur Bayi -Kikido X Ayla Wynter Tencel Long Bodysuit - Tiger, 0-6 Bulan/S',
            'slug' => 'baju-tidur-bayi-kikido-x-ayla-wynter-tencel-long-bodysuit-tiger-0-6-bulan-s-9f4ed',
            'price' => 219000,
            'image' => 'img/for-seeder/product/kikido3.jpg',
            'description' => 'Jadikan KIKIDO X AYLA Wynter Tencel Long Bodysuit Set sebagai pilihan daily outfit buah hati Anda yang terbaik. Terdiri dari 1 pakaian bayi one-piece dan 1 celana panjang bayi yang terdapat karet elastis di bagian pinggang, membantu memberikan kenyamanan ekstra bagi si Kecil saat beraktivitas sehari-hari. Dirancang dengan desain yang simple dan stylish, ditambah warna yang playful dan motif yang lucu, cocok untuk bayi laki-laki dan perempuan. Dilengkapi dengan opening snap button di bagian depan dan bawah untuk memudahkan Anda saat memakaikan pakaian pada si Kecil ataupun saat mengganti popok. Berbahan material Tencel yang berasal dari alam (sustainable)* yang memiliki kelebihan lembut di kulit, manajemen kelembapan, terasa sejuk dan kering, meningkatkan kemampuan bernapas, dan menghambat pertumbuhan bakteri. Tersedia dalam ukuran yang bervariasi, mulai dari usia 0-6 bulan, 6-12 bulan, hingga 1 tahun.',
            'notes' => 'Kikido merupakan toko peralatan bayi dan perlengkapan bayi online, yang menyediakan berbagai peralatan & perlengkapan bayi yang lengkap dengan harga terjangkau dan berkualitas. Produk Kikido dibuat dengan tujuan masing-masing demi kepentingan ibu dan bayi.',
            'quantity' => 58,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 3,
            'category_id' => 3,
            'productName' => 'Fantech ATOM96 MK890 RGB Keyboard Gaming Mechanical Full Size - ATOM96 HITAM, Blue Switch',
            'slug' => 'fantech-atom96-mk890-rgb-keyboard-gaming-mechanical-full-size-atom96-hitam-blue-switch',
            'price' => 259000,
            'image' => 'img/for-seeder/product/fantech1.jpg',
            'description' => 'Keyboard ATOM96 telah dilengkapi denga 96 tombol untuk memudahkan akses tombol-tombol fungsi yang dibutuhkan. Dengan fungsi tombol yang lengkap, keyboard ini tetap memiliki ukuran minimalis dan compact untuk memberikan ruang lebih pada setup kamu.',
            'notes' => 'HARAP TELITI DALAM MEMILIH VARIAN Pandun memilih VARIAN (lihat selengkapnya di varian ada tombol Lihat Panduan), ATOM96 = Layout 96% dengan KNOB 96 tombol, ATOM TKL = Layout TKL dengan 87 tombol, ATOM FULL SIZE = Layout Full Size dengan 108 tombol',
            'quantity' => 5,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 3,
            'category_id' => 3,
            'productName' => 'Fantech ALUCASE for Maxfit61 60% Keyboard Gaming Mechanical - Black',
            'slug' => 'fantech-alucase-for-maxfit61-60-keyboard-gaming-mechanical-black',
            'price' => 699000,
            'image' => 'img/for-seeder/product/fantech2.jpg',
            'description' => 'ALUCASE khusus untuk Keyboard Gaming Fantech MAXFIT61',
            'notes' => 'inside the box 1pcs ALUCASE 1pcs Dampener Foam 1pcs Plate Foam 6pcs Baut 4pcs Rounded Feet 1pcs Buku manual',
            'quantity' => 27,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 3,
            'category_id' => 3,
            'productName' => 'Fantech Gamepad Wireless Hall Effect NOVA WGP14 for PS4 PC Android - Hitam',
            'slug' => 'fantech-gamepad-wireless-hall-effect-nova-wgp14-for-ps4-pc-android-hitam-3256c',
            'price' => 439000,
            'image' => 'img/for-seeder/product/fantech3.jpg',
            'description' => 'Fantech Gamepad Wireless Hall Effect NOVA WGP14 for PS4 PC Android',
            'notes' => 'Raih keunggulan di setiap permainan dengan tombol turbo yang WGP14 sediakan. Cukup dengan menekan 1 tombol kamu bisa lakukan aksi yang berulang dengan mudah.',
            'quantity' => 25,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 4,
            'category_id' => 3,
            'productName' => 'Logitech B175 Mouse Wireless untuk Windows, Mac, Linux dan ChromeOS',
            'slug' => 'logitech-b175-mouse-wireless-untuk-windows-mac-linux-dan-chromeos',
            'price' => 112000,
            'image' => 'img/for-seeder/product/logitech1.jpg',
            'description' => 'Garansi Resmi 3 tahun Logitech Indonesia (kemasan harap disimpan untuk claim) Logitech B175 Wireless Mouse',
            'notes' => 'Mau upgrade? Ada pilihan yang lebih baik loh. Cek disini: http://bit.ly/2R42tNr_M220',
            'quantity' => 953,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 4,
            'category_id' => 3,
            'productName' => 'Logitech Brio 100 Webcam Full HD Shutter Privacy & Built-in Microphone - Off White',
            'slug' => 'logitech-brio-100-webcam-full-hd-shutter-privacy-built-in-microphone-off-white-23f07',
            'price' => 453000,
            'image' => 'img/for-seeder/product/logitech2.jpg',
            'description' => 'Logitech Brio 100 Webcam Full HD, Built in Mic, Auto-Light Balance, Privacy Shutter',
            'notes' => 'Garansi Resmi : 1 tahun',
            'quantity' => 9,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 4,
            'category_id' => 3,
            'productName' => 'Logitech Zone Vibe 100 Headphone Wireless Bluetooth Noise Cancelling - Off White',
            'slug' => 'logitech-zone-vibe-100-headphone-wireless-bluetooth-noise-cancelling-off-white',
            'price' => 1344000,
            'image' => 'img/for-seeder/product/logitech3.jpg',
            'description' => 'Logitech Headphone Bluetooth Wireless Zone Vibe 100',
            'notes' => 'Nikmati kebebasan untuk bergerak ke sana kemari dan tetap terhubung antar perangkat dengan headphone Bluetooth multipoint yang memiliki jangkauan hingga 30 meter. Dapatkan 18 jam waktu berbicara maksimum dan 20 jam waktu mendengarkan maksimum untuk satu kali pengisian daya. Logitech Headphone Bluetooth Wireless Zone Vibe 100 dibuat dengan 25% plastik Post-Consumer Recycled , kamu akan merasa nyaman menggunakan over ear headphone Bluetooth Logi ini sepanjang hari.',
            'quantity' => 7,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 5,
            'category_id' => 4,
            'productName' => 'Meja Gaming-Meja Kerja-Meja Belajar HPL - MGI02',
            'slug' => 'meja-gaming-meja-kerja-meja-belajar-hpl-mgi02',
            'price' => 1750000,
            'image' => 'img/for-seeder/product/homking1.jpg',
            'description' => 'Produksi Interior Design.... Meja 3 in 1 sebagai : Meja Gaming , Meja Kerja , Meja Belajar yg didesain futuristik berkualitas dan modern, dengan sistem laci "Push On" pada saat membuka dan menutup menjadikan Meja ini pilihan utama untuk kebutuhan anda baik yg bekerja WFO/WFH sekaligus utk mengantar putra-putri tercinta dirumah sebagai meja yg menemani hari harinya belajar dan bermain utk mencapai cita citanya...',
            'notes' => 'Meja Game work ini tersedia dalam beberapa pilihan model,warna dan ukuran (Keterangan dapat dilihat difoto->click & zoom), yg dapat disesuaikan dengan kebutuhan ruang dirumah anda . Berbahan kayu MDF dengan finishing HPL merupakan pilihan spesifikasi terbaik untuk furniture dengan sistem knockdown/Bongkar pasang pada saat ini dan dimasa depan, segera miliki Meja belajar dengan desain terbaru dengan harga yang sangat murah dan terjangkau....',
            'quantity' => 98,
            'rating' => 4.5
        ]);

        Products::create([
            'seller_id' => 5,
            'category_id' => 4,
            'productName' => 'MEJA BELAJAR ANAK / MEJA BELAJAR KARAKTER / ANAK TK - SD - meja lipat - L.O.L NOLACI',
            'slug' => 'meja-belajar-anak-meja-belajar-karakter-anak-tk-sd-meja-lipat-l-o-l-nolaci',
            'price' => 35000,
            'image' => 'img/for-seeder/product/homking2.jpg',
            'description' => 'PRODUK SPESIAL UNTUK AWAL OKTOBER YANG CERIAAA✨✨✨',
            'notes' => 'Meja yang sangat cocok digunakan untuk anak anak usia 3 sampai 12 tahun TK -SD',
            'quantity' => 445,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 5,
            'category_id' => 4,
            'productName' => 'Lemari Pakaian Sliding HPL 200 Putih Glossy - LS511',
            'slug' => 'lemari-pakaian-sliding-hpl-200-putih-glossy-ls511',
            'price' => 4266000,
            'image' => 'img/for-seeder/product/homking3.jpg',
            'description' => 'Produksi Interior Design...,Lemari model pintu sliding door finishing HPL yg dilengkapi dengan kabinet pintu kaca transparan utk meletakan barang koleksi/pajangan sehingga mudah dilihat dan dicari beserta laci laci dibawahnya utk meletakan barang2 kecil.',
            'notes' => 'minimalis,mewah,full panel mdf board 16mm,knock down bisa bongkar Pasang,ukuran jumbo',
            'quantity' => 131,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 6,
            'category_id' => 4,
            'productName' => 'Kursi Aveda AC-212',
            'slug' => 'kursi-aveda-ac-212',
            'price' => 500000,
            'image' => 'img/for-seeder/product/handal1.jpg',
            'description' => 'Aveda AC-212',
            'notes' => 'Barang yg sudah dipesan tdk bisa di tukar atau kembalikan',
            'quantity' => 10,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 6,
            'category_id' => 4,
            'productName' => 'SET Meja Makan Stainless Marmer Import Modern Mewah - a92 - Silver',
            'slug' => 'set-meja-makan-stainless-marmer-import-modern-mewah-a92-silver-d7f9f',
            'price' => 7500000,
            'image' => 'img/for-seeder/product/handal2.jpg',
            'description' => 'Sebelum melakukan transaksi dengan toko kami, dimohon untuk konfirmasi terlebih dahulu..',
            'notes' => 'Ukuran Meja : 150x90cm',
            'quantity' => 10,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 6,
            'category_id' => 4,
            'productName' => 'SET Meja Makan 4K Stainless Marmer Import Modern Mewah - a83',
            'slug' => 'set-meja-makan-4k-stainless-marmer-import-modern-mewah-a83',
            'price' => 5500000,
            'image' => 'img/for-seeder/product/handal3.jpg',
            'description' => 'Sebelum melakukan transaksi dengan toko kami, dimohon untuk konfirmasi terlebih dahulu..',
            'notes' => 'Ukuran Meja : 130x80cm',
            'quantity' => 10,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 7,
            'category_id' => 5,
            'productName' => 'Atopiclair Lotion 120ml - Free Pouch',
            'slug' => 'atopiclair-lotion-120ml-free-pouch',
            'price' => 411000,
            'image' => 'img/for-seeder/product/menarini1.jpg',
            'description' => 'Atopiclair merupakan lotion untuk memperbaiki barrier kulit dengan melembabkan, dan mengurangi sensitifitas kulit yang meradang, serta membantu mengurangi rasa gatal, burning, dan nyeri dengan melindungi kulit dari iritasi berlanjut.',
            'notes' => 'Isi: 1x Atopiclair Lotion - 120ml Free Pouch**',
            'quantity' => 8,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 7,
            'category_id' => 5,
            'productName' => 'Buy 1 Get 1 Dermatix Acne Spot Care 7gr',
            'slug' => 'buy-1-get-1-dermatix-acne-spot-care-7gr',
            'price' => 342000,
            'image' => 'img/for-seeder/product/menarini2.jpg',
            'description' => 'Dermatix Acne Spot Care dengan ekstrak kecantikan AktivGCS membantu meningkatkan tampilan bekas jerawat (mencerahkan noda hitam, melembabkan & melembutkan kulit),',
            'notes' => '2x Dermatix Acne Spot Care 7gr',
            'quantity' => 0,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 7,
            'category_id' => 5,
            'productName' => 'Emtrix Perawatan Kuku - 10ml',
            'slug' => 'emtrix-perawatan-kuku-10ml-1',
            'price' => 164460,
            'image' => 'img/for-seeder/product/menarini3.jpg',
            'description' => 'Solusi perawatan kuku pertama di Indonesia untuk kuku yang berubah warna dan bentuk karena infeksi jamur',
            'notes' => '1x Emtrix - 10ml (ED 09/24)',
            'quantity' => 45,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 8,
            'category_id' => 5,
            'productName' => 'KKV - B.Duck baby Nourishing Hair & Body Bath 2 in 1 300g',
            'slug' => 'kkv-b-duck-baby-nourishing-hair-body-bath-2-in-1-300g',
            'price' => 119000,
            'image' => 'img/for-seeder/product/kkv1.jpg',
            'description' => 'KKV - B.Duck baby Nourishing Hair & Body Bath 2 in 1 300g',
            'notes' => 'pilihan yang ideal untuk perawatan lembut dan menyeluruh bagi bayi Anda. Diformulasikan dengan bahan-bahan berkualitas, produk ini dirancang untuk membersihkan dan menutrisi rambut serta kulit bayi secara aman dan efektif.',
            'quantity' => 30,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 8,
            'category_id' => 5,
            'productName' => 'KKV - MIIMEOW Peach Soft and Tender Hand Mask',
            'slug' => 'kkv-miimeow-peach-soft-and-tender-hand-mask',
            'price' => 39900,
            'image' => 'img/for-seeder/product/kkv2.jpg',
            'description' => 'KKV - MIIMEOW Peach Soft and Tender Hand Mask',
            'notes' => 'Masker perawatan khusus ini membuat kulit tangan terlihat lebih sehat dengan memberi nutrisi pada kulit dan melembapkannya.',
            'quantity' => 24,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 8,
            'category_id' => 5,
            'productName' => 'KKV - WHITELAB·BRIGHTENING SET KKV EXCLUSIVE SET BUT 2 GET 4',
            'slug' => 'kkv-whitelab-brightening-set-kkv-exclusive-set-but-2-get-4',
            'price' => 140000,
            'image' => 'img/for-seeder/product/kkv3.jpg',
            'description' => 'KKV - WHITELAB·BRIGHTENING SET 100g+20ml+30g+10g EXCLUSIVE SET ONLY AT KKV BU2 2 GET 4 #BeneranSebagusItu',
            'notes' => 'Produk KKV - WHITELAB Brightening Set adalah paket perawatan kulit yang terdiri dari empat item berukuran 100g, 20ml, 30g, dan 10g, dirancang untuk mencerahkan dan memperkuat pelindung kulit.',
            'quantity' => 49,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 9,
            'category_id' => 6,
            'productName' => 'Flex Resistance Band (Medium) - Mini Loop Band Fitness/Exercise Flex',
            'slug' => 'flex-resistance-band-medium-mini-loop-band-fitness-exercise-flex',
            'price' => 56000,
            'image' => 'img/for-seeder/product/flex1.jpg',
            'description' => 'Tested and used by physicians and athletes, Flex Resistance Band is made with the end users in mind, accommodating wide levels of fitness for both general use and a more targeted exercises from warm-ups to trainings, cool downs, and even as a fitness program.',
            'notes' => '100.00% Rubber - Natural Rubber (NR) - Latex',
            'quantity' => 62,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 9,
            'category_id' => 6,
            'productName' => 'Bola Basket Flex Clutch - Ukuran 6 - Indoor/Outdoor Basketball (Women)',
            'slug' => 'bola-basket-flex-clutch-ukuran-6-indoor-outdoor-basketball-women',
            'price' => 350000,
            'image' => 'img/for-seeder/product/flex2.jpg',
            'description' => 'Designed with the end users in mind, FlexClutch is consistently produced with PU material to ensure suitability both for competition and training.',
            'notes' => '“Clutch your own moments”',
            'quantity' => 0,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 9,
            'category_id' => 6,
            'productName' => 'Flex Resistance Band - Super Band (Long Band) - Light (Red)',
            'slug' => 'flex-resistance-band-super-band-long-band-light-red-9b835',
            'price' => 83000,
            'image' => 'img/for-seeder/product/flex3.jpg',
            'description' => '*Untuk foto mengikuti yang foto pertama. Sementara masih dalam persiapan untuk foto2 produk yang detail',
            'notes' => 'Flex Resistance Band - Super Band',
            'quantity' => 14,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 10,
            'category_id' => 6,
            'productName' => 'SEPATU FUTSAL X MUNICH G3 INDOOR 385 - 39',
            'slug' => 'sepatu-futsal-x-munich-g3-indoor-385-39-67a58',
            'price' => 1019150,
            'image' => 'img/for-seeder/product/rank1.jpg',
            'description' => 'HARGA RETAIL Rp.1.199.000,-  HARGA RANK Sports Rp.1.020.000,-',
            'notes' => 'ORIGINAL 100%',
            'quantity' => 1,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 10,
            'category_id' => 6,
            'productName' => 'SANDAL SLIP ON ADIDAS ADILETTE AQUA - IF7370 - 7',
            'slug' => 'sandal-slip-on-adidas-adilette-aqua-if7370-7-e06e3',
            'price' => 323000,
            'image' => 'img/for-seeder/product/rank2.jpg',
            'description' => 'HARGA RETAIL Rp.380.000,-  HARGA RANK Sports Rp.323.000,- ',
            'notes' => 'ORIGINAL 100%',
            'quantity' => 2,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 10,
            'category_id' => 6,
            'productName' => 'SEPATU FUTSAL X MUNICH G3 PROFIT 387 - 42',
            'slug' => 'sepatu-futsal-x-munich-g3-profit-387-42-70fb6',
            'price' => 934150,
            'image' => 'img/for-seeder/product/rank3.jpg',
            'description' => 'HARGA RETAIL Rp.1.099.000,-  HARGA RANK Sports Rp.935.000,-',
            'notes' => 'ORIGINAL 100%',
            'quantity' => 1,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 11,
            'category_id' => 7,
            'productName' => 'Bani ismail (sejarah yang tak terlupakan tentang leluhur nabi muhammad',
            'slug' => 'bani-ismail-sejarah-yang-tak-terlupakan-tentang-leluhur-nabi-muhammad',
            'price' => 110000,
            'image' => 'img/for-seeder/product/mitra1.jpg',
            'description' => 'Bani ismail (sejarah yang tak terlupakan tentang leluhur nabi muhammad dan bangsa arab)',
            'notes' => 'Berat : 600 gram Ukuran : P : 20 / L : 13 / T : 3',
            'quantity' => 50,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 11,
            'category_id' => 7,
            'productName' => 'Isa AS ( Kisah hidup sang al-masih putra maryam yg menabjubkan dan pen',
            'slug' => 'isa-as-kisah-hidup-sang-al-masih-putra-maryam-yg-menabjubkan-dan-pen',
            'price' => 130000,
            'image' => 'img/for-seeder/product/mitra2.jpg',
            'description' => 'Isa AS ( Kisah hidup sang al-masih putra maryam yg menabjubkan dan penuh ibrah)',
            'notes' => 'Berat : 700 gram',
            'quantity' => 50,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 11,
            'category_id' => 7,
            'productName' => 'Khalid bin walid ( biografi pemimpin militer terbesar dalam sejarah)',
            'slug' => 'khalid-bin-walid-biografi-pemimpin-militer-terbesar-dalam-sejarah',
            'price' => 136000,
            'image' => 'img/for-seeder/product/mitra3.jpg',
            'description' => 'KHALID BIN WALID (BIOGRAFI PEMIMPIN MILITER TERBESAR DALAM SEJARAH - AL AKRAM',
            'notes' => 'Berat : 600 gram',
            'quantity' => 30,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 12,
            'category_id' => 7,
            'productName' => 'The Psychology of Money - Hardcover',
            'slug' => 'the-psychology-of-money-hardcover',
            'price' => 80000,
            'image' => 'img/for-seeder/product/ombotak1.jpg',
            'description' => 'Kesuksesan dalam mengelola uang tidak selalu tentang apa yang Anda ketahui. Ini tentang bagaimana Anda berperilaku. Dan perilaku sulit untuk diajarkan, bahkan kepada orang yang sangat pintar sekalipun. Seorang genius yang kehilangan kendali atas emosinya bisa mengalami bencana keuangan. Sebaliknya, orang biasa tanpa pendidikan finansial bisa kaya jika mereka punya sejumlah keahlian terkait perilaku yang tak berhubungan dengan ukuran kecerdasan formal.',
            'notes' => '“Salah satu buku keuangan terbaik dan paling orisinal.”—Jason Zweig, The Wall Street Journal',
            'quantity' => 19,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 12,
            'category_id' => 7,
            'productName' => 'Atomic Habits: Perubahan Kecil Memberikan Hasil Yang Luar Biasa',
            'slug' => 'atomic-habits-perubahan-kecil-memberikan-hasil-yang-luar-biasa',
            'price' => 86400,
            'image' => 'img/for-seeder/product/ombotak2.jpg',
            'description' => 'Orang mengira ketika Anda ingin mengubah hidup, Anda perlu memikirkan hal-hal besar. Namun pakar kebiasaan terkenal kelas dunia James Clear telah menemukan sebuah cara',
            'notes' => 'Dalam buku terobosan ini, Clear pada hakikatnya mengungkapkan bagaimana perubahan-perubahan sangat remeh ini dapat tumbuh menjadi hasil-hasil yang sangat mengubah',
            'quantity' => 78,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 12,
            'category_id' => 7,
            'productName' => 'Buku Start With Why. Simon Sinek',
            'slug' => 'buku-start-with-why-simon-sinek',
            'price' => 85000,
            'image' => 'img/for-seeder/product/ombotak3.jpg',
            'description' => 'Start with Why menggunakan contoh dunia nyata untuk menguraikan konsep Lingkaran Emas yang merangkum pentingnya mengidentifikasi tujuan untuk keberadaan organisasi sebelum hal lainnya, kemudian mengambil tindakan untuk membuat visi menjadi kenyataan. Asal mula perusahaan harus menjadi alasannya. Begitu juga dengan kehidupan pribadi kita juga. Setiap orang atau organisasi dapat menjelaskan apa yang mereka lakukan; beberapa dapat menjelaskan bagaimana mereka berbeda atau lebih baik; tetapi sangat sedikit yang bisa mengartikulasikan mengapa',
            'notes' => 'MENGAPA bukan tentang uang atau keuntungan—itu tentang hasil',
            'quantity' => 5,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 13,
            'category_id' => 3,
            'productName' => 'ACER NITRO 5 AN515 55E6 | I5 12500H 16GB 512SSD RTX3050 4GB 144Hz - Normal, 8GB / 60% sRGB',
            'slug' => 'acer-nitro-5-an515-55e6-i5-12500h-16gb-512ssd-rtx3050-4gb-144hz-normal-8gb-60-srgb',
            'price' => 12099000,
            'image' => 'img/for-seeder/product/gamerid1.jpg',
            'description' => 'ACER Nitro 5 (AN515-58-55E6) sRGB 62,5%',
            'notes' => 'Selamat Datang di GAMER.ID Official Semua Produk Yang Kami Jual Bergaransi Resmi 100% dan DIJAMIN Original',
            'quantity' => 210,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 13,
            'category_id' => 3,
            'productName' => 'Gamepad Asus ROG Ally Raikiri Pro Wireless ROG Ally PC Controller',
            'slug' => 'gamepad-asus-rog-ally-raikiri-pro-wireless-rog-ally-pc-controller',
            'price' => 2249000,
            'image' => 'img/for-seeder/product/gamerid2.jpg',
            'description' => 'Gamepad Asus ROG Ally Raikiri Pro Wireless ROG Ally PC Controller',
            'notes' => 'The ROG Raikiri Pro PC Controller features an OLED display, four rear buttons, selectable triggers, ESS DAC, customizable joystick sensitivity and response curves, and tri-mode connectivity. It’s ideal to play in wired USB-C, 2.4GHz, or Bluetooth on PCs',
            'quantity' => 5,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 13,
            'category_id' => 3,
            'productName' => 'Axioo Mybook Hype 3 i3 1005G1 16GB 256GB 14" FHD IPS - Non Bundling, 8GB/W11',
            'slug' => 'axioo-mybook-hype-3-i3-1005g1-16gb-256gb-14-fhd-ips-non-bundling-8gb-w11',
            'price' => 4449000,
            'image' => 'img/for-seeder/product/gamerid3.jpg',
            'description' => 'AXIOO MYBOOK HYPE 3 I3 1005G1 8GB 256GB DOS 14.0FHD IPS HDMI GRY',
            'notes' => 'Selamat Datang di Tokopedia GAMER.ID',
            'quantity' => 14,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 14,
            'category_id' => 8,
            'productName' => 'PS5 Suicide Squad Kill the Justice League Deluxe Edition',
            'slug' => 'ps5-suicide-squad-kill-the-justice-league-deluxe-edition',
            'price' => 1459000,
            'image' => 'img/for-seeder/product/ghunter1.jpg',
            'description' => 'Base Game + D1 Pre-Order DLC (Classic Outfits) + Deluxe Edition',
            'notes' => 'Platform: PS5',
            'quantity' => 3,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 14,
            'category_id' => 8,
            'productName' => 'PS5 Tekken 8 Ultimate Edition / Tekken8',
            'slug' => 'ps5-tekken-8-ultimate-edition-tekken8',
            'price' => 1599000,
            'image' => 'img/for-seeder/product/ghunter2.jpg',
            'description' => 'OFFICIAL RELEASE 26 JANUARY 2024',
            'notes' => 'Platform: PS5',
            'quantity' => 5,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 14,
            'category_id' => 8,
            'productName' => 'PS4 Marvels Spiderman / Spider-Man Miles Morales',
            'slug' => 'ps4-marvels-spiderman-spider-man-miles-morales',
            'price' => 449000,
            'image' => 'img/for-seeder/product/ghunter3.jpg',
            'description' => 'Reg 2 EU ENGLISH',
            'notes' => 'Tidak ada perbedaan dalam game dan bahasa',
            'quantity' => 5,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 15,
            'category_id' => 9,
            'productName' => 'Stamina Dumbbell Plastic 1 kg Silver',
            'slug' => 'stamina-dumbbell-plastic-1-kg-silver',
            'price' => 15000,
            'image' => 'img/for-seeder/product/stamina1.jpg',
            'description' => 'Dumbbell / Dumbel / Dumbell / Dumbbel / Barbel Stamina',
            'notes' => 'Stamina Dumbbell Plastik dibuat dari bahan plastik berkualitas tinggi dengan harga yang sangat terjangkau. Stamina Dumbbell Plastik cocok digunakan sehari - hari untuk kegiatan fitness dan latihan ringan hingga berat.',
            'quantity' => 70,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 15,
            'category_id' => 9,
            'productName' => 'STICK BARBEL/DUMBELL 35 cm STICK DUMBELL BAR Fitness Stick Bar Stamina',
            'slug' => 'stick-barbel-dumbell-35-cm-stick-dumbell-bar-fitness-stick-bar-stamina',
            'price' => 80000,
            'image' => 'img/for-seeder/product/stamina2.jpg',
            'description' => 'Stamina Dumbbell Bar 1 PCS yang sudah beserta dengan satu set/2 pcs mur pengunci (collar).',
            'notes' => 'Bahan Premium Chrome Material 100% Solid Bar',
            'quantity' => 10,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 15,
            'category_id' => 9,
            'productName' => 'Dumbbell Iron Plate 2 Kg Piringan Lempengan Beban Barbell Dumbell',
            'slug' => 'dumbbell-iron-plate-2-kg-piringan-lempengan-beban-barbell-dumbell',
            'price' => 60000,
            'image' => 'img/for-seeder/product/stamina3.jpg',
            'description' => 'Dumbbell Iron Plate 2 kg',
            'notes' => 'Beban penambah berat untuk barbel set dan dumbell set anda. Premium Iron Material.',
            'quantity' => 50,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 16,
            'category_id' => 9,
            'productName' => 'Girik Barbel Dumbbell | Gym Dumbel Dumbell 1 KG Kuat - Biru, 1 KG',
            'slug' => 'girik-barbel-dumbbell-gym-dumbel-dumbell-1-kg-kuat-biru-1-kg',
            'price' => 15000,
            'image' => 'img/for-seeder/product/girik1.jpg',
            'description' => 'GIRIK BARBEL DUMBBELL | GYM DUMBEL DUMBELL 1 KG KUAT dan 3 KG KUAT',
            'notes' => 'Dumbbell / Dumbel / Dumbbel / Barbel Stamina',
            'quantity' => 2244,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 16,
            'category_id' => 9,
            'productName' => 'Raket Badminton 1 Set Sudah 2 Raket sudah Pasang Senar sama Tas',
            'slug' => 'raket-badminton-1-set-sudah-2-raket-sudah-pasang-senar-sama-tas',
            'price' => 279000,
            'image' => 'img/for-seeder/product/girik2.jpg',
            'description' => 'NEW dan ORIGINAL 100% Salam, Girik Indo Store merupakan Authorized Distributor Ling Mei di Indonesia. Hanya menjual semua original produk Ling Mei. Raket dengan material maupun tecnology tinggi yang sudah disempurnakan untuk dipakai oleh pemula dan pemain profesional.',
            'notes' => '1 Paket Terdiri dari : 2 Badminton Racket Sudah Pasang Senar + Tas/Cover Bag Raket',
            'quantity' => 2744,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 16,
            'category_id' => 9,
            'productName' => 'Hand Grip by Girik Original Alat Latihan Otot 5 - 60 kg - Hitam',
            'slug' => 'hand-grip-by-girik-original-alat-latihan-otot-5-60-kg-hitam',
            'price' => 129000,
            'image' => 'img/for-seeder/product/girik3.jpg',
            'description' => 'handgrip tidak hanya membuat daya cengkeram meningkat. Tetapi juga bisa membentuk otot tangan, menjadi semakin keras dan kuat. Otot yang terbentuk baik bagian bawah maupun bagian atas. Saat melakukan pukulan, kekuatan otot tangan sangat berperan.',
            'notes' => 'Adjustable Strength: Anda dapat mengubah kekuatan yang dibutuhkan untuk menekan hand grip dengan mengubah posisi per. Kekuatan yang dibutuhkan dapat diatur dari 5kg hingga 60kg.',
            'quantity' => 19800,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 17,
            'category_id' => 10,
            'productName' => 'Smartwatch Digitec Octafit Pria dan Wanita - CH',
            'slug' => 'smartwatch-digitec-octafit-pria-dan-wanita-ch-d07c7',
            'price' => 976800,
            'image' => 'img/for-seeder/product/ontime1.jpg',
            'description' => 'Jam Tangan Pintar / Smartwatch',
            'notes' => 'Model :Octafit',
            'quantity' => 50,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 17,
            'category_id' => 10,
            'productName' => 'Jam tangan pria Lofoten Original F6518MC-SS1 Tahan Air Sapphire Glass',
            'slug' => 'jam-tangan-pria-lofoten-original-f6518mc-ss1-tahan-air-sapphire-glass',
            'price' => 799200,
            'image' => 'img/for-seeder/product/ontime2.jpg',
            'description' => 'Lofoten F6518 adalah jam tangan yang sangat menawan dengan desain yang elegan dan fungsional. Jam tangan ini adalah perpaduan sempurna antara keindahan dan keandalan.',
            'notes' => 'Jam tangan Lofoten F6518 menampilkan desain yang klasik namun tetap modern. Dibuat dengan menggunakan bahan berkualitas tinggi, jam tangan ini memiliki tali kulit asli yang lembut dan nyaman saat dikenakan. Tali kulit ini memberikan sentuhan mewah pada jam tangan dan meningkatkan kesan elegannya.',
            'quantity' => 50,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 17,
            'category_id' => 10,
            'productName' => 'Jam tangan pria Lofoten Original F6518MC-RG1 Tahan Air Sapphire Glass',
            'slug' => 'jam-tangan-pria-lofoten-original-f6518mc-rg1-tahan-air-sapphire-glass',
            'price' => 1110000,
            'image' => 'img/for-seeder/product/ontime3.jpg',
            'description' => 'Lofoten F6518 adalah jam tangan yang sangat menawan dengan desain yang elegan dan fungsional. Jam tangan ini adalah perpaduan sempurna antara keindahan dan keandalan.',
            'notes' => 'Jam tangan Lofoten F6518 menampilkan desain yang klasik namun tetap modern. Dibuat dengan menggunakan bahan berkualitas tinggi, jam tangan ini memiliki tali kulit asli yang lembut dan nyaman saat dikenakan. Tali kulit ini memberikan sentuhan mewah pada jam tangan dan meningkatkan kesan elegannya.',
            'quantity' => 50,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 18,
            'category_id' => 10,
            'productName' => 'Jam Tangan Casio Analog MQ-24 Unisex - Hitam Balok',
            'slug' => 'jam-tangan-casio-analog-mq-24-unisex-hitam-balok',
            'price' => 157000,
            'image' => 'img/for-seeder/product/arloji1.jpg',
            'description' => 'Type- type Varian yang tersedia ada 10 Varian',
            'notes' => 'Silahkan dipilih Varian yang di inginkan',
            'quantity' => 393,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 18,
            'category_id' => 10,
            'productName' => 'Digitec DG-3119T - Jam Tangan Pria - Double Time GA2100 / GA-2100',
            'slug' => 'digitec-dg-3119t-jam-tangan-pria-double-time-ga2100-ga-2100',
            'price' => 229000,
            'image' => 'img/for-seeder/product/arloji2.jpg',
            'description' => 'Jam Tangan Analog-Digital',
            'notes' => 'Dimensi 45 x 45 x 17mm',
            'quantity' => 339,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 18,
            'category_id' => 10,
            'productName' => 'Casio G-SHOCK GA-B2100FC-7ADR Jam Tangan Pria Bluetooth Solar GAB2100',
            'slug' => 'casio-g-shock-ga-b2100fc-7adr-jam-tangan-pria-bluetooth-solar-gab2100',
            'price' => 2144000,
            'image' => 'img/for-seeder/product/arloji3.jpg',
            'description' => 'Produk Brand Casio yang dijual Toko Liga Arloji',
            'notes' => 'Sehingga bisa di-KLAIM di Semua Service Center',
            'quantity' => 5,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 19,
            'category_id' => 11,
            'productName' => 'Footstep Injakan kaki Running Board Xpander Plus Pasang',
            'slug' => 'footstep-injakan-kaki-running-board-xpander-plus-pasang',
            'price' => 2750000,
            'image' => 'img/for-seeder/product/boss1.jpg',
            'description' => 'untuk xpander',
            'notes' => 'Warna  sesuai gambar',
            'quantity' => 100000,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 19,
            'category_id' => 11,
            'productName' => 'Interior UPPF Stargazer type X',
            'slug' => 'interior-uppf-stargazer-type-x',
            'price' => 600000,
            'image' => 'img/for-seeder/product/boss2.jpg',
            'description' => 'Interior UPPF',
            'notes' => 'Pelindung anti gores',
            'quantity' => 10,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 19,
            'category_id' => 11,
            'productName' => 'karpet Comfort Deluxe Bmw IX - 2BRS',
            'slug' => 'karpet-comfort-deluxe-bmw-ix-2brs-afd75',
            'price' => 1650000,
            'image' => 'img/for-seeder/product/boss3.jpg',
            'description' => 'Karpet Comfort Deluxe 12 mm adalah karpet yang di design sesuai dengan ukuran / type mobil sehingga kendaraan anda menjadi lebih mewah dan bersih .',
            'notes' => 'GARANSI 1 TAHUN',
            'quantity' => 100,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 20,
            'category_id' => 11,
            'productName' => 'HYUNDAI - IONIQ 6 - Putih',
            'slug' => 'hyundai-ioniq-6-putih-0e2d1',
            'price' => 1197000000,
            'image' => 'img/for-seeder/product/hyundai1.jpg',
            'description' => 'HYUNDAI IONIQ 6',
            'notes' => 'Tambahan Biaya Rp.3.500.000 untuk varian warna Matte',
            'quantity' => 5,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 20,
            'category_id' => 11,
            'productName' => 'HYUNDAI STARGAZER ESSENTIAL',
            'slug' => 'hyundai-stargazer-essential',
            'price' => 10000000,
            'image' => 'img/for-seeder/product/hyundai2.jpg',
            'description' => 'HYUNDAI STARGAZER',
            'notes' => 'LAUNCHING BULAN JULI 2023',
            'quantity' => 1,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 20,
            'category_id' => 11,
            'productName' => 'Hyundai STARGAZER Prime IVT One Tone 7P - silver',
            'slug' => 'hyundai-stargazer-prime-ivt-one-tone-7p-silver',
            'price' => 311800000,
            'image' => 'img/for-seeder/product/hyundai3.jpg',
            'description' => 'Hyundai STARGAZER Prime IVT One Tone 7P',
            'notes' => 'Harga OTR DKI 311.800.000',
            'quantity' => 1,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 21,
            'category_id' => 12,
            'productName' => 'Cesar Seasonal Box Multivarian 100gr Isi 4 pcs',
            'slug' => 'cesar-seasonal-box-multivarian-100gr-isi-4-pcs',
            'price' => 65272,
            'image' => 'img/for-seeder/product/pedigree1.jpg',
            'description' => '4 pcs Cesar Seasonal Box Lamb 100gr (Lamb, Chicken, Tender Lamb & Prime Beef)',
            'notes' => 'CESAR Makanan Anjing',
            'quantity' => 174,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 21,
            'category_id' => 12,
            'productName' => 'PEDIGREE® Meat Jerky Strap Makanan Anjing rasa Smokey Beef 300gr 2pcs',
            'slug' => 'pedigree-meat-jerky-strap-makanan-anjing-rasa-smokey-beef-300gr-2pcs',
            'price' => 147000,
            'image' => 'img/for-seeder/product/pedigree2.jpg',
            'description' => 'PEDIGREE® Meat Jerky Strap Makanan Anjing rasa Smokey Beef 300gr isi 2pcs',
            'notes' => 'Memiliki tekstur kenyal lembut yang tidak merusak gigi',
            'quantity' => 313,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 21,
            'category_id' => 12,
            'productName' => 'PEDIGREE® Makanan Anjing Kering Ras Mini 1.3kg - Beef & Veg',
            'slug' => 'pedigree-makanan-anjing-kering-ras-mini-1-3kg-beef-veg',
            'price' => 70380,
            'image' => 'img/for-seeder/product/pedigree3.jpg',
            'description' => 'PEDIGREE® Makanan Anjing Kering Ras Mini 1.3 Kg',
            'notes' => 'Makanan Anjing PEDIGREE®',
            'quantity' => 386,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 22,
            'category_id' => 12,
            'productName' => 'GULAPAWS Obat Jamur Anjing Kucing Cocoa Honey Balm 20ml',
            'slug' => 'gulapaws-obat-jamur-anjing-kucing-cocoa-honey-balm-20ml',
            'price' => 69000,
            'image' => 'img/for-seeder/product/petrepublic1.jpg',
            'description' => 'Organic Cocoa Honey Balm ',
            'notes' => 'For Dog - Cat ',
            'quantity' => 12,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 22,
            'category_id' => 12,
            'productName' => 'ARTHACAT Rumah Kucing Cat Tree MACKA Grey',
            'slug' => 'arthacat-rumah-kucing-cat-tree-macka-grey',
            'price' => 1380000,
            'image' => 'img/for-seeder/product/petrepublic2.jpg',
            'description' => 'Cat house - Mainan Kucing - Rumah kucing',
            'notes' => 'Brand : Arthacat',
            'quantity' => 7,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 22,
            'category_id' => 12,
            'productName' => 'KONGBIN Pasir Kucing Hyper Clumping Tofu Cat Litter 8L',
            'slug' => 'kongbin-pasir-kucing-hyper-clumping-tofu-cat-litter-8l',
            'price' => 85000,
            'image' => 'img/for-seeder/product/petrepublic3.jpg',
            'description' => 'KONGBIN Hyper Clumping Tofu Cat Litter 8L',
            'notes' => 'Kong Bin The Strongest Tofu use only Natural Ingredients from Mother Earth. No Coloring, No Fragrance inside. Make Our Beloved Cats not exposed to irritant. With Hyper Clumping Ingredients make Kong Bin be The Best Tofu in The Marketplace right now. Let your kitties do their stuff with no hard feeling.',
            'quantity' => 12,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 23,
            'category_id' => 13,
            'productName' => 'Softies 3D Surgical Masker 4Ply ( 1 box isi 20 Pcs ) - baby pink',
            'slug' => 'softies-3d-surgical-masker-4ply-1-box-isi-20-pcs-baby-pink',
            'price' => 60000,
            'image' => 'img/for-seeder/product/wahana1.jpg',
            'description' => 'Softies 3D Mask Surgical 4- ply filter',
            'notes' => 'High BFE',
            'quantity' => 8,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 23,
            'category_id' => 13,
            'productName' => 'Masker Duckbill Anak Kartun Karet Onemed 3ply',
            'slug' => 'masker-duckbill-anak-kartun-karet-onemed-3ply',
            'price' => 29000,
            'image' => 'img/for-seeder/product/wahana2.jpg',
            'description' => 'Duckbill face mask for kids |Masker duckbil untuk anak Earloop 3 ply, ideal dipakai bagi anak-anak untuk segala aktifitas, terutama didaerah berpotensi polusi udara.',
            'notes' => 'Comfort : nyaman digunakan',
            'quantity' => 3,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 23,
            'category_id' => 13,
            'productName' => 'SOFTIES HAND SANITIZER SPRAY isi 60 ML',
            'slug' => 'softies-hand-sanitizer-spray-isi-60-ml',
            'price' => 10000,
            'image' => 'img/for-seeder/product/wahana3.jpg',
            'description' => 'Softies Hand Sanitizer SPRAY 60ml',
            'notes' => 'Dibuat dari bahan-bahan terbaik dan anti bakteria yang aman untuk kulit.',
            'quantity' => 0,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 24,
            'category_id' => 13,
            'productName' => 'VISA JEPANG - WAIVER E-VISA',
            'slug' => 'visa-jepang-waiver-e-visa',
            'price' => 173250,
            'image' => 'img/for-seeder/product/altorina1.jpg',
            'description' => 'terimakasih',
            'notes' => 'proses : 7 hari kerja setelah masuk vfs jepang',
            'quantity' => 8,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 24,
            'category_id' => 13,
            'productName' => 'visa usa america',
            'slug' => 'visa-usa-america',
            'price' => 3650000,
            'image' => 'img/for-seeder/product/altorina2.jpg',
            'description' => 'terimakasih',
            'notes' => 'Visa akan Kami proses ke kedutaan.',
            'quantity' => 92,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 24,
            'category_id' => 13,
            'productName' => 'VISA SOUTH KOREA - SINGLE',
            'slug' => 'visa-south-korea-single',
            'price' => 1386000,
            'image' => 'img/for-seeder/product/altorina3.jpg',
            'description' => 'terimakasih',
            'notes' => 'proses reguler : 15-20 hari kerja setelah apply',
            'quantity' => 134,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 25,
            'category_id' => 14,
            'productName' => 'Hampers Christmas Set Large 3x3 - By Letter Box - Girl',
            'slug' => 'hampers-christmas-set-large-3x3-by-letter-box-girl-ec4a6',
            'price' => 380000,
            'image' => 'img/for-seeder/product/letter1.jpg',
            'description' => 'Christmas Hampers',
            'notes' => 'Hard Box Size 26.5 x 30 x 10cm',
            'quantity' => 20,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 25,
            'category_id' => 14,
            'productName' => 'Kado Valentine Coklat Korea - Letter Box Chocolate 3x3',
            'slug' => 'kado-valentine-coklat-korea-letter-box-chocolate-3x3',
            'price' => 140000,
            'image' => 'img/for-seeder/product/letter2.jpg',
            'description' => 'Letter Box Chocolate Ukuran Large 3x3',
            'notes' => 'Rasa yang di dapatkan Berdasarkan Warna dari setiap box ( Random )',
            'quantity' => 669,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 25,
            'category_id' => 14,
            'productName' => 'Kado Valentine Coklat Korea- Letter Box Chocolate 2x2',
            'slug' => 'kado-valentine-coklat-korea-letter-box-chocolate-2x2',
            'price' => 75000,
            'image' => 'img/for-seeder/product/letter3.jpg',
            'description' => 'Letter Box Chocolate Ukuran Kecil / Small 2x2',
            'notes' => 'Rasa yang di dapatkan Berdasarkan Warna dari setiap box ( Random )',
            'quantity' => 988,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 26,
            'category_id' => 14,
            'productName' => 'DASHING - Christmas Gift Hampers / Kado Natal / Wine / Box & Tale - Ludisia',
            'slug' => 'dashing-christmas-gift-hampers-kado-natal-wine-box-tale-ludisia-e7d43',
            'price' => 972000,
            'image' => 'img/for-seeder/product/boxtale1.jpg',
            'description' => 'A sip of the finest wine, with some cookies and candles lit, who can resist?',
            'notes' => 'May this be a dashing Christmas time with friends and family!',
            'quantity' => 25,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 26,
            'category_id' => 14,
            'productName' => 'Kado Wedding / Pernikahan / Teman - HAPPILY EVER AFTER! by Box & Tale - Putih',
            'slug' => 'kado-wedding-pernikahan-teman-happily-ever-after-by-box-tale-putih-79991',
            'price' => 648000,
            'image' => 'img/for-seeder/product/boxtale2.jpg',
            'description' => 'Show your love and support for your loved ones',
            'notes' => 'Includes: Gift Packaging, Hand Wrapping, & Custom Card.',
            'quantity' => 100,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 26,
            'category_id' => 14,
            'productName' => 'Kado Pacar / Care Package / SENDING BDAY WISHES by Box & Tale - Merah Muda',
            'slug' => 'kado-pacar-care-package-sending-b-day-wishes-by-box-tale-merah-muda-30459',
            'price' => 450000,
            'image' => 'img/for-seeder/product/boxtale3.jpg',
            'description' => 'Support your loved one whos trying to sending BDay wishes and be productive,',
            'notes' => 'Express your love with a specially-made gift!',
            'quantity' => 99,
            'rating' => 5
        ]);

        Products::create([
            'seller_id' => 27,
            'category_id' => 14,
            'productName' => 'Ouyashi Kipas Angin 3in1 Duduk Jepit Gantung 5 baling OY - 590 J - Biru Muda',
            'slug' => 'ouyashi-kipas-angin-3in1-duduk-jepit-gantung-5-baling-oy-590-j-biru-muda',
            'price' => 67500,
            'image' => 'img/for-seeder/product/rajapurna1.jpg',
            'description' => 'Posisi Kipas Bisa Digantung atas Kebawah',
            'notes' => 'Bisa Dijepit Dimeja',
            'quantity' => 10,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 27,
            'category_id' => 14,
            'productName' => 'Lampu Emergency + Senter LED - lampu darurat AOKI AK-9988 ORIGINAL',
            'slug' => 'lampu-emergency-senter-led-lampu-darurat-aoki-ak-9988-original',
            'price' => 29900,
            'image' => 'img/for-seeder/product/rajapurna2.jpg',
            'description' => 'DESKRIPSI',
            'notes' => 'Intruksi',
            'quantity' => 10,
            'rating' => 4.9
        ]);

        Products::create([
            'seller_id' => 27,
            'category_id' => 14,
            'productName' => 'Olike P103 Powerbank 10000mAh 4in1 Cable Micro USB-C Lightning',
            'slug' => 'olike-p103-powerbank-10000mah-4in1-cable-micro-usb-c-lightning',
            'price' => 129900,
            'image' => 'img/for-seeder/product/rajapurna3.jpg',
            'description' => 'Barang dijamin original dan bergaransi',
            'notes' => 'Spesifikasi',
            'quantity' => 1555,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 28,
            'category_id' => 14,
            'productName' => 'Sepeda Statis Twen Orbitrack Fun Bike FB3 FB31 FB32 FB32S PlatinumBike - FB32S',
            'slug' => 'sepeda-statis-twen-orbitrack-fun-bike-fb3-fb31-fb32-fb32s-platinumbike-fb32s-5ec08',
            'price' => 1089000,
            'image' => 'img/for-seeder/product/tokindo1.jpg',
            'description' => 'SPESIFIKASI PRODUK ini adalah FB32S lihat gambar produk di atas / chat kami.',
            'notes' => 'SYARAT & KETENTUAN',
            'quantity' => 237,
            'rating' => 4.8
        ]);

        Products::create([
            'seller_id' => 28,
            'category_id' => 14,
            'productName' => 'Packing kayu TWEN dumbbell 50kg',
            'slug' => 'packing-kayu-twen-dumbbell-50kg',
            'price' => 100000,
            'image' => 'img/for-seeder/product/tokindo2.jpg',
            'description' => 'SPESIFIKASI PRODUK ini adalah FB32S lihat gambar produk di atas / chat kami.',
            'notes' => 'SYARAT & KETENTUAN',
            'quantity' => 229,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 28,
            'category_id' => 14,
            'productName' => 'Twen Adjustable Dumbbell Set 40kg - 1 Unit',
            'slug' => 'twen-adjustable-dumbbell-set-40kg-1-unit-d85e6',
            'price' => 1899000,
            'image' => 'img/for-seeder/product/tokindo3.jpg',
            'description' => 'SPESIFIKASI PRODUK ini adalah FB32S lihat gambar produk di atas / chat kami.',
            'notes' => 'SYARAT & KETENTUAN',
            'quantity' => 250,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 29,
            'category_id' => 1,
            'productName' => 'Kunci kebahagiaan akhirat dan dunia,  100% terjamin',
            'slug' => 'kunci-masuk-surga-dijamin-masuk-surga-100-terpercaya',
            'price' => 5000,
            'image' => 'img/for-seeder/product/iseng1.jpg',
            'description' => '',
            'notes' => '',
            'quantity' => 1000,
            'rating' => 0
        ]);

        Products::create([
            'seller_id' => 29,
            'category_id' => 1,
            'productName' => 'Dijual teman yang terdzolimi',
            'slug' => 'dijual-teman-yang-terdzolimi',
            'price' => 999999999,
            'image' => 'img/for-seeder/product/iseng2.jpg',
            'description' => '',
            'notes' => '',
            'quantity' => 10000000,
            'rating' => 0
        ]);
    }
}
