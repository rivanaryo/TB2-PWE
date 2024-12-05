<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    {{-- Link Box Icon --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Beingborn Furniture</title>
</head>
<body>

    {{-- Navigation --}}
    <nav>
        <div class="logo-nav"><a href="/home">Beingborn.co</a></div>
            <ul>
                <li><a href="/home">Home</a></li>
                    <li><a href="/about">About</a></li>
                        <li><a href="/service">Service</a></li>
                            <li><a href="/product">Product</a></li>
                                </ul>
                                    <button type="submit" name="contactUs" class="btn-contactus" >Contact Us</button>
    </nav>
    {{-- End of Nav --}}


    {{-- Landing Page Section --}}

    <div class="landing-page">
            <img src="https://img.freepik.com/free-photo/sofa-green-living-room-with-copy-space_43614-905.jpg?      t=st=1731983000~exp=1731986600~hmac=7809e95c72c70593fe4f0dcb60aeaee4f24f79f20f9f2b21719a51a4863cff64&w=900" alt="Furniture" class="hero-landing">
                    <h2>Inovasi Baru dengan Design Elegan</h2>
                        <button type="submit" class="btn-about"><a href="/about">Tentang Beingborn</a></button>
    </div> {{--end of landing page--}}

    {{-- Section 1 --}}
    <div class="section1">
                <div class="hero-left">
                        <img src="{{asset('/image/landingpage.png')}}"alt="People">
                            </div>
                                <div class="content1">
                                        <h1> <span>Beingborn</span> Furniture</h1>
                                            <p><span style="font-weight: bold">Beingborn</span> berkomitmen untuk memberikan pelayanan yang terbaik untuk seluruh pelanggan, tujuan utama <span style="font-weight: bold">Beingborn</span> adalah agar pelanggan kami selalu mendapatkan layanan dengan update inovasi dan informasi terbaru untuk kebutuhan perusahaan dan bisnis pelanggan kami terhadap furniture.</p>
                                            <p>Tidak hanya terfokus terhadap layanan Furniture  namun <span style="font-weight: bold">Beingborn</span>  akan membantu dalam hal pemberian solusi pelanggan terkait furniture yang diperlukan sehingga pelanggan akan mendapatkan pengalaman yang baik.</p>
                                            <button type="submit"><i class='bx bxs-paper-plane'></i><span>Dapatkan Solusi Dari Kami</span></i></button>
                                        </div>
    </div> {{-- end of section 1--}}


    {{-- Section 2 --}}
    <div class="section2">
                    {{-- Icon --}}
                    <div class="content-icon">
                        <i class='bx bxs-user' ></i>
                            <span id="user"></span>
                                <span>Pelanggan</span>
                    </div>
                        <div class="content-icon">
                            <i class='bx bx-store' ></i>
                                <span id="store"></span>
                                    <span>Store</span>
                        </div>
                            <div class="content-icon">
                                <i class='bx bxs-building' ></i>
                                    <span id="relation"></span>
                                        <span>Relation</span>
                            </div>

    </div> {{-- End Of section 2--}}

    {{-- Section 3 --}}

    <div class="section3">
            <h1 class="section3-title"><span>Solusi</span> Untuk Anda</h1>
    </div>

    {{-- Card Content --}}
    <div class="flex-container">
        <div class=" flex-item">
            <div class="hero-flex">
                <img src="{{asset('/image/icon1.png')}}" alt="image">
            </div>
                <div class="card-content">
                     <h3 class="subtitle">Consultant Product</h3>
                        <p class="description">Layanan khusus customer untuk melakukan diskusi terkait produk furniture yang cocok untuk keperluan,baik itu dari ukuran,design,serta penempatan furniture tersebut.kami siap memberikan pelayanan untuk menunjang kepuasan customer.</p>
                </div>
        </div>
            <div class=" flex-item">
                <div class="hero-flex">
                    <img src="{{asset('/image/icon2.png')}}" alt="image" style="padding-top:5vh">
                </div>
                    <div class="card-content">
                        <h3 class="subtitle">On-time Delivery</h3>
                            <p class="description">Pengiriman tepat waktu sesuai dengan kesepakatan dari customer,kami menyediakan tenaga ahli untuk membantu pengiriman serta membantu merakit furniture di rumah pelanggan yang bertujuan untuk memberikan rasa aman kepada pelanggan selama proses pengiriman.</p>
                    </div>
            </div>
                <div class=" flex-item">
                    <div class="hero-flex">
                        <img src="{{asset('/image/icon3.png')}}" alt="image">
                    </div>
                        <div class="card-content">
                            <h3 class="subtitle">Garansi Product</h3>
                                <p class="description">Customer akan mendapatkan garansi produk untuk kerusakan tertentu pada jangka waktu tertentu,untuk produk yang rusak akan di retur kembali jika kerusakan berada dalam masa waktu garansi.</p>
                        </div>
                </div>
                    <div class=" flex-item">
                        <div class="hero-flex">
                            <img src="{{asset('/image/icon4.png')}}" alt="image">
                        </div>
                            <div class="card-content">
                                <h3 class="subtitle">Service Product</h3>
                                    <p class="description">Kami menyediakan jasa untuk melakukan perbaikan terhadap produk furniture yang rusak bagi customer,serta memberikan edukasi produk terhadap customer,sehingga customer memahami durability produk furniture.</p>
                            </div>
                    </div>
                        <div class=" flex-item">
                            <div class="hero-flex">
                                <img src="{{asset('/image/icon5.png')}}" alt="image">
                            </div>
                                <div class="card-content">
                                    <h3 class="subtitle">24 hours Service Center</h3>
                                        <p class="description">Kami menyediakan layanan 24 jam untuk service center kami, sehingga dapat membantu customer untuk memberikan solusi kapanpun dan dimanapun,dengan respon kami yang cepat melalui media sosial atau platform chat lainnya.</p>
                                </div>
                        </div>
                            <div class=" flex-item">
                                <div class="hero-flex">
                                    <img src="{{asset('/image/icon6.png')}}" alt="image">
                                </div>
                                    <div class="card-content">
                                        <h3 class="subtitle">Digital Transaction</h3>
                                            <p class="description">Kami menyediakan metode pembayaran digital melalui bank transfer,kartu kredit,e-wallet, atau cicilan lainnya, sehingga memudahkan customer untuk melakukan pembayaran</p>
                                    </div>
                            </div>
    </div> {{--card Content End--}}

{{-- Section 3 End --}}


{{-- Section 4 --}}

    <div class="section4">
        <div class="section4-content">
            <h2>Informasi Produk</h2>
                <p>Temukan Informasi Produk disini untuk pengalaman berbelanja yang lebih nyaman.</p>
                    <button class="produk"><a href="/product">Informasi Produk</a></button>
        </div>

        <div class="section5">
            <h2><span>Beingborn</span>.co - Solusi rumah terbaik</h1>
                <p>Beingborn.co hadir sebagai solusi terbaik untuk kebutuhan furniture yang mengutamakan kualitas, estetika, dan fungsionalitas. Kami percaya bahwa setiap rumah adalah cerminan dari kepribadian penghuninya, dan melalui koleksi furniture kami, Anda dapat menciptakan ruang yang tidak hanya nyaman tetapi juga penuh gaya. Dengan desain yang modern, minimalis, hingga klasik, produk kami dirancang untuk memberikan pengalaman hidup yang lebih bermakna di setiap sudut rumah Anda.</p>
                <p>Sebagai perusahaan yang berdedikasi pada detail dan keahlian, Beingborn.co menggunakan bahan-bahan pilihan yang ramah lingkungan dan tahan lama. Mulai dari sofa empuk untuk ruang tamu, meja makan yang mengundang kehangatan keluarga, hingga tempat tidur yang menghadirkan kenyamanan maksimal, setiap produk kami dibuat dengan cinta dan perhatian terhadap kebutuhan pelanggan. Selain itu, kami menawarkan solusi custom-made untuk memastikan furniture Anda benar-benar sesuai dengan selera dan kebutuhan ruang.
                <p>
                </p>
                Beingborn.co tidak hanya menjual furniture, tetapi juga menghadirkan cerita dan nilai di setiap produknya. Dengan layanan pelanggan yang profesional, pengiriman tepat waktu, dan komitmen untuk menjaga kepuasan pelanggan, kami berkomitmen untuk menjadi mitra terbaik Anda dalam menciptakan rumah impian. Temukan inspirasi untuk hunian Anda bersama Beingborn.co dan wujudkan ruangan yang tidak hanya cantik dipandang tetapi juga nyaman dihuni.</p>

        </div>


    </div>


















{{-- Footer Section --}}
<div class="footer">
    <div class="header-footer">
        <h2>Ikuti Kami</h2>
            <div class="icon">
                <a href=""><i class='bx bxl-instagram'></i></a>
                <a href=""><i class='bx bxl-whatsapp' ></i></a>
                <a href=""><i class='bx bxl-tiktok' ></i></a>
            </div>
                <div class="footer-content">
                    <ul>
                        <li><a href="/about">Tentang Kami</a></li>
                            <li><a href="/service">Layanan Kami</a></li>
                                <li><a href="/product">Produk</a></li>
                    </ul>
                    <p>&copy; Copyright 2024 Beingborn Furniture All rights reserved</p>
                </div>

</div> {{--Footer Section End--}}





<script src="{{asset('/javascript/script.js')}}"></script>

</body>
</html>
