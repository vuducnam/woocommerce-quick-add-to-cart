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
<style>
#wqatc-form .row{margin-bottom: 10px;}
</style>
<form method="post" id="wqatc-form">
	<h2><?php echo WQATC_PLUGIN_NAME;?></h2>
	<div class="container">
		<div class="jumbotron" style="background:none;">

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
						    	
						    	<?php foreach($value as $val):?>
						    	<div class="row">
						    		<div class="form-group">
						    			<label for="inputEmail3" class="col-sm-2 control-label"><?php echo $val->name;?></label>
									    <div class="col-md-4" data-display="<?php echo $key;?>">
									    	<select name="select-<?php echo $key;?>-<?php echo $val->slug;?>" class="form-control" data-display="<?php echo $key;?>">
												<option value="text">Text</option>
												<option value="color">Color</option>
											</select>
									    </div>
									    <div class="type-color col-md-1" data-display="<?php echo $key;?>" style="display:none;">
									      <input type="color" name="input-<?php echo $key;?>-<?php echo $val->slug;?>" class="form-control" id="inputEmail3" placeholder="color">
									    </div>
						    		</div>
						    	</div>
						    	<?php endforeach;?>

							</div>
						</div>
					</div>
					<?php $i++;endforeach;?>

				<?php else:?>

					<?php echo 'Attribute is not set.';?>

				<?php endif;?>
				
			</div>
		</div>
	</div>
	<?php submit_button( __('Save', 'nam') );?>
</form>