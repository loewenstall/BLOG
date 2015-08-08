<?php
class FluidCache_Standalone_Backend_action_dashboard_3493c9c8eb07fc8cbcc2d0bf7a2aa3c6394bd0bf extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// TODO
	return new \TYPO3\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {

return 'Backend';
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
<div class="content__container">
	<h1>BLOG running V';
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

$output0 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments4 = array();
$arguments4['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments4['keepQuotes'] = false;
$arguments4['encoding'] = 'UTF-8';
$arguments4['doubleEncode'] = true;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$value6 = ($arguments4['value'] !== NULL ? $arguments4['value'] : $renderChildrenClosure5());

$output0 .= (!is_string($value6) ? $value6 : htmlspecialchars($value6, ($arguments4['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments4['encoding'], $arguments4['doubleEncode']));

$output0 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicPostCount', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));

$output0 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenPostCount', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output0 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output0 .= '<br />
			Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']));

$output0 .= ' posts.
		</p>
		<h3>Latest post</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments16 = array();
$arguments16['format'] = 'd.m.Y';
$arguments16['date'] = NULL;
$arguments16['forceLocale'] = NULL;
$arguments16['localeFormatType'] = NULL;
$arguments16['localeFormatLength'] = NULL;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.crdate', $renderingContext);
};
$viewHelper18 = $self->getViewHelper('$viewHelper18', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper18->setArguments($arguments16);
$viewHelper18->setRenderingContext($renderingContext);
$viewHelper18->setRenderChildrenClosure($renderChildrenClosure17);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output0 .= $viewHelper18->initializeArgumentsAndRender();

$output0 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = 'UTF-8';
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());

$output0 .= (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments19['encoding'], $arguments19['doubleEncode']));

$output0 .= '
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output0 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));

$output0 .= ' in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = 'UTF-8';
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output0 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments25['encoding'], $arguments25['doubleEncode']));

$output0 .= ' posts.<br />
			Latest comment for "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = 'UTF-8';
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output0 .= (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments28['encoding'], $arguments28['doubleEncode']));

$output0 .= '": <a>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments31 = array();
$arguments31['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments31['keepQuotes'] = false;
$arguments31['encoding'] = 'UTF-8';
$arguments31['doubleEncode'] = true;
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$value33 = ($arguments31['value'] !== NULL ? $arguments31['value'] : $renderChildrenClosure32());

$output0 .= (!is_string($value33) ? $value33 : htmlspecialchars($value33, ($arguments31['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments31['encoding'], $arguments31['doubleEncode']));

$output0 .= '</a> (author: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments34 = array();
$arguments34['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.author', $renderingContext);
$arguments34['keepQuotes'] = false;
$arguments34['encoding'] = 'UTF-8';
$arguments34['doubleEncode'] = true;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output0 .= (!is_string($value36) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments34['encoding'], $arguments34['doubleEncode']));

$output0 .= ')
		</p>
	</div>
</div>
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output37 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments38 = array();
$arguments38['name'] = 'Backend';
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper40 = $self->getViewHelper('$viewHelper40', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper40->setArguments($arguments38);
$viewHelper40->setRenderingContext($renderingContext);
$viewHelper40->setRenderChildrenClosure($renderChildrenClosure39);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output37 .= $viewHelper40->initializeArgumentsAndRender();

$output37 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments41 = array();
$arguments41['name'] = 'main';
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = 'UTF-8';
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output43 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments44['encoding'], $arguments44['doubleEncode']));

$output43 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = 'UTF-8';
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output43 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments47['encoding'], $arguments47['doubleEncode']));

$output43 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicPostCount', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = 'UTF-8';
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output43 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments50['encoding'], $arguments50['doubleEncode']));

$output43 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenPostCount', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output43 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments53['encoding'], $arguments53['doubleEncode']));

$output43 .= '<br />
			Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = 'UTF-8';
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output43 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments56['encoding'], $arguments56['doubleEncode']));

$output43 .= ' posts.
		</p>
		<h3>Latest post</h3>
		<p>
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper
$arguments59 = array();
$arguments59['format'] = 'd.m.Y';
$arguments59['date'] = NULL;
$arguments59['forceLocale'] = NULL;
$arguments59['localeFormatType'] = NULL;
$arguments59['localeFormatLength'] = NULL;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.crdate', $renderingContext);
};
$viewHelper61 = $self->getViewHelper('$viewHelper61', $renderingContext, 'TYPO3\Fluid\ViewHelpers\Format\DateViewHelper');
$viewHelper61->setArguments($arguments59);
$viewHelper61->setRenderingContext($renderingContext);
$viewHelper61->setRenderChildrenClosure($renderChildrenClosure60);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\Format\DateViewHelper

$output43 .= $viewHelper61->initializeArgumentsAndRender();

$output43 .= ': ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = 'UTF-8';
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output43 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments62['encoding'], $arguments62['doubleEncode']));

$output43 .= '
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = 'UTF-8';
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output43 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments65['encoding'], $arguments65['doubleEncode']));

$output43 .= ' in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = 'UTF-8';
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output43 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments68['encoding'], $arguments68['doubleEncode']));

$output43 .= ' posts.<br />
			Latest comment for "';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = 'UTF-8';
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() use ($renderingContext, $self) {
return NULL;
};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output43 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments71['encoding'], $arguments71['doubleEncode']));

$output43 .= '": <a>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments74 = array();
$arguments74['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments74['keepQuotes'] = false;
$arguments74['encoding'] = 'UTF-8';
$arguments74['doubleEncode'] = true;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
return NULL;
};
$value76 = ($arguments74['value'] !== NULL ? $arguments74['value'] : $renderChildrenClosure75());

$output43 .= (!is_string($value76) ? $value76 : htmlspecialchars($value76, ($arguments74['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments74['encoding'], $arguments74['doubleEncode']));

$output43 .= '</a> (author: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.author', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = 'UTF-8';
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output43 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments77['encoding'], $arguments77['doubleEncode']));

$output43 .= ')
		</p>
	</div>
</div>
';
return $output43;
};

$output37 .= '';

$output37 .= '
';

return $output37;
}


}
#1439044406    21999     