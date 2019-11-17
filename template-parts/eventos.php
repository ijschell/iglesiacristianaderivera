<div id="contnetEvents">

    <h2>Eventos</h2>

    <div class="container-fluid">

        <div>
            <div class="left">

                <p>Eventos pasados</p>

                <?php 
                    $pasados = get_eventos(false, 2);

                    // var_dump($pasados);

                    foreach ($pasados as $key => $value) {
                        ?>
                        <div class="item">
                            <span class="dashicons dashicons-calendar-alt"></span>
                            <p class="date">
                                <a href="<?php echo $value["url"] ?>">
                                    <?php echo date("d-m-Y H:i", strtotime($value["datetime"])) ?>hs
                                </a>
                            </p>
                            <h4>
                                <a href="<?php echo $value["url"] ?>">
                                    <?php echo $value["title"] ?>
                                </a>
                            </h4>
                        </div>
                        <?php
                    }

                ?>

                </div>

                <div class="right">

                <p>Próximo evento</p>

                <?php 
                    $siguientes = get_eventos(true, 1);

                    // var_dump($siguientes);

                    foreach ($siguientes as $key => $value) {
                        ?>
                        <div class="item">
                            <span class="dashicons dashicons-calendar-alt"></span>
                            <p class="date">
                                <a href="<?php echo $value["url"] ?>">
                                    <?php echo date("d-m-Y H:i", strtotime($value["datetime"])) ?>hs
                                </a>
                            </p>
                            <h4>
                                <a href="<?php echo $value["url"] ?>">
                                    <?php echo $value["title"] ?>
                                </a>
                            </h4>
                        </div>
                        <?php
                    }

                ?>

            </div>
        </div>

        <div class="bottom">
            <p>
                <a href="/todos-los-eventos">Ver todos los eventos <span class="dashicons dashicons-arrow-right"></span></a>
            </p>
        </div>

    </div>

</div>