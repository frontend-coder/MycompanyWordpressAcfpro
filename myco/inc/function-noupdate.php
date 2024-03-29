<?php

/**Отключаем обновления плагинов, тем в админке
* Отключаем принудительную проверку новых версий WP, плагинов и темы в админке,
* чтобы она не тормозила, когда долго не заходил и зашел...
* Все проверки будут происходить незаметно через крон или при заходе на страницу: "Консоль > Обновления".
*
* @see https://wp-kama.ru/filecode/wp-includes/update.php
* @author Kama (https://wp-kama.ru)
* @version 1.0
*/
if( is_admin() ){
// отключим проверку обновлений при любом заходе в админку...
remove_action( 'admin_init', '_maybe_update_core' );    // (ats) откл. проверки обнов. ядра WP
remove_action( 'admin_init', '_maybe_update_plugins' ); // (ats) откл. проверки обнов. плагинов
remove_action( 'admin_init', '_maybe_update_themes' );  // (ats) откл. обнов тем (шаблонов)

// отключим проверку обновлений при заходе на специальную страницу в админке...
remove_action( 'load-plugins.php', 'wp_update_plugins' );
remove_action( 'load-themes.php', 'wp_update_themes' );

// оставим принудительную проверку при заходе на страницу обновлений...
//remove_action( 'load-update-core.php', 'wp_update_plugins' );
//remove_action( 'load-update-core.php', 'wp_update_themes' );

// внутренняя страница админки "Update/Install Plugin" или "Update/Install Theme" - оставим не мешает...
//remove_action( 'load-update.php', 'wp_update_plugins' );
//remove_action( 'load-update.php', 'wp_update_themes' );

// событие крона не трогаем, через него будет проверяться наличие обновлений - тут все отлично!
//remove_action( 'wp_version_check', 'wp_version_check' );
//remove_action( 'wp_update_plugins', 'wp_update_plugins' );
//remove_action( 'wp_update_themes', 'wp_update_themes' );

/**
* отключим проверку необходимости обновить браузер в консоли - мы всегда юзаем топовые браузеры!
* эта проверка происходит раз в неделю...
* @see https://wp-kama.ru/function/wp_check_browser_version
*/
add_filter( 'pre_site_transient_browser_'. md5( $_SERVER['HTTP_USER_AGENT'] ), '__return_true' );
}
/** Отключаем обновления плагинов, тем в админке **/