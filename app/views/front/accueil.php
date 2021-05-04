<?php ob_start(); ?>
<!-- start welcome image -->
<div class="welcome-image">
    <div>
        <img src="app/public/front/images/huitre-bretagne.jpg" alt="huitre bretagne">
    </div>
</div>
<!-- end of welcome image -->

<!-- start welcome text -->
<div class="welcome">
    <div class="welcome-anim"><h1>En Bretagne ? Envie de Huîtres ? </h1></div>
    <h2>Ne cherchez pas plus loin, vous trouverez tous les producteurs de huître en Bretagne ici !</h2>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iusto mollitia aut exercitationem, ipsam
            voluptatum nesciunt officia quas repellat vitae nobis, nostrum odio quod modi saepe? Ipsum, voluptate?
            Repudiandae voluptas.</p>
    <p>En Bretagne ? Envie de Huîtres ? Nisi eos, corrupti, repellendus ipsa magnam
            reprehenderit doloribus labore accusantium velit huitre Bretagne voluptatum. Quos, nostrum! Quo dignissimos minus
            perferendis et, accusamus exercitationem harum sapiente quod, nostrum odio quod modi saepe? Ipsum, voluptate?
            Repudiandae voluptas placeat aperiam itaque magni esse cumque.</p>
</div>
<!-- end of welcome text -->

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>