<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StandardPoddingAdRuleSlot extends \Google\AdsApi\AdManager\v201911\BaseAdRuleSlot
{

    /**
     * @param string $slotBehavior
     * @param int $minVideoAdDuration
     * @param int $maxVideoAdDuration
     * @param string $videoMidrollFrequencyType
     * @param string $videoMidrollFrequency
     * @param string $bumper
     * @param int $maxBumperDuration
     * @param int $minPodDuration
     * @param int $maxPodDuration
     * @param int $maxAdsInPod
     */
    public function __construct($slotBehavior = null, $minVideoAdDuration = null, $maxVideoAdDuration = null, $videoMidrollFrequencyType = null, $videoMidrollFrequency = null, $bumper = null, $maxBumperDuration = null, $minPodDuration = null, $maxPodDuration = null, $maxAdsInPod = null)
    {
      parent::__construct($slotBehavior, $minVideoAdDuration, $maxVideoAdDuration, $videoMidrollFrequencyType, $videoMidrollFrequency, $bumper, $maxBumperDuration, $minPodDuration, $maxPodDuration, $maxAdsInPod);
    }

}
