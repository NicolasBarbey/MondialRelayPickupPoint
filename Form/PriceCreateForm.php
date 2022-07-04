<?php
/*************************************************************************************/
/*      Copyright (c) Franck Allimant, CQFDev                                        */
/*      email : thelia@cqfdev.fr                                                     */
/*      web : http://www.cqfdev.fr                                                   */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE      */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace MondialRelayPickupPoint\Form;

use MondialRelayPickupPoint\MondialRelayPickupPoint;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Thelia\Form\BaseForm;

/**
 * @author Franck Allimant <franck@cqfdev.fr>
 */
class PriceCreateForm extends BaseForm
{
    protected function buildForm()
    {
        $this->formBuilder
            ->add(
                'max_weight',
                NumberType::class,
                [
                    "constraints" => [new GreaterThan([ 'value' => 0 ])],
                    'label' => $this->translator->trans('Weight up to...', [], MondialRelayPickupPoint::DOMAIN_NAME),
                ]
            )->add(
                'price',
                NumberType::class,
                [
                    "constraints" => [new GreaterThan([ 'value' => 0 ])],
                    'label' => $this->translator->trans('Price', [], MondialRelayPickupPoint::DOMAIN_NAME),
                ]
            )
        ;
    }
}
