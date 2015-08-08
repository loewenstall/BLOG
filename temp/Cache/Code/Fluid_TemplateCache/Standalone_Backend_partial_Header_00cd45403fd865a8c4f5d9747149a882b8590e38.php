<?php
class FluidCache_Standalone_Backend_partial_Header_00cd45403fd865a8c4f5d9747149a882b8590e38 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<header class="controls">
	<nav class="controls__cache">
		<ul>
			<li>
				<a>Cache</a>
				<ul>
					<li><a href="#" data-module="cache" data-type="fe">Clear frontend cache</a></li>
					<li><a href="#" data-module="cache" data-type="syslog">Clear syslog</a></li>
					<li><a href="#" data-module="cache" data-type="all">Clear all caches</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<span class="controls_user">Welcome <strong>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext));
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output3 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments6 = array();
$arguments6['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext);
$arguments6['keepQuotes'] = false;
$arguments6['encoding'] = 'UTF-8';
$arguments6['doubleEncode'] = true;
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
return NULL;
};
$value8 = ($arguments6['value'] !== NULL ? $arguments6['value'] : $renderChildrenClosure7());
return (!is_string($value8) ? $value8 : htmlspecialchars($value8, ($arguments6['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments6['encoding'], $arguments6['doubleEncode']));
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper9->setArguments($arguments4);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output3 .= $viewHelper9->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments10 = array();
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments12 = array();
$arguments12['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name', $renderingContext);
$arguments12['keepQuotes'] = false;
$arguments12['encoding'] = 'UTF-8';
$arguments12['doubleEncode'] = true;
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$value14 = ($arguments12['value'] !== NULL ? $arguments12['value'] : $renderChildrenClosure13());
return (!is_string($value14) ? $value14 : htmlspecialchars($value14, ($arguments12['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments12['encoding'], $arguments12['doubleEncode']));
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper15->setArguments($arguments10);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output3 .= $viewHelper15->initializeArgumentsAndRender();
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());
return (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']));
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = 'UTF-8';
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());
return (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments19['encoding'], $arguments19['doubleEncode']));
};
$viewHelper22 = $self->getViewHelper('$viewHelper22', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper22->setArguments($arguments1);
$viewHelper22->setRenderingContext($renderingContext);
$viewHelper22->setRenderChildrenClosure($renderChildrenClosure2);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper22->initializeArgumentsAndRender();

$output0 .= '</strong><a><i></i> Profile</a> <a>Logout</a></span>
</header>
';

return $output0;
}


}
#1438938109    6404      