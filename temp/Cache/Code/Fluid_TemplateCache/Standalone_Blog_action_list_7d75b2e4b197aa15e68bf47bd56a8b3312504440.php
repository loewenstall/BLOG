<?php
class FluidCache_Standalone_Blog_action_list_7d75b2e4b197aa15e68bf47bd56a8b3312504440 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments7 = array();
$arguments7['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments7['as'] = 'post';
$arguments7['key'] = '';
$arguments7['reverse'] = false;
$arguments7['iteration'] = NULL;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments10 = array();
$arguments10['partial'] = 'Post';
$arguments10['arguments'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments10['section'] = NULL;
$arguments10['optional'] = false;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper12->setArguments($arguments10);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output9 .= $viewHelper12->initializeArgumentsAndRender();

$output9 .= '
	';
return $output9;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments20 = array();
$arguments20['title'] = NULL;
$arguments20['maxDepth'] = 8;
$arguments20['plainText'] = false;
$arguments20['ansiColors'] = false;
$arguments20['inline'] = false;
$arguments20['blacklistedClassNames'] = NULL;
$arguments20['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());
return (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper25->setArguments($arguments20);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure21);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output19 .= $viewHelper25->initializeArgumentsAndRender();

$output19 .= '
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments26 = array();
$arguments26['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments26['as'] = 'post';
$arguments26['key'] = '';
$arguments26['reverse'] = false;
$arguments26['iteration'] = NULL;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments29 = array();
$arguments29['partial'] = 'Post';
$arguments29['arguments'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments29['section'] = NULL;
$arguments29['optional'] = false;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper31->setArguments($arguments29);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output28 .= $viewHelper31->initializeArgumentsAndRender();

$output28 .= '
	';
return $output28;
};

$output19 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

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
#1438890489    8024      