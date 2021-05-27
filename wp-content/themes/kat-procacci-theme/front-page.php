<?php
get_header();
?>

<?php
$dateOfBirth = "06-05-2001";
$today = date('Ymd');
$diff = date_diff(date_create($dateOfBirth), date_create($today));
?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/background.jpg') ?>);"></div>
        <div class="page-banner__content container t-center c-white">
            <div id="wrapper">
                <span class="front-page-left">
                    <span class="front-page-left__inner">
                        <p>
                            <img src="<?php echo get_theme_file_uri('/images/kat_image_transparent.png') ?>" alt="Katherine Procacci" class="responsive">
                        </p>
                    </span>
                </span>
                <span class="front-page-right">
                    <span class="front-page-right__inner">
                        <h2 class="headline headline--medium">Welcome to My Site</h2>
                        <p>My name is Katherine Procacci and I am <?php echo $diff->format('%y'); ?> years old. I currently attend Stony Brook University as a full-time student of the School of Journalism.</p>
                        <a href="<?php echo site_url('/about-me') ?>" class="btn btn--large btn--blue">Find Out More</a>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>