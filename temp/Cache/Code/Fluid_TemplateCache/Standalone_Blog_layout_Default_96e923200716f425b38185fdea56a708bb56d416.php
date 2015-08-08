<?php
class FluidCache_Standalone_Blog_layout_Default_96e923200716f425b38185fdea56a708bb56d416 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
$arguments1['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'stylesheets', $renderingContext);
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
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'style', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output3 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']));

$output3 .= '" media="all" />
	';
return $output3;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
</head>
<body>
';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments7 = array();
$arguments7['title'] = NULL;
$arguments7['maxDepth'] = 8;
$arguments7['plainText'] = false;
$arguments7['ansiColors'] = false;
$arguments7['inline'] = false;
$arguments7['blacklistedClassNames'] = NULL;
$arguments7['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = 'UTF-8';
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());
return (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments9['encoding'], $arguments9['doubleEncode']));
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper12->setArguments($arguments7);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
<div class="content">
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments13 = array();
$arguments13['partial'] = 'Header';
$arguments13['section'] = NULL;
$arguments13['arguments'] = array (
);
$arguments13['optional'] = false;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= '

	<div class="main">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['section'] = 'main';
$arguments16['partial'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= '
	</div>
	<aside>

	</aside>
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments19 = array();
$arguments19['partial'] = 'Footer';
$arguments19['section'] = NULL;
$arguments19['arguments'] = array (
);
$arguments19['optional'] = false;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper21->setArguments($arguments19);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure20);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output0 .= $viewHelper21->initializeArgumentsAndRender();

$output0 .= '
</div>

</body>
</html>
';

return $output0;
}


}
#1439047811    6143      