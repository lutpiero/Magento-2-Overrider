<?php
namespace Trustcomp\Magento\Model\Design\Backend;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LogoFix
 *
 * @author user
 */
class LogoFix extends \Magento\Theme\Model\Design\Backend\Logo {
    //put your code here
    /**
     * Return path to directory for upload file
     *
     * @return string
     * @throw \Magento\Framework\Exception\LocalizedException
     */
    
    protected function _getUploadDir()
    {   parent::_getUploadDir();
        error_log('ewerwe2');
        return $this->_mediaDirectory->getRelativePath($this->_appendScopeInfo(\Trustcomp\Magento\Model\Design\Backend\Logo::UPLOAD_DIR));
    }
}
