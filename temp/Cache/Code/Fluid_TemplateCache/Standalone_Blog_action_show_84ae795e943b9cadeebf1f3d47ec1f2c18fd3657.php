<?php
class FluidCache_Standalone_Blog_action_show_84ae795e943b9cadeebf1f3d47ec1f2c18fd3657 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments1 = array();
$arguments1['title'] = NULL;
$arguments1['maxDepth'] = 8;
$arguments1['plainText'] = false;
$arguments1['ansiColors'] = false;
$arguments1['inline'] = false;
$arguments1['blacklistedClassNames'] = NULL;
$arguments1['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments3 = array();
$arguments3['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments3['keepQuotes'] = false;
$arguments3['encoding'] = 'UTF-8';
$arguments3['doubleEncode'] = true;
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
return NULL;
};
$value5 = ($arguments3['value'] !== NULL ? $arguments3['value'] : $renderChildrenClosure4());
return (!is_string($value5) ? $value5 : htmlspecialchars($value5, ($arguments3['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments3['encoding'], $arguments3['doubleEncode']));
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper6->setArguments($arguments1);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= '
';

return $output0;
}


}
#1438878529    2198      