<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link https://phpdoc.org
 */

namespace phpDocumentor\Guides\Nodes\Inline;

final class NewlineInlineNode extends InlineNode
{
    public const TYPE = 'newline';

    public function __construct()
    {
        parent::__construct(self::TYPE);
    }
}
