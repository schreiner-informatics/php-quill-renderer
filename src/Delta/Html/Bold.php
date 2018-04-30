<?php

declare(strict_types=1);

namespace DBlackborough\Quill\Delta\Html;

/**
 * Default delta class for inserts with the 'bold' attribute
 *
 * @author Dean Blackborough <dean@g3d-development.com>
 * @copyright Dean Blackborough
 * @license https://github.com/deanblackborough/php-quill-renderer/blob/master/LICENSE
 */
class Bold extends Delta
{
    /**
     * Set the initial properties for the delta
     *
     * @param string $insert
     * @param array $attributes
     */
    public function __construct(string $insert, array $attributes = [])
    {
        $this->tag = 'strong';

        $this->insert = $insert;
        $this->attributes = $attributes;
    }

    /**
     * Return the display type for the resultant HTML created by the delta, either inline or block
     *
     * @return string
     */
    public function displayType() : string
    {
        return parent::DISPLAY_INLINE;
    }

    /**
     * Render the HTML for the specific Delta type
     *
     * @return string
     */
    public function render(): string
    {
        return "<{$this->tag}>{$this->insert}</{$this->tag}>";
    }
}
