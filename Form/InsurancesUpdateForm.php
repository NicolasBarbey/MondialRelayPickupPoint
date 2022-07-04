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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Thelia\Form\BaseForm;

/**
 * @author Franck Allimant <franck@cqfdev.fr>
 */
class InsurancesUpdateForm extends BaseForm
{
    protected function buildForm()
    {
        $this->formBuilder
            ->add(
                'max_value',
                CollectionType::class,
                [
                    "entry_type" => NumberType::class,
                    "constraints" => [new GreaterThanOrEqual([ 'value' => 0 ])],
                    'label' => $this->translator->trans('Cart value', [], MondialRelayPickupPoint::DOMAIN_NAME),
                    'label_attr' => [ ],
                    'allow_add'    => true,
                    'allow_delete' => true,
                ]
            )->add(
                'price_with_tax',
                CollectionType::class,
                [
                    "entry_type" => NumberType::class,
                    "constraints" => [new GreaterThanOrEqual([ 'value' => 0 ])],
                    'label' => $this->translator->trans('Insurance price', [], MondialRelayPickupPoint::DOMAIN_NAME),
                    'label_attr' => [ ],
                    'allow_add'    => true,
                    'allow_delete' => true,
                ]
            )
        ;
    }
}
