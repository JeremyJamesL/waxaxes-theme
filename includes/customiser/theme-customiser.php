<?php

function wa_customise_register($wp_customize){

    wa_add_panel_customiser($wp_customize);
    wa_background_customiser($wp_customize);

}