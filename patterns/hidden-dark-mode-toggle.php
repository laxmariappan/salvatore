<?php
/**
 * Title: Dark Mode Toggle
 * Slug: salvatore/hidden-dark-mode-toggle
 * Inserter: no
 */
?>

<?php
// Check if dark mode toggle block is available.
if ( ! WP_Block_Type_Registry::get_instance()->is_registered( 'tabor/dark-mode-toggle' ) ) {
    return;
}
?>
<!-- wp:tabor/dark-mode-toggle {"className":"is-style-filled"} -->
<div class="wp-block-tabor-dark-mode-toggle is-style-filled is-small"><label class="wp-block-tabor-dark-mode-toggle__label" for="theme-toggle"><input type="checkbox" class="wp-block-tabor-dark-mode-toggle__input" id="theme-toggle" aria-label="Toggle dark mode"/><span class="wp-block-tabor-dark-mode-toggle__track"><span class="wp-block-tabor-dark-mode-toggle__selector"><span class="wp-block-tabor-dark-mode-toggle__icon wp-block-tabor-dark-mode-toggle__icon--light" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13 2a1 1 0 1 0-2 0v1a1 1 0 1 0 2 0V2Zm0 19a1 1 0 1 0-2 0v1a1 1 0 1 0 2 0v-1Zm6.777-16.777a1 1 0 0 1 0 1.414l-.71.71a1 1 0 1 1-1.414-1.414l.71-.71a1 1 0 0 1 1.414 0ZM6.347 19.067a1 1 0 1 0-1.414-1.414l-.71.71a1 1 0 1 0 1.414 1.414l.71-.71ZM20 12a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1ZM2 11a1 1 0 1 0 0 2h1a1 1 0 1 0 0-2H2Zm15.653 6.653a1 1 0 0 1 1.414 0l.71.71a1 1 0 0 1-1.414 1.414l-.71-.71a1 1 0 0 1 0-1.414ZM5.637 4.223a1 1 0 1 0-1.414 1.414l.71.71a1 1 0 0 0 1.414-1.414l-.71-.71Zm2.12 3.534a6 6 0 1 1 8.486 8.486 6 6 0 0 1-8.486-8.486Z"></path></svg></span><span class="wp-block-tabor-dark-mode-toggle__icon wp-block-tabor-dark-mode-toggle__icon--dark" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M12.056 3.6a1 1 0 0 0-.908-1.564c-5.123.434-9.144 4.728-9.144 9.962 0 5.522 4.476 9.998 9.998 9.998 5.234 0 9.528-4.021 9.962-9.144a1 1 0 0 0-1.564-.908A6 6 0 0 1 12.055 3.6Z"></path></svg></span></span></span></label></div>
<!-- /wp:tabor/dark-mode-toggle -->
