<?php

namespace Murdercode\SeoDescription;

use Laravel\Nova\Fields\Field;

class SeoDescription extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'seo-description';

    /**
     * Set the range of acceptable string length.
     *
     * @param  int  $min
     * @param int $max
     * @return $this
     */
    public function rangeLength(int $min = 120, int $max = 155): self
    {
        return $this->withMeta([
            'min' => $min,
            'max' => $max,
        ]);
    }
}
