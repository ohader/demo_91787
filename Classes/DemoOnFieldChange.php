<?php

namespace OliverHader\Demo91787;

use TYPO3\CMS\Backend\Form\Behavior\OnFieldChangeInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class DemoOnFieldChange implements OnFieldChangeInterface
{
    private string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function __toString(): string
    {
        $title = GeneralUtility::quoteJSvalue($this->title);
        return implode('', [
            "require(['TYPO3/CMS/Backend/Modal'], (Modal) => {",
                "Modal.confirm(" . $title . ", 'Hello from BEHAVIOR fieldChangeFunc handling... but invoked with other LEGACY fieldChangeFunc')",
                    ".on('button.clicked', () => Modal.dismiss());",
            "});",
        ]);
    }

    public function toArray(): array
    {
        return [
            'name' => 'demo-91787-handler',
            'data' => [
                'title' => $this->title,
            ],
        ];
    }
}
