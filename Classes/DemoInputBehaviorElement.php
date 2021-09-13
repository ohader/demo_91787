<?php
namespace TYPO3\Demo91787;

use TYPO3\CMS\Backend\Form\Element\InputTextElement;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class DemoInputBehaviorElement extends InputTextElement
{
    public function render()
    {
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        $pageRenderer->loadRequireJsModule('TYPO3/CMS/Demo91787/Demo');
        $this->data['parameterArray']['fieldChangeFunc']['demo-91787-behavior'] = new DemoOnFieldChange('Demo BEHAVIOR @' . time());

        // ACTION: uncomment next line to trigger legacy fallback behavior in `DemoOnFieldChange::__toString()`
        // $this->data['parameterArray']['fieldChangeFunc']['demo-91787-trigger-legacy'] = 'let dummy;';
        return parent::render();
    }
}
