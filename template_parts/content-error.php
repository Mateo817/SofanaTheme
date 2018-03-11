
<?php if(is_search()) { ?>

    <section <?php post_class();?>>
        <p>Leider nichts gefunden.</p>
    </section>
    
<?php } else { ?>

    <section <?php post_class();?>>
        <h1>Fehler 404</h1>
        <p>Diese Seite existiert nicht.</p>
    </section>

<?php } ?>



