<?php


namespace OrviSoft\MenuBlock\Model\Category\Attribute\Source;

class MenuStaticBlock extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $blocksCollection = $objectManager->create('\Magento\Cms\Model\ResourceModel\Block\CollectionFactory')->create();
        $data = [];
        $data[] = ['value' => 0, 'label' => __('No Block')];
        foreach($blocksCollection as $key => $value){
            $data[] = ['value' => $value->getId(), 'label' => __($value->getLabel())];
        }
        if ($this->_options === null) {
            $this->_options = $data;
        }
        return $this->_options;
    }
}
