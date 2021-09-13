<?php

namespace OliverHader\Demo91787;

use TYPO3\CMS\Backend\Form\Element\InputTextElement;

class DemoInputLegacyElement extends InputTextElement
{
    public function render()
    {
        $this->data['parameterArray']['fieldChangeFunc']['demo-91787-legacy'] = implode('', [
            "require(['TYPO3/CMS/Backend/Modal'], (Modal) => {",
                "Modal.confirm('Demo LEGACY', 'Hello from LEGACY fieldChangeFunc handling...')",
                    ".on('button.clicked', () => Modal.dismiss());",
            "})",
        ]);
        return parent::render();
    }
}
