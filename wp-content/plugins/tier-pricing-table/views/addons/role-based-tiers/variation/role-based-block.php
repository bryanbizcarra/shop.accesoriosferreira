<?php use Premmerce\SDK\V2\FileManager\FileManager;
use TierPricingTable\Addons\RoleBasedTiers\RoleBasedPriceManager;
use TierPricingTable\Addons\RoleBasedTiers\RoleBasedTiersAddon;

defined( "ABSPATH" ) || die;

/**
 * @var FileManager $fileManager
 * @var int $product_id
 * @var int $loop
 * @var bool $is_premium
 */

?>
<div class="form-row form-row-full show_if_variable_roles_tiered_pricing form-field">
    <div class="form-field tpt-role-based-block tpt-role-based-block--variation"
         id="tpt-role-based-block-<?php echo $product_id; ?>"
         data-product-type="variation"
         data-add-action="<?php echo esc_attr( RoleBasedTiersAddon::GET_ROLE_ROW_HTML__ACTION ); ?>"
         data-add-action-nonce="<?php echo esc_attr( wp_create_nonce( RoleBasedTiersAddon::GET_ROLE_ROW_HTML__ACTION ) ); ?>"
         data-product-id="<?php echo esc_attr( $product_id ); ?>"
         data-loop="<?php echo $loop; ?>"
    >
        <label class="tpt-role-based-block__name"><?php _e( 'Role based rules', 'tier-pricing-table' ); ?></label>
        <div class="tpt-role-based-block__content">

            <div class="tpt-role-based-roles">

				<?php

				$presentRoles = [];

				foreach ( wp_roles()->roles as $role => $role_data ) {
					if ( RoleBasedPriceManager::roleHasRules( $role, $product_id ) ) {

						$fileManager->includeTemplate( 'addons/role-based-tiers/variation/role.php', [
							'fileManager'            => $fileManager,
							'minimum_amount'         => RoleBasedPriceManager::getProductQtyMin( $product_id, $role, 'edit' ),
							'price_rules_fixed'      => RoleBasedPriceManager::getFixedPriceRules( $product_id, $role, 'edit' ),
							'price_rules_percentage' => RoleBasedPriceManager::getPercentagePriceRules( $product_id, $role, 'edit' ),
							'type'                   => RoleBasedPriceManager::getPricingType( $product_id, $role, 'fixed', 'edit' ),
							'role'                   => $role,
							'loop'                   => $loop,
						] );

						$presentRoles[] = $role;
					}
				}
				?>
            </div>

            <div class="tpt-role-based-no-roles"
                 style="<?php echo ! empty( $presentRoles ) ? 'display: none;' : ''; ?>">
                <span><?php _e( 'Set up separate rules for different roles of customers. Choose role and click "Setup for role" button.', 'tier-pricing-table' ); ?></span>
            </div>

            <div class="tpt-role-based-adding-form">
                <select class="tpt-role-based-adding-form__role-selector" style="margin: 0; width: 150px">
					<?php foreach ( wp_roles()->roles as $key => $role ): ?>
						<?php if ( ! in_array( $key, $presentRoles ) ): ?>
                            <option value="<?php echo $key; ?>"><?php echo $role['name']; ?></option>
						<?php endif; ?>
					<?php endforeach; ?>
                </select>

                <button class="button tpt-role-based-adding-form__add-button"
                        style="height: 40px" <?php echo ! $is_premium ? 'disabled' : ''; ?>>
                    <?php _e( 'Setup for role', 'tier-pricing-table' ); ?>
                </button>

	            <?php if ( ! $is_premium ): ?>
                    <p style="color:red">Available only in the premium version</p>
	            <?php endif; ?>
                <div class="clear"></div>
            </div>

            <select name="tiered_price_rules_roles_to_delete_variable[<?php echo esc_attr( $loop ) ?>][]"
                    class="tiered_price_rules_roles_to_delete" multiple
                    style="display:none;">
				<?php foreach ( wp_roles()->roles as $key => $role ): ?>
                    <option value="<?php echo $key; ?>"><?php echo $role['name']; ?></option>
				<?php endforeach; ?>
            </select>
        </div>
    </div>
</div>