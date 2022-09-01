<?php
namespace Dev2studio\ModuleList\Block;
class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {

        $moduleList = shell_exec(' php ../bin/magento module:status');
        $moduleList = str_replace("List of enabled modules:\n",'', $moduleList);
        $moduleList = trim($moduleList);
        $splitList = explode("List of disabled modules:\n",$moduleList);


        $moduleActive = array_reverse(
            explode("\n",$splitList[0])
        );
        $moduleDisabled = array_reverse(
            explode("\n",$splitList[1])
        );


        return [
          'active'=>$moduleActive,
          'disabled'=>$moduleDisabled
        ];

    }
}
