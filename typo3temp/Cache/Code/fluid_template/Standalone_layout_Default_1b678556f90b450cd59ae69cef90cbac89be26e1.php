<?php
class FluidCache_Standalone_layout_Default_1b678556f90b450cd59ae69cef90cbac89be26e1 extends \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getVariableContainer() {
	// @todo
	return new \TYPO3\CMS\Fluid\Core\ViewHelper\TemplateVariableContainer();
}
public function getLayoutName(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$self = $this;

return NULL;
}
public function hasLayout() {
return FALSE;
}

/**
 * Main Render function
 */
public function render(\TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();

$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments1 = array();
// Rendering Boolean node
$arguments1['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::evaluateComparator('==', \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'section_frame', $renderingContext), 66);
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper
$arguments4 = array();
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output6 = '';

$output6 .= '

        <a id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments7 = array();
$arguments7['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = NULL;
$arguments7['doubleEncode'] = true;
$renderChildrenClosure8 = function() {return NULL;};
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= (!is_string($value9) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments7['encoding'] !== NULL ? $arguments7['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments7['doubleEncode']));

$output6 .= '"></a>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments10 = array();
// Rendering Boolean node
$arguments10['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext));
$arguments10['then'] = NULL;
$arguments10['else'] = NULL;
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output12 = '';

$output12 .= '<a id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments13 = array();
$arguments13['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext);
$arguments13['keepQuotes'] = false;
$arguments13['encoding'] = NULL;
$arguments13['doubleEncode'] = true;
$renderChildrenClosure14 = function() {return NULL;};
$value15 = ($arguments13['value'] !== NULL ? $arguments13['value'] : $renderChildrenClosure14());

$output12 .= (!is_string($value15) ? $value15 : htmlspecialchars($value15, ($arguments13['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments13['encoding'] !== NULL ? $arguments13['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments13['doubleEncode']));

$output12 .= '"></a>';
return $output12;
};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments16 = array();
$arguments16['section'] = 'Header';
$arguments16['partial'] = NULL;
$arguments16['arguments'] = array (
);
$arguments16['optional'] = false;
$renderChildrenClosure17 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output6 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments18 = array();
$arguments18['section'] = 'Main';
$arguments18['partial'] = NULL;
$arguments18['arguments'] = array (
);
$arguments18['optional'] = false;
$renderChildrenClosure19 = function() {return NULL;};

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output6 .= '

    ';
return $output6;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ThenViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper
$arguments20 = array();
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output22 = '';

$output22 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments23 = array();
$arguments23['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'section_frame', $renderingContext);
$renderChildrenClosure24 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output25 = '';

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments26 = array();
$arguments26['value'] = '1';
$arguments26['default'] = false;
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments28 = array();
$arguments28['name'] = 'sectionClass';
$arguments28['value'] = 'invisible';
$renderChildrenClosure29 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments30 = array();
$arguments30['value'] = '5';
$arguments30['default'] = false;
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments32 = array();
$arguments32['name'] = 'sectionClass';
$arguments32['value'] = 'rulerbefore';
$renderChildrenClosure33 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments34 = array();
$arguments34['value'] = '6';
$arguments34['default'] = false;
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments36 = array();
$arguments36['name'] = 'sectionClass';
$arguments36['value'] = 'rulerafter';
$renderChildrenClosure37 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments38 = array();
$arguments38['value'] = '10';
$arguments38['default'] = false;
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments40 = array();
$arguments40['name'] = 'sectionClass';
$arguments40['value'] = 'indent';
$renderChildrenClosure41 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments42 = array();
$arguments42['value'] = '11';
$arguments42['default'] = false;
$renderChildrenClosure43 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments44 = array();
$arguments44['name'] = 'sectionClass';
$arguments44['value'] = 'indent-left';
$renderChildrenClosure45 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments46 = array();
$arguments46['value'] = '12';
$arguments46['default'] = false;
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments48 = array();
$arguments48['name'] = 'sectionClass';
$arguments48['value'] = 'indent-right';
$renderChildrenClosure49 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments50 = array();
$arguments50['value'] = '20';
$arguments50['default'] = false;
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments52 = array();
$arguments52['name'] = 'sectionClass';
$arguments52['value'] = 'well';
$renderChildrenClosure53 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments54 = array();
$arguments54['value'] = '21';
$arguments54['default'] = false;
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments56 = array();
$arguments56['name'] = 'sectionClass';
$arguments56['value'] = 'jumbotron';
$renderChildrenClosure57 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output25 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments58 = array();
// Rendering Boolean node
$arguments58['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments58['value'] = NULL;
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments60 = array();
$arguments60['name'] = 'sectionClass';
$arguments60['value'] = 'default';
$renderChildrenClosure61 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);
};

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output25 .= '
        ';
return $output25;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
        <div id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments62 = array();
$arguments62['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments62['keepQuotes'] = false;
$arguments62['encoding'] = NULL;
$arguments62['doubleEncode'] = true;
$renderChildrenClosure63 = function() {return NULL;};
$value64 = ($arguments62['value'] !== NULL ? $arguments62['value'] : $renderChildrenClosure63());

$output22 .= (!is_string($value64) ? $value64 : htmlspecialchars($value64, ($arguments62['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments62['encoding'] !== NULL ? $arguments62['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments62['doubleEncode']));

$output22 .= '" class="frame frame-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments65 = array();
$arguments65['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'CType', $renderingContext);
$arguments65['keepQuotes'] = false;
$arguments65['encoding'] = NULL;
$arguments65['doubleEncode'] = true;
$renderChildrenClosure66 = function() {return NULL;};
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output22 .= (!is_string($value67) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments65['encoding'] !== NULL ? $arguments65['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments65['doubleEncode']));

$output22 .= ' frame-layout-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments68 = array();
$arguments68['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'layout', $renderingContext);
$arguments68['keepQuotes'] = false;
$arguments68['encoding'] = NULL;
$arguments68['doubleEncode'] = true;
$renderChildrenClosure69 = function() {return NULL;};
$value70 = ($arguments68['value'] !== NULL ? $arguments68['value'] : $renderChildrenClosure69());

$output22 .= (!is_string($value70) ? $value70 : htmlspecialchars($value70, ($arguments68['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments68['encoding'] !== NULL ? $arguments68['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments68['doubleEncode']));

$output22 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments71 = array();
$arguments71['value'] = $currentVariableContainer->getOrNull('sectionClass');
$arguments71['keepQuotes'] = false;
$arguments71['encoding'] = NULL;
$arguments71['doubleEncode'] = true;
$renderChildrenClosure72 = function() {return NULL;};
$value73 = ($arguments71['value'] !== NULL ? $arguments71['value'] : $renderChildrenClosure72());

$output22 .= (!is_string($value73) ? $value73 : htmlspecialchars($value73, ($arguments71['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments71['encoding'] !== NULL ? $arguments71['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments71['doubleEncode']));

$output22 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments74 = array();
// Rendering Boolean node
$arguments74['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext));
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output76 = '';

$output76 .= '<a id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments77 = array();
$arguments77['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext);
$arguments77['keepQuotes'] = false;
$arguments77['encoding'] = NULL;
$arguments77['doubleEncode'] = true;
$renderChildrenClosure78 = function() {return NULL;};
$value79 = ($arguments77['value'] !== NULL ? $arguments77['value'] : $renderChildrenClosure78());

$output76 .= (!is_string($value79) ? $value79 : htmlspecialchars($value79, ($arguments77['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments77['encoding'] !== NULL ? $arguments77['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments77['doubleEncode']));

$output76 .= '"></a>';
return $output76;
};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output22 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments80 = array();
$arguments80['section'] = 'Header';
$arguments80['partial'] = NULL;
$arguments80['arguments'] = array (
);
$arguments80['optional'] = false;
$renderChildrenClosure81 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);

$output22 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments82 = array();
$arguments82['section'] = 'Main';
$arguments82['partial'] = NULL;
$arguments82['arguments'] = array (
);
$arguments82['optional'] = false;
$renderChildrenClosure83 = function() {return NULL;};

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output22 .= '
        </div>

    ';
return $output22;
};

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\ElseViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output3 .= '
';
return $output3;
};
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output84 = '';

$output84 .= '

        <a id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments85 = array();
$arguments85['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments85['keepQuotes'] = false;
$arguments85['encoding'] = NULL;
$arguments85['doubleEncode'] = true;
$renderChildrenClosure86 = function() {return NULL;};
$value87 = ($arguments85['value'] !== NULL ? $arguments85['value'] : $renderChildrenClosure86());

$output84 .= (!is_string($value87) ? $value87 : htmlspecialchars($value87, ($arguments85['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments85['encoding'] !== NULL ? $arguments85['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments85['doubleEncode']));

$output84 .= '"></a>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments88 = array();
// Rendering Boolean node
$arguments88['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext));
$arguments88['then'] = NULL;
$arguments88['else'] = NULL;
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output90 = '';

$output90 .= '<a id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments91 = array();
$arguments91['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext);
$arguments91['keepQuotes'] = false;
$arguments91['encoding'] = NULL;
$arguments91['doubleEncode'] = true;
$renderChildrenClosure92 = function() {return NULL;};
$value93 = ($arguments91['value'] !== NULL ? $arguments91['value'] : $renderChildrenClosure92());

$output90 .= (!is_string($value93) ? $value93 : htmlspecialchars($value93, ($arguments91['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments91['encoding'] !== NULL ? $arguments91['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments91['doubleEncode']));

$output90 .= '"></a>';
return $output90;
};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext);

$output84 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments94 = array();
$arguments94['section'] = 'Header';
$arguments94['partial'] = NULL;
$arguments94['arguments'] = array (
);
$arguments94['optional'] = false;
$renderChildrenClosure95 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments94, $renderChildrenClosure95, $renderingContext);

$output84 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments96 = array();
$arguments96['section'] = 'Main';
$arguments96['partial'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$renderChildrenClosure97 = function() {return NULL;};

$output84 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output84 .= '

    ';
return $output84;
};
$arguments1['__elseClosure'] = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output98 = '';

$output98 .= '

        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper
$arguments99 = array();
$arguments99['expression'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'section_frame', $renderingContext);
$renderChildrenClosure100 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output101 = '';

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments102 = array();
$arguments102['value'] = '1';
$arguments102['default'] = false;
$renderChildrenClosure103 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments104 = array();
$arguments104['name'] = 'sectionClass';
$arguments104['value'] = 'invisible';
$renderChildrenClosure105 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments106 = array();
$arguments106['value'] = '5';
$arguments106['default'] = false;
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments108 = array();
$arguments108['name'] = 'sectionClass';
$arguments108['value'] = 'rulerbefore';
$renderChildrenClosure109 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments110 = array();
$arguments110['value'] = '6';
$arguments110['default'] = false;
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments112 = array();
$arguments112['name'] = 'sectionClass';
$arguments112['value'] = 'rulerafter';
$renderChildrenClosure113 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments114 = array();
$arguments114['value'] = '10';
$arguments114['default'] = false;
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments116 = array();
$arguments116['name'] = 'sectionClass';
$arguments116['value'] = 'indent';
$renderChildrenClosure117 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments118 = array();
$arguments118['value'] = '11';
$arguments118['default'] = false;
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments120 = array();
$arguments120['name'] = 'sectionClass';
$arguments120['value'] = 'indent-left';
$renderChildrenClosure121 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments122 = array();
$arguments122['value'] = '12';
$arguments122['default'] = false;
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments124 = array();
$arguments124['name'] = 'sectionClass';
$arguments124['value'] = 'indent-right';
$renderChildrenClosure125 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments124, $renderChildrenClosure125, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments126 = array();
$arguments126['value'] = '20';
$arguments126['default'] = false;
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments128 = array();
$arguments128['name'] = 'sectionClass';
$arguments128['value'] = 'well';
$renderChildrenClosure129 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments126, $renderChildrenClosure127, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments130 = array();
$arguments130['value'] = '21';
$arguments130['default'] = false;
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments132 = array();
$arguments132['name'] = 'sectionClass';
$arguments132['value'] = 'jumbotron';
$renderChildrenClosure133 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output101 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper
$arguments134 = array();
// Rendering Boolean node
$arguments134['default'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean('TRUE');
$arguments134['value'] = NULL;
$renderChildrenClosure135 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\VarViewHelper
$arguments136 = array();
$arguments136['name'] = 'sectionClass';
$arguments136['value'] = 'default';
$renderChildrenClosure137 = function() {return NULL;};
return BK2K\BootstrapPackage\ViewHelpers\VarViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);
};

$output101 .= TYPO3\CMS\Fluid\ViewHelpers\CaseViewHelper::renderStatic($arguments134, $renderChildrenClosure135, $renderingContext);

$output101 .= '
        ';
return $output101;
};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\SwitchViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext);

$output98 .= '
        <div id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments138 = array();
$arguments138['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'uid', $renderingContext);
$arguments138['keepQuotes'] = false;
$arguments138['encoding'] = NULL;
$arguments138['doubleEncode'] = true;
$renderChildrenClosure139 = function() {return NULL;};
$value140 = ($arguments138['value'] !== NULL ? $arguments138['value'] : $renderChildrenClosure139());

$output98 .= (!is_string($value140) ? $value140 : htmlspecialchars($value140, ($arguments138['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments138['encoding'] !== NULL ? $arguments138['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments138['doubleEncode']));

$output98 .= '" class="frame frame-type-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments141 = array();
$arguments141['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'CType', $renderingContext);
$arguments141['keepQuotes'] = false;
$arguments141['encoding'] = NULL;
$arguments141['doubleEncode'] = true;
$renderChildrenClosure142 = function() {return NULL;};
$value143 = ($arguments141['value'] !== NULL ? $arguments141['value'] : $renderChildrenClosure142());

$output98 .= (!is_string($value143) ? $value143 : htmlspecialchars($value143, ($arguments141['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments141['encoding'] !== NULL ? $arguments141['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments141['doubleEncode']));

$output98 .= ' frame-layout-';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments144 = array();
$arguments144['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), 'layout', $renderingContext);
$arguments144['keepQuotes'] = false;
$arguments144['encoding'] = NULL;
$arguments144['doubleEncode'] = true;
$renderChildrenClosure145 = function() {return NULL;};
$value146 = ($arguments144['value'] !== NULL ? $arguments144['value'] : $renderChildrenClosure145());

$output98 .= (!is_string($value146) ? $value146 : htmlspecialchars($value146, ($arguments144['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments144['encoding'] !== NULL ? $arguments144['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments144['doubleEncode']));

$output98 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments147 = array();
$arguments147['value'] = $currentVariableContainer->getOrNull('sectionClass');
$arguments147['keepQuotes'] = false;
$arguments147['encoding'] = NULL;
$arguments147['doubleEncode'] = true;
$renderChildrenClosure148 = function() {return NULL;};
$value149 = ($arguments147['value'] !== NULL ? $arguments147['value'] : $renderChildrenClosure148());

$output98 .= (!is_string($value149) ? $value149 : htmlspecialchars($value149, ($arguments147['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments147['encoding'] !== NULL ? $arguments147['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments147['doubleEncode']));

$output98 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper
$arguments150 = array();
// Rendering Boolean node
$arguments150['condition'] = TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(\TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext));
$arguments150['then'] = NULL;
$arguments150['else'] = NULL;
$renderChildrenClosure151 = function() use ($renderingContext, $self) {
$currentVariableContainer = $renderingContext->getTemplateVariableContainer();
$output152 = '';

$output152 .= '<a id="c';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$arguments153 = array();
$arguments153['value'] = \TYPO3\CMS\Fluid\Core\Parser\SyntaxTree\ObjectAccessorNode::getPropertyPath($currentVariableContainer->getOrNull('data'), '_LOCALIZED_UID', $renderingContext);
$arguments153['keepQuotes'] = false;
$arguments153['encoding'] = NULL;
$arguments153['doubleEncode'] = true;
$renderChildrenClosure154 = function() {return NULL;};
$value155 = ($arguments153['value'] !== NULL ? $arguments153['value'] : $renderChildrenClosure154());

$output152 .= (!is_string($value155) ? $value155 : htmlspecialchars($value155, ($arguments153['keepQuotes'] ? ENT_NOQUOTES : ENT_COMPAT), ($arguments153['encoding'] !== NULL ? $arguments153['encoding'] : \TYPO3\CMS\Fluid\Core\Compiler\AbstractCompiledTemplate::resolveDefaultEncoding()), $arguments153['doubleEncode']));

$output152 .= '"></a>';
return $output152;
};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output98 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments156 = array();
$arguments156['section'] = 'Header';
$arguments156['partial'] = NULL;
$arguments156['arguments'] = array (
);
$arguments156['optional'] = false;
$renderChildrenClosure157 = function() {return NULL;};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext);

$output98 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$arguments158 = array();
$arguments158['section'] = 'Main';
$arguments158['partial'] = NULL;
$arguments158['arguments'] = array (
);
$arguments158['optional'] = false;
$renderChildrenClosure159 = function() {return NULL;};

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output98 .= '
        </div>

    ';
return $output98;
};

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';


return $output0;
}


}
#1608311943    38612     