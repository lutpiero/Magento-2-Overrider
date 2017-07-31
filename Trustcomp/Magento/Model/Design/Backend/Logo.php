<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Trustcomp\Magento\Model\Design\Backend;
use Magento\Theme\Model\Design\Backend\Logo as DesignLogo;
class Logo extends DesignLogo
{
    /**
     * The tail part of directory path for uploading
     */
    const UPLOAD_DIR = 'email/logo';
    /**
     * Upload max file size in kilobytes
     *
     * @var int
     */
    protected $maxFileSize = 2048;
    /**
     * Getter for allowed extensions of uploaded files
     *
     * @return string[]
     */
    public function getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png'];
    }
    protected function _getUploadDir()
    {   parent::_getUploadDir();
        error_log('ewerwe2');
        return $this->_mediaDirectory->getRelativePath($this->_appendScopeInfo(\Trustcomp\Magento\Model\Design\Backend\Logo::UPLOAD_DIR));
    }
}