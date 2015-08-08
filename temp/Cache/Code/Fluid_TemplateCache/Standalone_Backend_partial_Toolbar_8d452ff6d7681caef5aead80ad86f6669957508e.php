<?php
class FluidCache_Standalone_Backend_partial_Toolbar_8d452ff6d7681caef5aead80ad86f6669957508e extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<header>
	';
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
	Willkommen ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments7 = array();
// Rendering Boolean node
$arguments7['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext));
$arguments7['then'] = NULL;
$arguments7['else'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = 'UTF-8';
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());
return (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments12['encoding'], $arguments12['doubleEncode']));
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper15->setArguments($arguments10);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output9 .= $viewHelper15->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments16 = array();
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments18 = array();
$arguments18['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name', $renderingContext);
$arguments18['keepQuotes'] = false;
$arguments18['encoding'] = 'UTF-8';
$arguments18['doubleEncode'] = true;
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$value20 = ($arguments18['value'] !== NULL ? $arguments18['value'] : $renderChildrenClosure19());
return (!is_string($value20) ? $value20 : htmlspecialchars($value20, ($arguments18['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments18['encoding'], $arguments18['doubleEncode']));
};
$viewHelper21 = $self->getViewHelper('$viewHelper21', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper21->setArguments($arguments16);
$viewHelper21->setRenderingContext($renderingContext);
$viewHelper21->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output9 .= $viewHelper21->initializeArgumentsAndRender();
return $output9;
};
$arguments7['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());
return (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));
};
$arguments7['__elseClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = 'UTF-8';
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());
return (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments25['encoding'], $arguments25['doubleEncode']));
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper28->setArguments($arguments7);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper28->initializeArgumentsAndRender();

$output0 .= '
</header>
';

return $output0;
}


}
#1438907196    7540      