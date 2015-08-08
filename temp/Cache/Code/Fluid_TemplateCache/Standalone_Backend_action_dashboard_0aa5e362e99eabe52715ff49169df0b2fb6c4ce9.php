<?php
class FluidCache_Standalone_Backend_action_dashboard_0aa5e362e99eabe52715ff49169df0b2fb6c4ce9 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output0 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments7['encoding'], $arguments7['doubleEncode']));

$output0 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments10 = array();
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments10['keepQuotes'] = false;
$arguments10['encoding'] = 'UTF-8';
$arguments10['doubleEncode'] = true;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
return NULL;
};
$value12 = ($arguments10['value'] !== NULL ? $arguments10['value'] : $renderChildrenClosure11());

$output0 .= (!is_string($value12) ? $value12 : htmlspecialchars($value12, ($arguments10['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments10['encoding'], $arguments10['doubleEncode']));

$output0 .= ' posts.<br />
			Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trashCount', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = 'UTF-8';
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return NULL;
};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output0 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments13['encoding'], $arguments13['doubleEncode']));

$output0 .= ' posts.<br />
			Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicCount', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output0 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']));

$output0 .= '<br />
			Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenCount', $renderingContext);
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
			Latest comment for ';
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

$output0 .= ': <a>';
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
	';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper
$arguments44 = array();
$arguments44['title'] = NULL;
$arguments44['maxDepth'] = 8;
$arguments44['plainText'] = false;
$arguments44['ansiColors'] = false;
$arguments44['inline'] = false;
$arguments44['blacklistedClassNames'] = NULL;
$arguments44['blacklistedPropertyNames'] = NULL;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments46 = array();
$arguments46['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments46['keepQuotes'] = false;
$arguments46['encoding'] = 'UTF-8';
$arguments46['doubleEncode'] = true;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
return NULL;
};
$value48 = ($arguments46['value'] !== NULL ? $arguments46['value'] : $renderChildrenClosure47());
return (!is_string($value48) ? $value48 : htmlspecialchars($value48, ($arguments46['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments46['encoding'], $arguments46['doubleEncode']));
};
$viewHelper49 = $self->getViewHelper('$viewHelper49', $renderingContext, 'TYPO3\Fluid\ViewHelpers\DebugViewHelper');
$viewHelper49->setArguments($arguments44);
$viewHelper49->setRenderingContext($renderingContext);
$viewHelper49->setRenderChildrenClosure($renderChildrenClosure45);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\DebugViewHelper

$output43 .= $viewHelper49->initializeArgumentsAndRender();

$output43 .= '
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments50 = array();
$arguments50['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments50['keepQuotes'] = false;
$arguments50['encoding'] = 'UTF-8';
$arguments50['doubleEncode'] = true;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return NULL;
};
$value52 = ($arguments50['value'] !== NULL ? $arguments50['value'] : $renderChildrenClosure51());

$output43 .= (!is_string($value52) ? $value52 : htmlspecialchars($value52, ($arguments50['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments50['encoding'], $arguments50['doubleEncode']));

$output43 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output43 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments53['encoding'], $arguments53['doubleEncode']));

$output43 .= ' posts.<br />
			Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trashCount', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = 'UTF-8';
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output43 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments56['encoding'], $arguments56['doubleEncode']));

$output43 .= ' posts.<br />
			Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicCount', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output43 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']));

$output43 .= '<br />
			Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenCount', $renderingContext);
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
			Latest comment for ';
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

$output43 .= ': <a>';
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
#1438949256    21600     