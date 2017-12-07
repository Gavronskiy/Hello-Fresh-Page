<?php
get_header();
$template_directory_uri = get_template_directory_uri();
?>
<div class="hfp-head-block">
    <img src='<?=get_stylesheet_directory_uri();?>/img/hfp-head.png' />
    <div class="hfp-promo-block">
        <div class="promo-title">
            A Perth alternative to Hello Fresh
        </div>
        <a href="/sign-up/" class="promo-button button button--primary">
            Start Cooking
        </a>
    </div>
</div>
<div class="container">
    <div class="hfp-text-block">
        <p>So you've heard of Hello Fresh and seen their well-funded marketing blitz, but would prefer to buy local? There are Perth alternatives. You Plate It is a Perth based, and we think better, alternative to Hello Fresh.</p>
        <p>Hello Fresh is a leader in the meal kit business. Based in Sydney, and well funded by German investors, they are renowned for their aggressive marketing and plentiful distribution of flyers. But there are alternatives to Hello Fresh.</p>
        <p>Pioneers in the Sydney meal kit market, Hello Fresh have a perfectly fine product, but we know it's possible to make a better meal kit, deliver more genuine service, and offer fresher produce. So that's what we do! We're a popular Perth based alternative to Hello Fresh.</p>
        <a href="/sign-up/" class="promo-button button button--primary">
            Start Cooking
        </a>
    </div>
    <div class="hfp-img-text-block">
        <div class="item">
            <div class="hfp-text">
                <div class="promo-title">
                    We're Local
                </div>
                <ul>
                    <li>
                        The fist, and biggest thing setting You Palte It and Hello Fresh apart, is that we're local
                    </li>
                    <li>
                        We're a Perth business, buying from WA farmers and suppliers and delivering a service tailored for life in Perth
                    </li>
                    <li>
                        Along with Dinner Twist, we're a better, local, meal kit choice for Perth
                    </li>
                </ul>
            </div>
            <div class="hfp-img">
                <img src="<?=get_stylesheet_directory_uri();?>/img/Manjimup_cabbage_growers.jpg" />
            </div>
        </div>
        <div class="item">
            <div class="hfp-img">
                <img src="<?=get_stylesheet_directory_uri();?>/img/learn-more.jpg" />
            </div>
            <div class="hfp-text not-top-pd">
                <div class="promo-title">
                    Fresher Local Produce
                </div>
                <ul>
                    <li>
                        It's not enough to be local, we need to be better than Hello Fresh
                    </li>
                    <li>
                        One of the ways we're better is by providing fresh and locally sourced WA ingredients
                    </li>
                    <li>
                        Hello Fresh have an amazing packing shed in Sydney where their food is prepared and packed. For quarantine, produce is often fumigated before its journey across the Nullarbor
                    </li>
                    <li>
                        We source almost everything from local farmers abnd family run businesses
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
get_template_part('templates/newsletter');
get_template_part('templates/partners');
get_footer();
?>
