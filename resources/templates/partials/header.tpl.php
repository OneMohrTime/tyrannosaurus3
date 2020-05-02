<header class="header">
    <h2><?= $title ?></h2>
    <p><?= $lead ?></p>

    <?php
        /**
         * Functions hooked into `theme/header/end` action.
         *
         * @hooked Pscheme\Tyrannosaurus\App\Structure\render_documentation_button - 10
         */
        do_action('theme/header/end')
    ?>
</header>
