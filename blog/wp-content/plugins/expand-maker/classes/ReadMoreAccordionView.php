<?php

class ReadMoreAccordionView {
	private $uniqid;
	private $typeObj;

	public function __construct($typeObj) {
		$this->uniqid = uniqid();
		$this->typeObj = $typeObj;
	}

	private function accordionItem($index, $value) {
		ob_start();
		?>
		<div class="yrm-accordion-item yrm-accordion-item-<?php echo esc_attr($index); ?>" data-expanded="false">
			<div class="yrm-accordion-item-header">
				<i class="fa fa-chevron-right accordion-header-icon"></i>
				<span><?php echo esc_attr($value['label']); ?></span>
			</div>
			<div class="yrm-accordion-item-content">
				<?php echo $value['content']?>
			</div>
		</div>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}

	private function enqueScripts() {

		wp_register_style('yrmaccordion.css', YRM_CSS_URL.'accordion/accordion.css');
		wp_enqueue_style('yrmaccordion.css');

		wp_register_script('YrmAccordion.js', YRM_JAVASCRIPT.'accordion/YrmAccordion.js');
		wp_enqueue_script('YrmAccordion.js');
	}

	public function __toString() {
		$this->enqueScripts();
		ob_start();
		?>
		<div class="yrm-accordion-wrapper" id="<?php echo esc_attr($this->uniqid); ?>">
			<?php foreach ($this->typeObj->getOptionValue('yrm-accordion') as $index => $value): ?>
				<?php echo $this->accordionItem($index, $value); ?>
			<?php endforeach;?>
		</div>
		<?php
		$content = ob_get_contents();
		ob_end_clean();

		return $content;
	}
}