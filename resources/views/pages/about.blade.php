@extends('layouts.app')

@section('title')
    About Us
@endsection

@section('content')
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="images/product-1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>About Us</h3>
                    <p class="fst-italic">
                        Sejak tahun 1986, Sirup Jahe Khas Bu Kam telah menjadi pilihan utama bagi pecinta minuman
                        Jahe. Kami adalah produsen sirup jahe berkualitas tinggi yang dibuat dengan
                        resep turun-temurun, menggabungkan bahan-bahan alami pilihan dan proses pembuatan yang terjaga
                        keasliannya. Didirikan oleh Ibu Kamsiah, usaha ini berawal dari keinginan untuk menghadirkan minuman
                        sehat dan lezat yang dapat dinikmati oleh semua kalangan.
                    </p>
                    <p>Kami berkomitmen untuk terus menyediakan produk sirup jahe yang berkualitas tinggi dengan rasa yang
                        tak terlupakan. Kepuasan pelanggan adalah prioritas utama kami, dan kami selalu berusaha untuk
                        memberikan pelayanan terbaik. Dengan dedikasi dan semangat untuk melestarikan warisan kuliner
                        Indonesia, Sirup Jahe Khas Bu Kam berupaya untuk terus berkembang dan menjadi bagian dari setiap
                        momen berharga Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Why Us</h2>
            <p>Why Choose Our Product</p>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="box" data-aos="zoom-in" data-aos-delay="100">
                <span>01</span>
                <h4>Lorem Ipsum</h4>
                <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="200">
                <span>02</span>
                <h4>Repellat Nihil</h4>
                <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              <div class="box" data-aos="zoom-in" data-aos-delay="300">
                <span>03</span>
                <h4> Ad ad velit qui</h4>
                <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
