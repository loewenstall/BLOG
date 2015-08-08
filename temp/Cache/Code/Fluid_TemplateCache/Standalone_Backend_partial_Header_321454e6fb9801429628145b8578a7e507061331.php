<?php
class FluidCache_Standalone_Backend_partial_Header_321454e6fb9801429628145b8578a7e507061331 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
		<span class="controls__info" title="BLOG ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']));

$output0 .= ' &copy; 2015 Marc Scherer"></span>
		<ul class="nav">
			<li>
				<a class="controls__cache-item">Cache</a>
				<ul class="nav__sub">
					<li><a href="#" data-module="cache" data-type="fe">Clear frontend cache</a></li>
					<li><a href="#" data-module="cache" data-type="syslog">Clear syslog</a></li>
					<li><a href="#" data-module="cache" data-type="all">Clear all caches</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<span class="controls__user">
		Welcome <strong>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext));
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments9 = array();
$arguments9['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext);
$arguments9['keepQuotes'] = false;
$arguments9['encoding'] = 'UTF-8';
$arguments9['doubleEncode'] = true;
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$value11 = ($arguments9['value'] !== NULL ? $arguments9['value'] : $renderChildrenClosure10());
return (!is_string($value11) ? $value11 : htmlspecialchars($value11, ($arguments9['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments9['encoding'], $arguments9['doubleEncode']));
};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper12->setArguments($arguments7);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output6 .= $viewHelper12->initializeArgumentsAndRender();
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments13 = array();
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments15 = array();
$arguments15['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name', $renderingContext);
$arguments15['keepQuotes'] = false;
$arguments15['encoding'] = 'UTF-8';
$arguments15['doubleEncode'] = true;
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$value17 = ($arguments15['value'] !== NULL ? $arguments15['value'] : $renderChildrenClosure16());
return (!is_string($value17) ? $value17 : htmlspecialchars($value17, ($arguments15['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments15['encoding'], $arguments15['doubleEncode']));
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper18->setArguments($arguments13);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output6 .= $viewHelper18->initializeArgumentsAndRender();
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.fullname', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = 'UTF-8';
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());
return (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments19['encoding'], $arguments19['doubleEncode']));
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'user.name', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());
return (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));
};
$viewHelper25 = $self->getViewHelper('$viewHelper25', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper25->setArguments($arguments4);
$viewHelper25->setRenderingContext($renderingContext);
$viewHelper25->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper25->initializeArgumentsAndRender();

$output0 .= '</strong>
		<a href="?action=profile"> Profile</a>
		<a href="?action=logout"> Logout</a>
	</span>
</header>
';

return $output0;
}


}
#1438953356    7372      