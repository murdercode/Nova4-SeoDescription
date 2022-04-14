# Laravel Nova 4 SeoDescription

Inspired to https://github.com/murdercode/Nova4-SeoTitle, but for TextArea field.

## Setup

First install with:
```bash
$ composer require murdercode/nova4-seo-description
```

then add it in your Nova class:
```php
<?php

use Murdercode\SeoDescription\SeoDescription;

public function fields(NovaRequest $request)
{
          $seoDescription = SeoDescription::make(__('Preview'), 'preview')->rangeLength(120, 155)
            ->rules(['required', 'min:20'])
            ->hideFromIndex()
            ->help(__('The description of the article.'));

}
```

Enjoy! 🙃
