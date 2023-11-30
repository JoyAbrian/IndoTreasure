<?php

namespace Database\Seeders;

use App\Models\Seller;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seller::create([
            'name' => 'ORKIDS',
            'slug' => 'orkids',
            'bio' => 'ORKIDS WEAR Clothing for Kids Informasi lebih lanjut :HP : 082178765161',
            'images' => 'orkidsPP.png',
            'banner' => 'orkidsBanner.png',
            'seller_category' => 2,
            'address' => 'Jakarta Pusat',
            'email' => 'orkids@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '082178765161'
        ]);

        Seller::create([
            'name' => 'Kikido',
            'slug' => 'kikidobaby',
            'bio' => '',
            'images' => 'kikidoPP.png',
            'banner' => 'kikidoBanner.png',
            'seller_category' => 2,
            'address' => 'Jakarta Selatan',
            'email' => 'kikidobaby@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081365213632'
        ]);

        Seller::create([
            'name' => 'Fantech Official Store',
            'slug' => 'fantechstore',
            'bio' => 'Fantech Official Store Resmi Brand Fantech | Garansi Resmi Fantech www.fantech.id Customer Care WA : 081119094439',
            'images' => 'fantechPP.png',
            'banner' => 'fantechBanner.png',
            'seller_category' => 3,
            'address' => 'Jakarta Barat',
            'email' => 'marketingfantech@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081119094439'
        ]);

        Seller::create([
            'name' => 'Logitech Official Store',
            'slug' => 'logitech',
            'bio' => 'Menjual produk resmi Logitech Indonesia.',
            'images' => 'logitechPP.png',
            'banner' => 'logitechBanner.png',
            'seller_category' => 3,
            'address' => 'Jakarta Barat',
            'email' => 'logitech@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '083142094439'
        ]);

        Seller::create([
            'name' => 'HOMKING Furniture',
            'slug' => 'homkingfurniture',
            'bio' => 'manufacturer high quality panel furniture for living home, apartement ,office,hotel...',
            'images' => 'homkingPP.png',
            'banner' => 'homkingBanner.png',
            'seller_category' => 4,
            'address' => 'Jakarta Barat',
            'email' => 'homkingstore14@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081365213629'
        ]);

        Seller::create([
            'name' => 'Handal Furniture',
            'slug' => 'handal-furniture',
            'bio' => 'E-mail : handal.furni@gmail.com WA: 08-111-006-288 Lokasi : Gading Serpong, BSD, Depok, Cisalak, Citra Raya, Cinere, Bekasi, Bogor.',
            'images' => 'handalPP.png',
            'banner' => 'handalBanner.png',
            'seller_category' => 4,
            'address' => 'Kab. Tangerang',
            'email' => 'handal.furni@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08111006288'
        ]);

        Seller::create([
            'name' => 'Menarini Health & Beauty',
            'slug' => 'menariniofficial',
            'bio' => 'Menarini Health & Beauty adalah akun resmi dari PT Transfarma Medica Indah',
            'images' => 'manariniPP.png',
            'banner' => 'manariniBanner.png',
            'seller_category' => 5,
            'address' => 'Tangerang Selatan',
            'email' => 'manarini.store@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08132006288'
        ]);

        Seller::create([
            'name' => 'KKV Beauty Official',
            'slug' => 'kkvbeauty',
            'bio' => '',
            'images' => 'kkvPP.png',
            'banner' => 'kkvBanner.png',
            'seller_category' => 5,
            'address' => 'Kab. Bekasi',
            'email' => 'kkv.beauty@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08132004388'
        ]);

        Seller::create([
            'name' => 'Flex Sports Co',
            'slug' => 'flex-sports-co',
            'bio' => 'A Jakarta based sports company. Our sports and fitness products are designed locally and built according to international quality standards',
            'images' => 'flexPP.png',
            'banner' => 'flexBanner.png',
            'seller_category' => 6,
            'address' => 'Jakarta Selatan',
            'email' => 'flex.sport@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08132004331'
        ]);

        Seller::create([
            'name' => 'RANK Sports',
            'slug' => 'ranksports',
            'bio' => '100% ORIGINAL PRODUCT +62812 7999 7779 @ranksports.id',
            'images' => 'rankPP.png',
            'banner' => 'rankBanner.png',
            'seller_category' => 6,
            'address' => 'Jakarta Barat',
            'email' => 'rank.sport@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081279997779'
        ]);

        Seller::create([
            'name' => 'Toko Buku Mitra Media',
            'slug' => 'mitra-media',
            'bio' => "Distributor Al Qur'an, Buku dan produk Lainnya,Pengiriman Senin - Sabtu 09.00 s,d 16.00, Minggu Pengiriman Libur,Reseller Welcome",
            'images' => 'mitramedPP.png',
            'banner' => 'mitramedBanner.png',
            'seller_category' => 7,
            'address' => 'Tangerang Selatan',
            'email' => 'mitramedia@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081218451498'
        ]);

        Seller::create([
            'name' => 'ombotak',
            'slug' => 'ombotakshop',
            'bio' => 'Official Shop Om Botak di Tokopedia. Sejak 2011 telah menjadi Pusat Buku Motivasi dan buku best seller lainnya. Pengiriman Senin - Sabtu.',
            'images' => 'ombotakPP.png',
            'banner' => 'ombotakBanner.png',
            'seller_category' => 7,
            'address' => 'Jakarta Timur',
            'email' => 'ombotakshop@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081217111498'
        ]);

        Seller::create([
            'name' => 'GAMER.ID Surabaya',
            'slug' => 'gameridos',
            'bio' => 'GAMER.ID Merupakan TOKO yang menjual laptop kategori GAMING & Content Creator dengan jaminan harga termurah & bergaransi RESMI INDONESIA :)',
            'images' => 'gameridosPP.png',
            'banner' => 'gameridosBanner.png',
            'seller_category' => 8,
            'address' => 'Surabaya',
            'email' => 'gamer.id@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '087784798459'
        ]);

        Seller::create([
            'name' => 'GameHunter',
            'slug' => 'gamehunter',
            'bio' => 'Menjadi Penjual Game adalah Jalan Ninjaku',
            'images' => 'gamehunterPP.png',
            'banner' => 'gamehunterBanner.png',
            'seller_category' => 8,
            'address' => 'Jakarta Utara',
            'email' => 'gamehunter.store@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08992482020'
        ]);

        Seller::create([
            'name' => 'Stamina Infinite',
            'slug' => 'staminainfinite',
            'bio' => 'PT. Stamina Trimegah Perkasa merupakan sebuah perusahaan yang berdiri sejak 2011. Mengutamakan kualitas terbaik hasil produksi Indonesia.',
            'images' => 'staminaPP.png',
            'banner' => 'staminaBanner.png',
            'seller_category' => 9,
            'address' => 'Jakarta Utara',
            'email' => 'stamina.infinite@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08112482020'
        ]);

        Seller::create([
            'name' => 'Girik Indo Store',
            'slug' => 'shivayindonesia',
            'bio' => 'Berkomitmen untuk menghadirkan Peralatan Olahraga Impor Kualitas terbaik untuk Anda More Info : 02122653117/ WA: +62 813-1700-6067',
            'images' => 'girikPP.png',
            'banner' => 'girikBanner.png',
            'seller_category' => 9,
            'address' => 'Jakarta Utara',
            'email' => 'girik.indo.store@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081317006067'
        ]);

        Seller::create([
            'name' => 'On Time Official Store',
            'slug' => 'ontimeofficialstore',
            'bio' => 'Jam Tangan Berkualitas Tinggi Di Tokopedia, Belanja Jam Tangan Terbaikmu Disini.',
            'images' => 'ontimePP.png',
            'banner' => 'ontimeBanner.png',
            'seller_category' => 10,
            'address' => 'Jakarta Utara',
            'email' => 'ontimestore@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081345026067'
        ]);

        Seller::create([
            'name' => 'Liga Arloji',
            'slug' => 'liga-arloji',
            'bio' => 'Toko Liga Arloji hanya menjual produk original dan bergaransi resmi. Hari Minggu Libur ( Tidak ada pengiriman )',
            'images' => 'arlojiPP.png',
            'banner' => 'arlojiBanner.png',
            'seller_category' => 10,
            'address' => 'Jakarta Pusat',
            'email' => 'ligaarloji.store@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081322126067'
        ]);

        Seller::create([
            'name' => 'Boss Aksesoris Mobil',
            'slug' => 'bossmobil',
            'bio' => 'Gudangnya berbagai macam aksesoris mobil Barang berkualitas tinggi',
            'images' => 'bosmobilPP.png',
            'banner' => 'bosmobilBanner.png',
            'seller_category' => 11,
            'address' => 'Jakarta Barat',
            'email' => 'bosmobil.official@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081322126411'
        ]);

        Seller::create([
            'name' => 'PT Hyundai Mobil Indonesia',
            'slug' => 'hyundai-mobil-indonesia',
            'bio' => '',
            'images' => 'hyundaiPP.png',
            'banner' => 'hyundaiBanner.png',
            'seller_category' => 11,
            'address' => 'Jakarta Selatan',
            'email' => 'pt.hyundai.indo@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081322126461'
        ]);

        Seller::create([
            'name' => 'Pedigree Official Store',
            'slug' => 'pedigree',
            'bio' => 'Lebih dari 75 tahun beroperasi. Makanan hewan peliharaan nomor 1 di dunia. *Tidak bisa mengubah pesanan (varian) melalui kolom catatan*',
            'images' => 'pedigreePP.png',
            'banner' => 'pedigreeBanner.png',
            'seller_category' => 12,
            'address' => 'Tangerang',
            'email' => 'pedigree@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '084222126461'
        ]);

        Seller::create([
            'name' => 'Pet Republic',
            'slug' => 'petrepublicjakar',
            'bio' => 'we love, we care , we educate www.petrepublicindonesia.com',
            'images' => 'petrepublicPP.png',
            'banner' => 'petrepublicBanner.png',
            'seller_category' => 12,
            'address' => 'Jakarta Utara',
            'email' => 'pet.republic@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08551117535'
        ]);

        Seller::create([
            'name' => 'Wahana Tour & Travel',
            'slug' => 'wahanatour',
            'bio' => 'IG @wahanatravel • FB: wahana tourtravel • WA: 0811 1506 706 • Website: wahanatravel.com •',
            'images' => 'wahanaPP.png',
            'banner' => 'wahanaBanner.png',
            'seller_category' => 13,
            'address' => 'Jakarta Utara',
            'email' => 'wahanatourtravel@store.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '08111506706'
        ]);

        Seller::create([
            'name' => 'ALTORINA TOUR AND TRAVEL',
            'slug' => 'altorinatourtravel',
            'bio' => 'Melayani Jasa : 1. Passpor / Visa 2. Ticket Pesawat 3. Ticket Kereta domestik /internasional 4. Hotel 5. Asuransi Perjalanan 6. Modem wifi',
            'images' => 'altorinaPP.png',
            'banner' => 'altorinaBanner.png',
            'seller_category' => 13,
            'address' => 'Jakarta Selatan',
            'email' => 'altorinatour@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '0818748912'
        ]);

        Seller::create([
            'name' => 'Letter Box',
            'slug' => 'letterbox',
            'bio' => 'Letter box is an unique gift concept est in 2013. We are specialized in creating customized design and messages through box of chocolate.',
            'images' => 'letterPP.png',
            'banner' => 'letterBanner.png',
            'seller_category' => 14,
            'address' => 'Jakarta Pusat',
            'email' => 'letter.box.store@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081288820744'
        ]);

        Seller::create([
            'name' => 'Box & Tale',
            'slug' => 'boxntale',
            'bio' => 'Layanan pembuat kado yang data dipersonalisasi untuk beragam perayaan spesial! Website resmi Box & Tale: www.boxandtale.com',
            'images' => 'boxtalePP.png',
            'banner' => 'boxtaleBanner.png',
            'seller_category' => 14,
            'address' => 'Jakarta Utara',
            'email' => 'box.n.tale@shop.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081255620744'
        ]);

        Seller::create([
            'name' => 'Rajapurna elektrik',
            'slug' => 'rajapurna',
            'bio' => 'GROSIR, ECERAN, DROPSHIP, RESELLER SEMUA BISA! , MENGUTAMAKAN KUALITAS DAN KEPUASAN KONSUMEN',
            'images' => 'rajapurnaPP.png',
            'banner' => 'rajapurnaBanner.png',
            'seller_category' => 15,
            'address' => 'Jakarta Barat',
            'email' => 'rajapurna@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081255620731'
        ]);

        Seller::create([
            'name' => 'TOKINDO ID',
            'slug' => 'tokindoid',
            'bio' => 'Produk Terlaris #1 Harga Termurah Berkualitas Garansi 1 Tahun',
            'images' => 'tokindoPP.png',
            'banner' => 'tokindoBanner.png',
            'seller_category' => 15,
            'address' => 'Tangerang',
            'email' => 'tokindo.id@gmail.com',
            'password' => bcrypt('thisIsCogil'),
            'phone_number' => '081212320731'
        ]);

        Seller::create([
            'name' => 'Rahmi Widiastuti',
            'slug' => 'kala17',
            'bio' => '',
            'seller_category' => 1,
            'address' => 'Makassar',
            'email' => 'rahmiwidiastuti42@gmail.com',
            'password' => bcrypt('Lord, Im Tired'),
            'phone_number' => '081356621029'
        ]);

        Seller::create([
            'name' => 'Rahmi Laksmiwati S.Farm',
            'slug' => 'nusamah',
            'bio' => '',
            'seller_category' => 1,
            'address' => 'DKI Jakarta',
            'email' => 'rahmilaksmiwati69@gmail.com',
            'password' => bcrypt('Tuhan... Saya Capek'),
            'phone_number' => '081356621010'
        ]);
    }
}
