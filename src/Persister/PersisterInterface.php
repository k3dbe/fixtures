<?php

namespace TheIconic\Fixtures\Persister;

use TheIconic\Fixtures\Fixture\Fixture;

/**
 * Interface PersisterInterface
 * @package TheIconic\Fixtures\Persister
 */
interface PersisterInterface
{
    /**
     * Persist the fixture data into storage.
     *
     * @param Fixture $fixture
     * @return boolean
     */
    public function persist(Fixture $fixture);

    /**
     * Closes connection with storage.
     *
     * @return boolean
     */
    public function close();
}
