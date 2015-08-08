<?php
class FluidCache_Standalone_Blog_action_list_26a0b374f17cd9661bbb00c9d5626d07773b1947 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section main
 */
public function section_b28b7af69320201d1cf206ebf28373980add1451(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments1 = array();
$arguments1['partial'] = 'Header';
$arguments1['section'] = NULL;
$arguments1['arguments'] = array (
);
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
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments4 = array();
$arguments4['title'] = NULL;
$arguments4['maxDepth'] = 8;
$arguments4['plainText'] = false;
$arguments4['ansiColors'] = false;
$arguments4['inline'] = false;
$arguments4['blacklistedClassNames'] = NULL;
$arguments4['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = 'UTF-8';
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());
return (!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments6['encoding'], $arguments6['doubleEncode']));
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper9->setArguments($arguments4);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output0 .= $viewHelper9->initializeArgumentsAndRender();

$output0 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'Footer';
$arguments10['section'] = NULL;
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

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output13 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments14 = array();
$arguments14['name'] = 'Default';
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output13 .= $viewHelper16->initializeArgumentsAndRender();

$output13 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments17 = array();
$arguments17['name'] = 'main';
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
$output19 = '';

$output19 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments20 = array();
$arguments20['partial'] = 'Header';
$arguments20['section'] = NULL;
$arguments20['arguments'] = array (
);
$arguments20['optional'] = false;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper22->setArguments($arguments20);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output19 .= $viewHelper22->initializeArgumentsAndRender();

$output19 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments23 = array();
$arguments23['title'] = NULL;
$arguments23['maxDepth'] = 8;
$arguments23['plainText'] = false;
$arguments23['ansiColors'] = false;
$arguments23['inline'] = false;
$arguments23['blacklistedClassNames'] = NULL;
$arguments23['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = 'UTF-8';
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());
return (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments25['encoding'], $arguments25['doubleEncode']));
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper28->setArguments($arguments23);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure24);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output19 .= $viewHelper28->initializeArgumentsAndRender();

$output19 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'Footer';
$arguments29['section'] = NULL;
$arguments29['arguments'] = array (
);
$arguments29['optional'] = false;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output19 .= $viewHelper31->initializeArgumentsAndRender();

$output19 .= '
';
return $output19;
};

$output13 .= '';

$output13 .= '
';

return $output13;
}


}
#1438883315    7918      