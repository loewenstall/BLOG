<?php
class FluidCache_Standalone_Backend_layout_Login_c813914dfe23d7f3baf0ddb830f79844158d7148 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '<!DOCTYPE html>
<html>
<head lang="de">
	<meta charset="UTF-8">
	<title>BLOG Backend - Bitte einloggen</title>

	<link rel="stylesheet" href="View/Public/Stylesheets/main.css" media="all" />
</head>
<body class="login">
<div class="login_wrapper">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['section'] = 'main';
$arguments1['arguments'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments1['partial'] = NULL;
$arguments1['optional'] = false;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper3 = $self->getViewHelper('$viewHelper3', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper3->setArguments($arguments1);
$viewHelper3->setRenderingContext($renderingContext);
$viewHelper3->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper3->initializeArgumentsAndRender();

$output0 .= '
</div>
</body>
</html>
';

return $output0;
}


}
#1438898531    1787      