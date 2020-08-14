<?php

namespace SNDSABIN\AdditionalShippingBlock\Model;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\LayoutInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Cms\Api\BlockRepositoryInterface;
use Magento\Cms\Model\BlockFactory;

class AdditionalShippingBlockConfigProvider implements ConfigProviderInterface
{
    protected $layout;
    protected $scopeConfig;
    protected $blockRepository;
    protected $blockFactory;

    public function __construct(LayoutInterface $layout, ScopeConfigInterface $scopeConfig, BlockRepositoryInterface $blockRepository, BlockFactory $blockFactory)
    {
        $this->layout = $layout;
        $this->scopeConfig = $scopeConfig;
        $this->blockRepository = $blockRepository;
        $this->blockFactory = $blockFactory;
    }

    public function getConfig()
    {
        $block = $this->blockFactory->create()->load(
            $this->scopeConfig->getValue('additionalshippingblock_view/block/blockSelected', ScopeInterface::SCOPE_STORE)
        );

        $renderSelectedBlockIfDisabled = $this->scopeConfig->getValue('additionalshippingblock_view/block/renderBlockIfDisabled', ScopeInterface::SCOPE_STORE);
        $blockContent = $block->getContent();

        if (!$block->isActive() && !$renderSelectedBlockIfDisabled) {
            $blockContent = '<p></p>';
        }

        return [
            'additionalShippingBlockConfig' => [
                'isEnabled' => $this->scopeConfig->getValue('additionalshippingblock_view/general/enabled', ScopeInterface::SCOPE_STORE) ? true : false,
                'blockContent' => $blockContent,
                'blockPlacement' => $this->scopeConfig->getValue('additionalshippingblock_view/block/blockPlacement', ScopeInterface::SCOPE_STORE)
            ]
        ];
    }
}