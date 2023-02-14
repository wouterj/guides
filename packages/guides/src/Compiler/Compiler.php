<?php

declare(strict_types=1);

namespace phpDocumentor\Guides\Compiler;

use SplPriorityQueue;
use phpDocumentor\Guides\Nodes\DocumentNode;

class Compiler
{
    /** @var SplPriorityQueue<int, CompilerPass> */
    private SplPriorityQueue $passes;

    /** @param CompilerPass[] $passes */
    public function __construct(array $passes)
    {
        $this->passes = new SplPriorityQueue();
        foreach ($passes as $pass) {
            $this->passes->insert($pass, $pass->getPriority());
        }
    }

    /**
     * @param DocumentNode[] $documents
     * @return DocumentNode[]
     */
    public function run(array $documents): array
    {
        foreach ($this->passes as $pass) {
            $documents = $pass->run($documents);
        }

        return $documents;
    }
}
