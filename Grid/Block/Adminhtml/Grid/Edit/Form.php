<?php
namespace Praveen\Grid\Block\Adminhtml\Grid\Edit;

class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
   
    protected $_systemStore;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        \Praveen\Grid\Model\Status $options,
        array $data = []
    ) 
    {
        $this->_options = $options;
        $this->_wysiwygConfig = $wysiwygConfig;
        parent::__construct($context, $registry, $formFactory, $data);
    }
   
    protected function _prepareForm()
    {
        $dateFormat = $this->_localeDate->getDateFormat(\IntlDateFormatter::SHORT);
        $model = $this->_coreRegistry->registry('row_data');
        $form = $this->_formFactory->create(
            ['data' => [
                            'id' => 'edit_form', 
                            'enctype' => 'multipart/form-data', 
                            'action' => $this->getData('action'), 
                            'method' => 'post'
                        ]
            ]
        );
        $form->setHtmlIdPrefix('wkgrid_');
        if ($model->getEntityId()) {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Edit Row Data'), 'class' => 'fieldset-wide']
            );
            $fieldset->addField('entity_id', 'hidden', ['name' => 'entity_id']);
        } else {
            $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('Add Row Data'), 'class' => 'fieldset-wide']
            );
        }
        $fieldset->addField(
            'Name',
            'text',
            [
                'name' => 'Name',
                'label' => __('Name'),
                'id' => 'Name',
                // 'title' => __('Title'),
                'class' => 'required-entry',
                'required' => true,
            ]
        );
        $wysiwygConfig = $this->_wysiwygConfig->getConfig(['tab_id' => $this->getTabId()]);
        $fieldset->addField(
            'Email',
            'text',
            [
                'name' => 'Email',
                'label' => __('Email'),
                // 'style' => 'height:36em;',
                'class' => 'required-entry',
                'required' => true
                // 'config' => $wysiwygConfig
            ]
        );
        $fieldset->addField(
            'Mobile',
            'text',
            [
                'name' => 'Mobile',
                'label' => __('Mobile'),
                // 'date_format' => $dateFormat,
                // 'time_format' => 'HH:mm:ss',
                // 'class' => 'validate-date validate-date-range date-range-custom_theme-from',
                'class' => 'required-entry',
                'required' => true
                // 'style' => 'width:200px',
            ]
        );
        // $fieldset->addField(
        //     'is_active',
        //     'select',
        //     [
        //         'name' => 'is_active',
        //         'label' => __('Status'),
        //         'id' => 'is_active',
        //         'title' => __('Status'),
        //         'values' => $this->_options->getOptionArray(),
        //         'class' => 'status',
        //         'required' => true,
        //     ]
        // );
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}