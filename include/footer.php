<div class="col  col--12  col--center  text--centre">
    <address><?= html_entity_decode($site_basic_info[0]->address); ?></address>
    <a href="mailto:<?= $site_basic_info[0]->email; ?>" class="contact"> <?= $site_basic_info[0]->email; ?></a>
    <span> | </span>
    <a href="tel:<?= $site_basic_info[0]->phone; ?>" class="contact js-phone-event"><?= $site_basic_info[0]->phone; ?></a>
    <span> | </span>
    <a href="" target="_blank" class="social"><i class="icon-facebook"></i></a>
    <span> | </span>
    <a href="" target="_blank" class="social" ><i class="icon-twitter"></i></a>
    <span> | </span>
    <a href="" target="_blank" class="social" ><i class="icon-instagram"></i></a>

    <a href="http://www.skeletonit.com/" target="_blank" class="siteby">Site by Propeller</a>
</div>