<?php

namespace spicyweb\oddsandends\fields;

use Craft;
use craft\base\ElementInterface;
use craft\commerce\fields\Products;

/**
 * Disabled Products Field
 *
 * @package spicyweb\oddsandends\fields
 * @author Spicy Web <plugins@spicyweb.com.au>
 * @since 4.1.0
 */
class DisabledProducts extends Products
{
    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('tools', 'Commerce Products (Disabled)');
    }

    /**
     * @inheritdoc
     */
    protected function inputHtml(mixed $value, ?ElementInterface $element, bool $inline): string
    {
        return $this->getStaticHtml($value, $element);
    }
}
