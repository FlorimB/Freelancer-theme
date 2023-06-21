<?php
$services = get_field('services');
$services_card = get_field('services_card');

?>

<article class="services w-75 mx-auto mb-5">
    <h2 class="mt-5 mb-4 display-4 text-center">
        <?php echo esc_html($services['title']); ?>
    </h2>
    <p class="services-text text-center">
        <?php echo esc_html($services['text'])?>
    </p>
</article>

<div class="main my-5 pt-5 testimonials">
    <div class="row mb-5">
        <?php foreach ($services_card as $card) : ?>
            <div class="col-12 col-md-12 col-lg-6">
                <div class="card mb-5 text-light p-5 services-card">
                    <img class="services-icon mx-auto mb-4 border-bottom" src="<?php echo $card['services_icon']?>" alt="<?php esc_attr($card['services_icon']); ?>">
                    <div class="card-body">
                        <h5 class="card-title services-title text-center">
                            <?php echo $card['services_title']; ?>
                        </h5>
                        <p class="card-text services-text">
                            <?php echo $card['services_tiext']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="d-flex justify-content-center">
        <a href="#name" class="border-bottom text-decoration-none display-6 text-light">
            Contact me
        </a>
    </div>
</div>
