<?php

namespace OGame\GameObjects\Models\Techtree;

use OGame\GameObjects\Models\Abstracts\GameObject;

/**
 * Class TechtreeRequirement
 *
 * Represents requirement that current object requires on. Used to render the tech tree graph.
 *
 * @package OGame\GameObjects\Models
 */
class TechtreeRequirement
{
    /**
     * @var int The depth of the requirement.
     */
    public int $depth;

    /**
     * @var GameObject The GameObject that is required.
     */
    public GameObject $gameObject;

    /**
     * @var int The level that is required by the parent object.
     */
    public int $levelRequired;

    /**
     * @var int The level that this current object is at.
     */
    public int $levelCurrent;

    /**
     * GameObjectRequirement constructor.
     *
     * @param GameObject $gameObject
     * @param int $levelRequired
     * @param int $levelCurrent
     */
    public function __construct(int $depth, GameObject $gameObject, int $levelRequired, int $levelCurrent)
    {
        $this->depth = $depth;
        $this->gameObject = $gameObject;
        $this->levelRequired = $levelRequired;
        $this->levelCurrent = $levelCurrent;
    }
}
