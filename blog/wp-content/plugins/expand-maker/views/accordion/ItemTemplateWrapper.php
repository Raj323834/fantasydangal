<div class="yrm-element-info-wrapper">
	<div class="yrm-view-element-wrapper" data-options="false">
		<div class="yrm-element-label-wrapper">
			<span class="sub-option-hidden-data"></span>
			<i class="fa fa-chevron-right"></i><span>Item: <span class="tab-header-label"><?php echo esc_attr($tab['label']);?></span></span>
		</div>
		<div class="yrm-element-conf-wrapper">
			<span class="yrm-conf-element yrm-conf-home"></span>
			<i class="fa fa-trash delete-accordion-item" data-key="<?php echo esc_attr($key); ?>" aria-hidden="true"></i>
		</div>
	</div>
	<div class="yrm-element-options-wrapper yrm-hide-element" >
		<div class="row form-group">
			<div class="col-md-6">
				<label><?php _e('Label1', YRM_LANG); ?></label>
			</div>
			<div class="col-md-6">
				<input type="text" class="form-control yrm-accordion-label" name="yrm-accordion[<?php echo esc_attr($key) ?>][label]" value="<?php echo esc_attr($tab['label']);?>">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12">
				<label><?php _e('Before Form Content', YRM_LANG); ?></label>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12 accordion-editor-wrapper">
				<?php
				$editorId = 'yrm-accordion-content-'.esc_attr($key);
				$content = $tab['content'];
				$settings = array(
					'wpautop' => false,
					'tinymce' => array(
						'width' => '100%'
					),
					'textarea_rows' => '18',
					'media_buttons' => true
				);
				wp_editor($content, htmlspecialchars($editorId), $settings);
				?>
			</div>
		</div>
	</div>
	<div class="yrm-element-margin-bottom"></div>
</div>