<?php
class FluidCache_Standalone_template_file_SpecialStart_ef2e319b50f4151e4701eba37190c0cd74ff9bde extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return 'Default';
}
public function hasLayout() {
return TRUE;
}

/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments1 = array();
$arguments1['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array2 = array();
$array2['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array2['colPos'] = '3';
$arguments1['data'] = $array2;
$arguments1['currentValueKey'] = NULL;
$arguments1['table'] = '';
$renderChildrenClosure3 = function() {return NULL;};
$viewHelper4 = $self->getViewHelper('$viewHelper4', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper4->setArguments($arguments1);
$viewHelper4->setRenderingContext($renderingContext);
$viewHelper4->setRenderChildrenClosure($renderChildrenClosure3);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper4->initializeArgumentsAndRender();

$output0 .= '

    <div class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments5 = array();
$arguments5['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array6 = array();
$array6['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array6['colPos'] = '20';
$arguments5['data'] = $array6;
$arguments5['currentValueKey'] = NULL;
$arguments5['table'] = '';
$renderChildrenClosure7 = function() {return NULL;};
$viewHelper8 = $self->getViewHelper('$viewHelper8', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper8->setArguments($arguments5);
$viewHelper8->setRenderingContext($renderingContext);
$viewHelper8->setRenderChildrenClosure($renderChildrenClosure7);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper8->initializeArgumentsAndRender();

$output0 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments9 = array();
$arguments9['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array10 = array();
$array10['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array10['colPos'] = '21';
$arguments9['data'] = $array10;
$arguments9['currentValueKey'] = NULL;
$arguments9['table'] = '';
$renderChildrenClosure11 = function() {return NULL;};
$viewHelper12 = $self->getViewHelper('$viewHelper12', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper12->setArguments($arguments9);
$viewHelper12->setRenderingContext($renderingContext);
$viewHelper12->setRenderChildrenClosure($renderChildrenClosure11);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper12->initializeArgumentsAndRender();

$output0 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments13 = array();
$arguments13['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array14 = array();
$array14['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array14['colPos'] = '22';
$arguments13['data'] = $array14;
$arguments13['currentValueKey'] = NULL;
$arguments13['table'] = '';
$renderChildrenClosure15 = function() {return NULL;};
$viewHelper16 = $self->getViewHelper('$viewHelper16', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper16->setArguments($arguments13);
$viewHelper16->setRenderingContext($renderingContext);
$viewHelper16->setRenderChildrenClosure($renderChildrenClosure15);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper16->initializeArgumentsAndRender();

$output0 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments17 = array();
$arguments17['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array18 = array();
$array18['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array18['colPos'] = '0';
$arguments17['data'] = $array18;
$arguments17['currentValueKey'] = NULL;
$arguments17['table'] = '';
$renderChildrenClosure19 = function() {return NULL;};
$viewHelper20 = $self->getViewHelper('$viewHelper20', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper20->setArguments($arguments17);
$viewHelper20->setRenderingContext($renderingContext);
$viewHelper20->setRenderChildrenClosure($renderChildrenClosure19);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output0 .= $viewHelper20->initializeArgumentsAndRender();

$output0 .= '
        </div>
    </div>

';


return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output21 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper
$arguments22 = array();
$arguments22['name'] = 'Default';
$renderChildrenClosure23 = function() {return NULL;};
$viewHelper24 = $self->getViewHelper('$viewHelper24', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper');
$viewHelper24->setArguments($arguments22);
$viewHelper24->setRenderingContext($renderingContext);
$viewHelper24->setRenderChildrenClosure($renderChildrenClosure23);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\LayoutViewHelper

$output21 .= $viewHelper24->initializeArgumentsAndRender();

$output21 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SectionViewHelper
$arguments25 = array();
$arguments25['name'] = 'Main';
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output27 = '';

$output27 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments28 = array();
$arguments28['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array29 = array();
$array29['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array29['colPos'] = '3';
$arguments28['data'] = $array29;
$arguments28['currentValueKey'] = NULL;
$arguments28['table'] = '';
$renderChildrenClosure30 = function() {return NULL;};
$viewHelper31 = $self->getViewHelper('$viewHelper31', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper31->setArguments($arguments28);
$viewHelper31->setRenderingContext($renderingContext);
$viewHelper31->setRenderChildrenClosure($renderChildrenClosure30);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output27 .= $viewHelper31->initializeArgumentsAndRender();

$output27 .= '

    <div class="section section-default">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments32 = array();
$arguments32['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array33 = array();
$array33['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array33['colPos'] = '20';
$arguments32['data'] = $array33;
$arguments32['currentValueKey'] = NULL;
$arguments32['table'] = '';
$renderChildrenClosure34 = function() {return NULL;};
$viewHelper35 = $self->getViewHelper('$viewHelper35', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper35->setArguments($arguments32);
$viewHelper35->setRenderingContext($renderingContext);
$viewHelper35->setRenderChildrenClosure($renderChildrenClosure34);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output27 .= $viewHelper35->initializeArgumentsAndRender();

$output27 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments36 = array();
$arguments36['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array37 = array();
$array37['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array37['colPos'] = '21';
$arguments36['data'] = $array37;
$arguments36['currentValueKey'] = NULL;
$arguments36['table'] = '';
$renderChildrenClosure38 = function() {return NULL;};
$viewHelper39 = $self->getViewHelper('$viewHelper39', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper39->setArguments($arguments36);
$viewHelper39->setRenderingContext($renderingContext);
$viewHelper39->setRenderChildrenClosure($renderChildrenClosure38);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output27 .= $viewHelper39->initializeArgumentsAndRender();

$output27 .= '
                </div>
                <div class="col-sm-4">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments40 = array();
$arguments40['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array41 = array();
$array41['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array41['colPos'] = '22';
$arguments40['data'] = $array41;
$arguments40['currentValueKey'] = NULL;
$arguments40['table'] = '';
$renderChildrenClosure42 = function() {return NULL;};
$viewHelper43 = $self->getViewHelper('$viewHelper43', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper43->setArguments($arguments40);
$viewHelper43->setRenderingContext($renderingContext);
$viewHelper43->setRenderChildrenClosure($renderChildrenClosure42);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output27 .= $viewHelper43->initializeArgumentsAndRender();

$output27 .= '
                </div>
            </div>
        </div>
    </div>
    <div class="section section-light">
        <div class="container">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$arguments44 = array();
$arguments44['typoscriptObjectPath'] = 'lib.dynamicContent';
// Rendering Array
$array45 = array();
$array45['pageUid'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$array45['colPos'] = '0';
$arguments44['data'] = $array45;
$arguments44['currentValueKey'] = NULL;
$arguments44['table'] = '';
$renderChildrenClosure46 = function() {return NULL;};
$viewHelper47 = $self->getViewHelper('$viewHelper47', $renderingContext, 'TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper');
$viewHelper47->setArguments($arguments44);
$viewHelper47->setRenderingContext($renderingContext);
$viewHelper47->setRenderChildrenClosure($renderChildrenClosure46);
// End of ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper

$output27 .= $viewHelper47->initializeArgumentsAndRender();

$output27 .= '
        </div>
    </div>

';
return $output27;
};

$output21 .= '';

$output21 .= '
';


return $output21;
}


}
#1608314113    12925     