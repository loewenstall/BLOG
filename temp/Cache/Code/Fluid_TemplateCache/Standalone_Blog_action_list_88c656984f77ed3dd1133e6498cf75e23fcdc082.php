<?php
class FluidCache_Standalone_Blog_action_list_88c656984f77ed3dd1133e6498cf75e23fcdc082 extends \TYPO3\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
	<div class="main">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments4 = array();
$arguments4['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments4['as'] = 'post';
$arguments4['key'] = '';
$arguments4['reverse'] = false;
$arguments4['iteration'] = NULL;
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments7 = array();
$arguments7['partial'] = 'Post';
$arguments7['arguments'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments7['section'] = NULL;
$arguments7['optional'] = false;
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper9 = $self->getViewHelper('$viewHelper9', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper9->setArguments($arguments7);
$viewHelper9->setRenderingContext($renderingContext);
$viewHelper9->setRenderChildrenClosure($renderChildrenClosure8);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output6 .= $viewHelper9->initializeArgumentsAndRender();

$output6 .= '
		';
return $output6;
};

$output0 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
	</div>
	<aside>

	</aside>
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
	<div class="main">
		';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\ForViewHelper
$arguments23 = array();
$arguments23['each'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), 'posts', $renderingContext);
$arguments23['as'] = 'post';
$arguments23['key'] = '';
$arguments23['reverse'] = false;
$arguments23['iteration'] = NULL;
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$output25 = '';

$output25 .= '
			';
// Rendering ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper
$arguments26 = array();
$arguments26['partial'] = 'Post';
$arguments26['arguments'] = \TYPO3\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($renderingContext->getTemplateVariableContainer(), '_all', $renderingContext);
$arguments26['section'] = NULL;
$arguments26['optional'] = false;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
return NULL;
};
$viewHelper28 = $self->getViewHelper('$viewHelper28', $renderingContext, 'TYPO3\Fluid\ViewHelpers\RenderViewHelper');
$viewHelper28->setArguments($arguments26);
$viewHelper28->setRenderingContext($renderingContext);
$viewHelper28->setRenderChildrenClosure($renderChildrenClosure27);
// End of ViewHelper TYPO3\Fluid\ViewHelpers\RenderViewHelper

$output25 .= $viewHelper28->initializeArgumentsAndRender();

$output25 .= '
		';
return $output25;
};

$output19 .= TYPO3\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output19 .= '
	</div>
	<aside>

	</aside>
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
#1438883771    7893      