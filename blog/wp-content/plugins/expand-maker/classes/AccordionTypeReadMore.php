<?php
require_once(YRM_CLASSES.'ReadMoreTypes.php');

class AccordionTypeReadMore extends ReadMoreTypes {
	public function renderContent() {
		$this->prepareSavedValue();
		$tabs = $this->getOptionValue('yrm-accordion');
		require_once(dirname(__FILE__).'/ReadMoreAccordionView.php');

		return new ReadMoreAccordionView($this);
	}

	public function __construct() {
		$this->filters();
		$this->scripts();
	}

	private function filters() {
		add_filter('yrmTypesViewFiles', array($this, 'yrmTypesViewFiles'), 10, 1);
		add_filter('yrmOptionsCongifFilter', array($this, 'defaultOption'), 10, 1);
	}

	public function defaultOption($options)
	{
		$tabs = array(
			array('label' => 'Tab 1', 'content' => 'Content'),
			array('label' => 'Tab 2', 'content' => 'Content')
		);
		$options[] = array('name' => 'yrm-accordion', 'type' => 'yrm', 'defaultValue' => $tabs);

		return $options;
	}

	private function scripts() {
		wp_enqueue_script('tiny_mce');
		wp_enqueue_editor();

		wp_register_script('AccordionBuilder.js', YRM_ADMIN_JAVASCRIPT.'AccordionBuilder.js', array());
		wp_enqueue_script('AccordionBuilder.js');

		wp_register_style('accordion.css', YRM_ADMIN_CSS_URL.'/accordion.css', array());
		wp_enqueue_style('accordion.css');
	}

	public function yrmTypesViewFiles($files) {
		$files[] = YRM_VIEWS.'accordion/generalView.php';
		return $files;
	}

	public function defaultOptions($defaultData) {
		$defaultData['btn-background-color'] = '';
		$defaultData['add-button-next-content'] = '1';
		return $defaultData;
	}

	public function allSavedOptions($options) {
		$options['btn-background-color'] = '';
		$options['add-button-next-content'] = '1';
		return $options;
	}

	public function getRemoveOptions() {

		return array(
			'button-width' => 1,
			'button-height' => 1,
			'btn-background-color' => 1,
			'btn-border-radius' => 1,
			'button-border' => 1,
			'button-box-shadow' => 1,
			'btn-hover-bg-color' => 1,
			'btn-dimension-mode' => 1,
			'button-border-bottom' => 1
		);
	}

	public static function params() {

		$data = array();

		return $data;
	}

	public function includeOptionsBlock($dataObj) {
		wp_register_script('YrmLink', YRM_JAVASCRIPT.'YrmLink.js', array('readMoreJs', 'jquery-effects-core'), EXPM_VERSION);
		wp_enqueue_script('YrmLink');
		require_once(YRM_VIEWS_SECTIONS.'aLinkCutsomOptions.php');
	}

	public function create($postData) {
		$editorKey = 'yrm-accordion-content-';
		foreach ($postData as $name => $value) {
			if (strpos($name, $editorKey) === 0) {
				$accordionIndex = (int)explode($editorKey, $name)[1];
				$postData['yrm-accordion'][$accordionIndex]['content'] = $value;
				unset($postData[$name]);
			}
		}
		parent::create($postData);
	}
}