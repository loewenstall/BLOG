<?php
class FluidCache_Standalone_Blog_layout_Default_1b90a5b3a6bab37ce5ff51f799d78e3fca984b2f extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<html lang="de">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="de">

	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments1 = array();
$arguments1['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'styles', $renderingContext);
$arguments1['as'] = 'style';
$arguments1['key'] = '';
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
	<link rel="stylesheet" href="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'stlye.href', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']));

$output3 .= '" media="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'stlye.media', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output3 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));

$output3 .= '"
	';
return $output3;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</head>
<body>
<div class="content">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['section'] = 'main';
$arguments10['partial'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['optional'] = false;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments13 = array();
$arguments13['title'] = NULL;
$arguments13['maxDepth'] = 8;
$arguments13['plainText'] = false;
$arguments13['ansiColors'] = false;
$arguments13['inline'] = false;
$arguments13['blacklistedClassNames'] = NULL;
$arguments13['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = 'UTF-8';
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());
return (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments15['encoding'], $arguments15['doubleEncode']));
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper18->setArguments($arguments13);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '
</div>
</body>
</html>
';

return $output0;
}


}
#1438879654    5400      