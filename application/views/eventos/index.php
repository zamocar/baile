<h2><?php echo $title; ?></h2>

<?php foreach ($eventos as $eventos_item): ?>

        <h3><?php echo $eventos_item['titulo']; ?></h3>
        <div class="main">
                <?php echo $eventos_item['tipo_evento']; ?>
        </div>
        <p><a href="<?php echo site_url('eventos/'.$eventos_item['id_evento']); ?>">Ver evento</a></p>

<?php endforeach; ?>