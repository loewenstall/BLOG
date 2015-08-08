<?php
class FluidCache_Standalone_Post_action_list_c19d5795715f9707ee08af44828b46386bccb067 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Backend';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;

return '
<div class="content__container">
	<h1>BLOG posts</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
	</div>
</div>
';
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments1 = array();
$arguments1['name'] = 'Backend';
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments4 = array();
$arguments4['name'] = 'main';
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return '
<div class="content__container">
	<h1>BLOG posts</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
	</div>
</div>
';
};

$output0 .= '';

$output0 .= '
';

return $output0;
}


}
#1438960409    1928      