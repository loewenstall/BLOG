<?php
class FluidCache_Standalone_Blog_partial_Post_6c8464515a2f5a018b2a445147d673ee6ac764d8 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper
$arguments4 = array();
$arguments4['action'] = 'show';
// Rendering Array
$array5 = array();
$array5['post'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post', $renderingContext);
$arguments4['arguments'] = $array5;
$arguments4['additionalAttributes'] = NULL;
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['linkAccessRestrictedPages'] = false;
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['name'] = NULL;
$arguments4['rel'] = NULL;
$arguments4['rev'] = NULL;
$arguments4['target'] = NULL;
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.title', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());
return (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));
};
$viewHelper10 = $self->getViewHelper('$viewHelper10', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper');
$viewHelper10->setArguments($arguments4);
$viewHelper10->setRenderingContext($renderingContext);
$viewHelper10->setRenderChildrenClosure($renderChildrenClosure6);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Link\ActionViewHelper

$output0 .= $viewHelper10->initializeArgumentsAndRender();

$output0 .= '
	</h2>
	<div class="article__teaser">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments11 = array();
$arguments11['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.teaser', $renderingContext);
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = 'UTF-8';
$arguments11['doubleEncode'] = true;
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
return NULL;
};
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output0 .= (!is_string($value13) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments11['encoding'], $arguments11['doubleEncode']));

$output0 .= '
	</div>
	<footer>
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments14 = array();
$arguments14['format'] = 'd.m.Y';
$arguments14['date'] = NULL;
$arguments14['forceLocale'] = NULL;
$arguments14['localeFormatType'] = NULL;
$arguments14['localeFormatLength'] = NULL;
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'post.crdate', $renderingContext);
};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper16->setArguments($arguments14);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '
	</footer>
</article>
';

return $output0;
}


}
#1438883991    5872      