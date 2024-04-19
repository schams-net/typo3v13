<?php
declare(strict_types=1);
namespace SchamsNet\Typo3v13\Backend\EventListener;

/**
 * TYPO3 v13 Test Extension
 * @author Michael Schams | https://schams.net
 */

use TYPO3\CMS\Backend\Controller\Event\AfterPageTreeItemsPreparedEvent;
use TYPO3\CMS\Backend\Dto\Tree\Label\Label;
use TYPO3\CMS\Backend\Dto\Tree\Status\StatusInformation;
use TYPO3\CMS\Core\Type\ContextualFeedbackSeverity;

class ModifyPageTreeItems
{
    public function __invoke(AfterPageTreeItemsPreparedEvent $event): void
    {
        $items = $event->getItems();
        foreach ($items as &$item) {
            if ($item['_page']['uid'] === 8) {
                $item['statusInformation'][] = new StatusInformation(
                    label: 'A warning message',
                    severity: ContextualFeedbackSeverity::WARNING,
                    priority: 0,
                    //icon: 'actions-dot',
                    //icon: 'actions-exclamation-triangle-alt',
                    //icon: 'module-about',
                    icon: 'actions-brand-typo3',
                    overlayIcon: ''
                );
            }
        }
        $event->setItems($items);
    }
}
