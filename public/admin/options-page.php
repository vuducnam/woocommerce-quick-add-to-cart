<?php 
/**
 * Options page template
 *
 * @link       http://vuducnam.com/
 * @since      1.0
 *
 * @package    woocommerce-quick-add-to-cart
 * @subpackage woocommerce-quick-add-to-cart/public/admin
 * @author     Vu Duc Nam <vuduc.nam64@gmail.com>
 */
defined( 'ABSPATH' ) OR exit;

$woo_attr = self::_get_attribute();
?>
<form method="post" id="wqatc-form">
	<h2><?php echo WQATC_PLUGIN_NAME;?></h2>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		
		<?php if( !empty($woo_attr) ): ?>
		
			<?php $i = 1;foreach( $woo_attr as $key => $value ):?>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading-<?php echo $i;?>">
					<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i;?>" aria-expanded="true" aria-controls="collapse-<?php echo $i;?>">
						<?php echo esc_html($key);?>
					</a>
					</h4>
				</div>
				<div id="collapse-<?php echo $i;?>" class="panel-collapse <?php if( $i==1 ){echo esc_attr('collapse in');}?>" role="tabpanel" aria-labelledby="heading-<?php echo $i;?>">
				  <div class="panel-body">
				    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
				  </div>
				</div>
			</div>
			<?php $i++;endforeach;?>

		<?php else:?>

			<?php echo 'Attribute is not set.';?>

		<?php endif;?>



		
	</div>
	<?php submit_button( __('Save', 'nam') );?>
</form>