<?php
class FluidCache_Standalone_Blog_partial_Post_7a8478c56e51dcff8cf853e2fa226d163e5adb1a extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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

$output0 .= '<article id="';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments1 = array();
$arguments1['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments1['keepQuotes'] = false;
$arguments1['encoding'] = 'UTF-8';
$arguments1['doubleEncode'] = true;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$value3 = ($arguments1['value'] !== NULL ? $arguments1['value'] : $renderChildrenClosure2());

$output0 .= (!is_string($value3) ? $value3 : htmlspecialchars($value3, ($arguments1['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments1['encoding'], $arguments1['doubleEncode']));

$output0 .= '">
	<h2>
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments4 = array();
// Rendering Boolean node
$arguments4['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext), 'show');
$arguments4['then'] = NULL;
$arguments4['else'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper
$arguments7 = array();
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$output9 = '';

$output9 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output9 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output9 .= '
			';
return $output9;
};
$viewHelper13 = $self->getViewHelper('$viewHelper13', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ThenViewHelper');
$viewHelper13->setArguments($arguments7);
$viewHelper13->setRenderingContext($renderingContext);
$viewHelper13->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ThenViewHelper

$output6 .= $viewHelper13->initializeArgumentsAndRender();

$output6 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper
$arguments14 = array();
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
				<a href="index.php?action=show&post=';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments17 = array();
$arguments17['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments17['keepQuotes'] = false;
$arguments17['encoding'] = 'UTF-8';
$arguments17['doubleEncode'] = true;
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$value19 = ($arguments17['value'] !== NULL ? $arguments17['value'] : $renderChildrenClosure18());

$output16 .= (!is_string($value19) ? $value19 : htmlspecialchars($value19, ($arguments17['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments17['encoding'], $arguments17['doubleEncode']));

$output16 .= '">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments20 = array();
$arguments20['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments20['keepQuotes'] = false;
$arguments20['encoding'] = 'UTF-8';
$arguments20['doubleEncode'] = true;
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output16 .= (!is_string($value22) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments20['encoding'], $arguments20['doubleEncode']));

$output16 .= '</a>
			';
return $output16;
};
$viewHelper23 = $self->getViewHelper('$viewHelper23', $renderingContext, 'TYPO3\Fluid\ViewHelpers\ElseViewHelper');
$viewHelper23->setArguments($arguments14);
$viewHelper23->setRenderingContext($renderingContext);
$viewHelper23->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\ElseViewHelper

$output6 .= $viewHelper23->initializeArgumentsAndRender();

$output6 .= '
		';
return $output6;
};
$arguments4['__thenClosure'] = function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
				';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = 'UTF-8';
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output24 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments25['encoding'], $arguments25['doubleEncode']));

$output24 .= '
			';
return $output24;
};
$arguments4['__elseClosure'] = function() use ($renderingContext, $self) {
$output28 = '';

$output28 .= '
				<a href="index.php?action=show&post=';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments29 = array();
$arguments29['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.id', $renderingContext);
$arguments29['keepQuotes'] = false;
$arguments29['encoding'] = 'UTF-8';
$arguments29['doubleEncode'] = true;
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$value31 = ($arguments29['value'] !== NULL ? $arguments29['value'] : $renderChildrenClosure30());

$output28 .= (!is_string($value31) ? $value31 : htmlspecialchars($value31, ($arguments29['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments29['encoding'], $arguments29['doubleEncode']));

$output28 .= '">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments32 = array();
$arguments32['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments32['keepQuotes'] = false;
$arguments32['encoding'] = 'UTF-8';
$arguments32['doubleEncode'] = true;
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output28 .= (!is_string($value34) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments32['encoding'], $arguments32['doubleEncode']));

$output28 .= '</a>
			';
return $output28;
};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper35->setArguments($arguments4);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper35->initializeArgumentsAndRender();

$output0 .= '
	</h2>
	<div class="article__teaser">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments36 = array();
$arguments36['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.teaser', $renderingContext);
$arguments36['keepQuotes'] = false;
$arguments36['encoding'] = 'UTF-8';
$arguments36['doubleEncode'] = true;
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$value38 = ($arguments36['value'] !== NULL ? $arguments36['value'] : $renderChildrenClosure37());

$output0 .= (!is_string($value38) ? $value38 : htmlspecialchars($value38, ($arguments36['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments36['encoding'], $arguments36['doubleEncode']));

$output0 .= '
	</div>
	<footer>
		<span class="article__date">';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments39 = array();
$arguments39['format'] = 'd.m.Y';
$arguments39['date'] = NULL;
$arguments39['forceLocale'] = NULL;
$arguments39['localeFormatType'] = NULL;
$arguments39['localeFormatLength'] = NULL;
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
};
$viewHelper41 = $self->getViewHelper('$viewHelper41', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper41->setArguments($arguments39);
$viewHelper41->setRenderingContext($renderingContext);
$viewHelper41->setRenderChildrenClosure($renderChildrenClosure40);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output0 .= $viewHelper41->initializeArgumentsAndRender();

$output0 .= '</span>
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper
$arguments42 = array();
// Rendering Boolean node
$arguments42['condition'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'settings.action', $renderingContext), 'show');
$arguments42['then'] = NULL;
$arguments42['else'] = NULL;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
return '
			<a href="/" class="back">Zurück zur Übersicht</a>
		';
};
$viewHelper44 = $self->getViewHelper('$viewHelper44', $renderingContext, 'TYPO3\Fluid\ViewHelpers\IfViewHelper');
$viewHelper44->setArguments($arguments42);
$viewHelper44->setRenderingContext($renderingContext);
$viewHelper44->setRenderChildrenClosure($renderChildrenClosure43);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\IfViewHelper

$output0 .= $viewHelper44->initializeArgumentsAndRender();

$output0 .= '
	</footer>
</article>
';

return $output0;
}


}
#1439047811    11658     