@extends('front.homelayouts.master')
@section('title','Ana Sayfa')


@section('content')

<!-- Main Content -->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Yaptığımız İşler</h2></div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h5">Web Tasarımı</h2>
                        <p class="mb-0">Sizi çok iyi tanımak için araştırmalar yapar, kimliğinizi en iyi ifade eden tasarımları sunarız. Sınırsız seçenekler arasında en doğru simgeleri birlikte çizeriz.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h5">Marka</h2>
                        <p class="mb-0">Logo, kurumsal kimlik, katalog ve dijital yüzünüzü tasarlıyoruz.</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h5">Grafik Tasarım</h2>
                        <p class="mb-0">Hedef kitlenizle kalıcı bağlar kuracağınız etkileşimli içerikler hazırlıyoruz. Görünürlüğünüzü artırıyor ve takipçilerinizin sesini size ulaştırıyoruz</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h5">Dijital Pazarlama</h2>
                        <p class="mb-0">SEO, SEM uygulamaları ve diğer tüm dijital mecralarda reklam tasarım ve planlamaları ile reklam bütçenizi en verimli şekilde kullanıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">
                        "web sitesin de uzman kişilik.Bugün git yarın gel demeyen  web sitemde herhangi bir sorun olduğunda gece gündüz 7/24 her zaman yardımcı olan ve yeni çözümler üreten aklımdaki soru işaretlerini alan  arkadaşım.Bugün bir web sitesimi yaptırakcaksınız ? Doğru adrestesiniz."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                        <div class="fw-bold">
                            Deneme deneme
                            <span class="fw-bold text-primary mx-1">/</span>
                            CEO
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


