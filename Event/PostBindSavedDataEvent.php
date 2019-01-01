<?php

namespace Craue\FormFlowBundle\Event;

use Craue\FormFlowBundle\Form\FormFlowInterface;

/**
 * Is called for each step after binding its saved form data.
 *
 * @author Marcus Stöhr <dafish@soundtrack-board.de>
 * @author Christian Raue <christian.raue@gmail.com>
 * @copyright 2011-2019 Christian Raue
 * @license http://opensource.org/licenses/mit-license.php MIT License
 */
class PostBindSavedDataEvent extends FormFlowEvent {

	/**
	 * @var mixed
	 */
	protected $formData;

	/**
	 * @var int
	 */
	protected $stepNumber;

	/**
	 * @param FormFlowInterface $flow
	 * @param mixed $formData
	 * @param int $stepNumber
	 */
	public function __construct(FormFlowInterface $flow, $formData, $stepNumber) {
		$this->flow = $flow;
		$this->formData = $formData;
		$this->stepNumber = $stepNumber;
	}

	/**
	 * @return mixed
	 */
	public function getFormData() {
		return $this->formData;
	}

	/**
	 * @return int
	 */
	public function getStepNumber() {
		return $this->stepNumber;
	}

}
