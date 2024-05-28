<?php

$menu = [
    [
        "img" => "../public/img/buy-comics-digital-comics.png",
        "testo" => "DIGITAL COMICS",
    ],
    [
        "img" => "../public/img/buy-comics-merchandise.png",
        "testo" => "Dc Merchandise",
    ],
    [
        "img" => "../public/img/buy-comics-subscriptions.png",
        "testo" => "Subscription",
    ],
    [
        "img" => "../public/img/buy-comics-shop-locator.png",
        "testo" => "Comic Shop Locator",
    ],
    [
        "img" => "../public/img/buy-dc-power-visa.svg",
        "testo" => "Dc Power Visa",
    ]
]

?>

<footer>

    <div id="top">
        <div class="container d-flex justify-content-space-between py-5 ">
            <ul>

                @foreach ($menu as $link )

                    <li>
                        <a href="#">
                            <img src="{{ $link['img'] }}" alt="">
                            <span class="text-uppercase">{{ $link['testo'] }}</span>
                        </a>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
    

</footer>


<!-- @foreach ($menu as $link)

    {{$link ['testo']}}
    
    @endforeach -->