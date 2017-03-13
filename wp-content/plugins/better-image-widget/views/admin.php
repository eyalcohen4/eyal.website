<?php
if ( ! defined( 'ABSPATH' ) ) {
	  die( 'No Base Path' );
}
?>
<div class="widget">
  <div class="widget__upload">

    <label for="<?php echo $this->get_field_id ?>"> Title: </label>

    <input
          name="<?php echo $this->get_field_name( 'title' ); ?>"
          type="text" id="<?php echo $this->get_field_id ?>"
          value="<?php echo esc_attr( $title ) ?>" />

  </div>
</div>
