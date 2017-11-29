<?php

/*
 * This file is part of the Madisoft Backend Test Developer project.
 *
 * (c) Francesco Cartenì <http://www.multimediaexperiencestudio.it/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Export;

/**
 * Interface FileStrategyContextBuilderInterface.
 */
interface FileStrategyContextBuilderInterface
{
    /**
     * Create a FileStrategyContext.
     *
     * @param $strategy
     * @param array $data
     *
     * @return FileStrategyContext
     */
    public function createStrategyContext(
        $strategy,
        array $data = []
    );
}
