<?php
class FluidCache_Standalone_Backend_action_dashboard_6edddcab65a47d49db70639fb5493153dd165c3c extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper
$arguments4 = array();
$arguments4['subject'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
};
$viewHelper6 = $self->getViewHelper('$viewHelper6', $renderingContext, 'TYPO3\Fluid\ViewHelpers\CountViewHelper');
$viewHelper6->setArguments($arguments4);
$viewHelper6->setRenderingContext($renderingContext);
$viewHelper6->setRenderChildrenClosure($renderChildrenClosure5);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper

$output0 .= $viewHelper6->initializeArgumentsAndRender();

$output0 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicCount', $renderingContext);
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
$arguments10['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenCount', $renderingContext);
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
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper
$arguments13 = array();
$arguments13['subject'] = NULL;
$renderChildrenClosure14 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
};
$viewHelper15 = $self->getViewHelper('$viewHelper15', $renderingContext, 'TYPO3\Fluid\ViewHelpers\CountViewHelper');
$viewHelper15->setArguments($arguments13);
$viewHelper15->setRenderingContext($renderingContext);
$viewHelper15->setRenderChildrenClosure($renderChildrenClosure14);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper

$output0 .= $viewHelper15->initializeArgumentsAndRender();

$output0 .= ' posts.
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments16 = array();
$arguments16['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments16['keepQuotes'] = false;
$arguments16['encoding'] = 'UTF-8';
$arguments16['doubleEncode'] = true;
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$value18 = ($arguments16['value'] !== NULL ? $arguments16['value'] : $renderChildrenClosure17());

$output0 .= (!is_string($value18) ? $value18 : htmlspecialchars($value18, ($arguments16['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments16['encoding'], $arguments16['doubleEncode']));

$output0 .= ' in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments19 = array();
$arguments19['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments19['keepQuotes'] = false;
$arguments19['encoding'] = 'UTF-8';
$arguments19['doubleEncode'] = true;
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$value21 = ($arguments19['value'] !== NULL ? $arguments19['value'] : $renderChildrenClosure20());

$output0 .= (!is_string($value21) ? $value21 : htmlspecialchars($value21, ($arguments19['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments19['encoding'], $arguments19['doubleEncode']));

$output0 .= ' posts.<br />
			Latest comment for ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments22 = array();
$arguments22['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments22['keepQuotes'] = false;
$arguments22['encoding'] = 'UTF-8';
$arguments22['doubleEncode'] = true;
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$value24 = ($arguments22['value'] !== NULL ? $arguments22['value'] : $renderChildrenClosure23());

$output0 .= (!is_string($value24) ? $value24 : htmlspecialchars($value24, ($arguments22['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments22['encoding'], $arguments22['doubleEncode']));

$output0 .= ': <a>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments25 = array();
$arguments25['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments25['keepQuotes'] = false;
$arguments25['encoding'] = 'UTF-8';
$arguments25['doubleEncode'] = true;
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
return NULL;
};
$value27 = ($arguments25['value'] !== NULL ? $arguments25['value'] : $renderChildrenClosure26());

$output0 .= (!is_string($value27) ? $value27 : htmlspecialchars($value27, ($arguments25['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments25['encoding'], $arguments25['doubleEncode']));

$output0 .= '</a> (author: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments28 = array();
$arguments28['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.author', $renderingContext);
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = 'UTF-8';
$arguments28['doubleEncode'] = true;
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
return NULL;
};
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output0 .= (!is_string($value30) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments28['encoding'], $arguments28['doubleEncode']));

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
$output31 = '';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper
$arguments32 = array();
$arguments32['name'] = 'Backend';
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper34 = $self->getViewHelper('$viewHelper34', $renderingContext, 'TYPO3\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper34->setArguments($arguments32);
$viewHelper34->setRenderingContext($renderingContext);
$viewHelper34->setRenderChildrenClosure($renderChildrenClosure33);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\LayoutViewHelper

$output31 .= $viewHelper34->initializeArgumentsAndRender();

$output31 .= '

';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\SectionViewHelper
$arguments35 = array();
$arguments35['name'] = 'main';
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
<div class="content__container">
	<h1>BLOG running V';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments38 = array();
$arguments38['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'version', $renderingContext);
$arguments38['keepQuotes'] = false;
$arguments38['encoding'] = 'UTF-8';
$arguments38['doubleEncode'] = true;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$value40 = ($arguments38['value'] !== NULL ? $arguments38['value'] : $renderChildrenClosure39());

$output37 .= (!is_string($value40) ? $value40 : htmlspecialchars($value40, ($arguments38['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments38['encoding'], $arguments38['doubleEncode']));

$output37 .= '</h1>
	<div class="dashboard__module">
		<h2>Posts</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper
$arguments41 = array();
$arguments41['subject'] = NULL;
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\Fluid\ViewHelpers\CountViewHelper');
$viewHelper43->setArguments($arguments41);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper

$output37 .= $viewHelper43->initializeArgumentsAndRender();

$output37 .= ' posts.<br />
			- Public posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments44 = array();
$arguments44['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'publicCount', $renderingContext);
$arguments44['keepQuotes'] = false;
$arguments44['encoding'] = 'UTF-8';
$arguments44['doubleEncode'] = true;
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$value46 = ($arguments44['value'] !== NULL ? $arguments44['value'] : $renderChildrenClosure45());

$output37 .= (!is_string($value46) ? $value46 : htmlspecialchars($value46, ($arguments44['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments44['encoding'], $arguments44['doubleEncode']));

$output37 .= '<br />
			- Hidden posts: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments47 = array();
$arguments47['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'hiddenCount', $renderingContext);
$arguments47['keepQuotes'] = false;
$arguments47['encoding'] = 'UTF-8';
$arguments47['doubleEncode'] = true;
$renderChildrenClosure48 = function() use ($renderingContext, $self) {
return NULL;
};
$value49 = ($arguments47['value'] !== NULL ? $arguments47['value'] : $renderChildrenClosure48());

$output37 .= (!is_string($value49) ? $value49 : htmlspecialchars($value49, ($arguments47['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments47['encoding'], $arguments47['doubleEncode']));

$output37 .= '<br />
			Trash keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper
$arguments50 = array();
$arguments50['subject'] = NULL;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
return \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'trash', $renderingContext);
};
$viewHelper52 = $self->getViewHelper('$viewHelper52', $renderingContext, 'TYPO3\Fluid\ViewHelpers\CountViewHelper');
$viewHelper52->setArguments($arguments50);
$viewHelper52->setRenderingContext($renderingContext);
$viewHelper52->setRenderChildrenClosure($renderChildrenClosure51);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\CountViewHelper

$output37 .= $viewHelper52->initializeArgumentsAndRender();

$output37 .= ' posts.
		</p>
	</div>
	<div class="dashboard__module">
	<h2>Comments</h2>
		<p>
			The database keeps ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments53 = array();
$arguments53['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'commentCount', $renderingContext);
$arguments53['keepQuotes'] = false;
$arguments53['encoding'] = 'UTF-8';
$arguments53['doubleEncode'] = true;
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$value55 = ($arguments53['value'] !== NULL ? $arguments53['value'] : $renderChildrenClosure54());

$output37 .= (!is_string($value55) ? $value55 : htmlspecialchars($value55, ($arguments53['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments53['encoding'], $arguments53['doubleEncode']));

$output37 .= ' in ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments56 = array();
$arguments56['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'postCount', $renderingContext);
$arguments56['keepQuotes'] = false;
$arguments56['encoding'] = 'UTF-8';
$arguments56['doubleEncode'] = true;
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$value58 = ($arguments56['value'] !== NULL ? $arguments56['value'] : $renderChildrenClosure57());

$output37 .= (!is_string($value58) ? $value58 : htmlspecialchars($value58, ($arguments56['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments56['encoding'], $arguments56['doubleEncode']));

$output37 .= ' posts.<br />
			Latest comment for ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments59 = array();
$arguments59['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestPost.title', $renderingContext);
$arguments59['keepQuotes'] = false;
$arguments59['encoding'] = 'UTF-8';
$arguments59['doubleEncode'] = true;
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$value61 = ($arguments59['value'] !== NULL ? $arguments59['value'] : $renderChildrenClosure60());

$output37 .= (!is_string($value61) ? $value61 : htmlspecialchars($value61, ($arguments59['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments59['encoding'], $arguments59['doubleEncode']));

$output37 .= ': <a>';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.title', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = 'UTF-8';
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output37 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments62['encoding'], $arguments62['doubleEncode']));

$output37 .= '</a> (author: ';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'latestComment.author', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = 'UTF-8';
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output37 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), $arguments65['encoding'], $arguments65['doubleEncode']));

$output37 .= ')
		</p>
	</div>
</div>
';
return $output37;
};

$output31 .= '';

$output31 .= '
';

return $output31;
}


}
#1439036665    18346     