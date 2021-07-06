@extends('layouts.master')


@section('content')

<div class="container-all">
    <div class="row">


        <div class="col-12">
                <div class="home-first-block">
                   <div class="container">
                       <div class="row">
                           <div class="col-12">
                               <div class="typings">
                                   <p>Agence <span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                               </div>
                           </div>
                       </div>
                   </div>
                </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">


        <div class="col-12">
            <div class="h2-block">
                <h2>Nos services</h2>
            </div>
            @foreach($categories as $category)
                    <div class="col-3 col-6-m">
                        <div class="category-space">
                            <div class="category-block">
                                <a class="link-category" href="{{ route('category.show', $category->slug ) }}">
                                    <img src="https://shtheme.com/preview/orgafe/img/demos/home1.jpg" alt="">
                                    <span>Voir la Catégorie </span>
                                </a>
                            </div>
                            <div class="category-text">
                                <p>{{ $category->title }}
                                </p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>

    </div>
</div>

<div class="container" id="section-three">
    <div class="row">
        <div class="col-12">
            <div class="col-6">
               <div class="left-section-three">
               </div>
            </div>
            <div class="col-6">
                <div class="right-section-three">
                    <div class="h3-block">
                        <h3>Notre agence</h3>
                    </div>
                    <p>Nous accompagnons nos clients dans la création de site internet: étude, UX, conception, design, développement, SEO.</br>
                        Notre agence web est capable de répondre à tous vos besoins et d'élaborer une véritable stratégie digitale.</p>

                    <div class="item-block">
                        <div class="container-all">
                            <div class="row">
                                <div class="col-3-m">
                                    <div class="item-block-img">
                                        <img src="/image/semrush.png" alt="">
                                        <span>Seo</span>
                                    </div>
                                </div>
                                <div class="col-3-m">
                                    <div class="item-block-img">
                                        <img src="/image/mg.png" alt="">
                                        <span>Magento</span>
                                    </div>
                                </div>
                                <div class="col-3-m">
                                    <div class="item-block-img">
                                        <img src="/image/ga.png" alt="">
                                        <span>Google Analytics</span>
                                    </div>
                                </div>
                                <div class="col-3-m">
                                    <div class="item-block-img">
                                        <img src="/image/wordpress.png" alt="">
                                        <span>Wordpress</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">

        <div class="col-12">
            <div class="h2-block">
                <h2>Services</h2>
            </div>
            @foreach ($products as $product)
                <div class="col-3 col-6-m">
                    <div class="category-space">
                        <a class="link-category" href="{{ route('shop.show', $product->slug  ) }}">
                        <div class="product-block" style="height: 230PX">
                                <img src="{{ asset('/img/'. $product->image) }}" alt="{{ $product->balise_alt }}" >
                                <span class="card-text">{{ $product->price }}€</span>
                        </div>
                        </a>
                        <div class="category-text">
                            <p>{{ $product->title }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
</div>

<script>

    const typedTextSpan = document.querySelector(".typed-text");
    const cursorSpan = document.querySelector(".cursor");

    const textArray = ["Web", "Design", "Seo", "addis."];
    const typingDelay = 200;
    const erasingDelay = 100;
    const newTextDelay = 2000; // Delay between current and next text
    let textArrayIndex = 0;
    let charIndex = 0;

    function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        }
        else {
            cursorSpan.classList.remove("typing");
            setTimeout(erase, newTextDelay);
        }
    }

    function erase() {
        if (charIndex > 0) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        }
        else {
            cursorSpan.classList.remove("typing");
            textArrayIndex++;
            if(textArrayIndex>=textArray.length) textArrayIndex=0;
            setTimeout(type, typingDelay + 1100);
        }
    }

    document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
        if(textArray.length) setTimeout(type, newTextDelay + 250);
    });
</script>
@stop
