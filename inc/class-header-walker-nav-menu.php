<?php
/**
 * 
 */
class Header_Walker_Nav_Menu extends Walker_Nav_Menu
{
  /**
  * ul.sub-menuに.hide追加
  * Walker_Nav_Menu#start_lvlのコピペ
  */
  public function start_lvl( &$output, $depth = 0, $args = array() ) {
    if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
      $t = '';
      $n = '';
    } else {
      $t = "\t";
      $n = "\n";
    }
    $indent = str_repeat( $t, $depth );

    // Default class.
    $classes = array( 'sub-menu', 'hide' ); # .hideを追加

    /**
     * Filters the CSS class(es) applied to a menu list element.
     *
     * @since 4.8.0
     *
     * @param array    $classes The CSS classes that are applied to the menu `<ul>` element.
     * @param stdClass $args    An object of `wp_nav_menu()` arguments.
     * @param int      $depth   Depth of menu item. Used for padding.
     */
    $class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

    $output .= "{$n}{$indent}<ul$class_names>{$n}";
  }
}
