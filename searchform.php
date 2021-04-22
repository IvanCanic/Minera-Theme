<?php 
/**
 * Search form template.
 *
 * @package Minera
 */
?>

<form action="<?php echo esc_url( home_url('/') ); ?>" method="GET" class="search-form">
    <input 
        type="search" 
        class="search-form__input" 
        name="s" 
        placeholder="<?php echo esc_attr_x( 'Search ...', 'placeholder', 'minera' ); ?>" 
        value="<?php echo esc_attr(get_search_query()); ?>"
        tabindex="1";
    >
    <button type="submit" class="search-form__btn"><span class="dashicons dashicons-search"></span></button>
</form>