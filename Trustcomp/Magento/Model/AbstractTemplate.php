<?php
namespace Trustcomp\Magento\Model;
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
class AbstractTemplate extends \Magento\Email\Model\AbstractTemplate{
    protected function getFilterFactory() {
        return parent::getFilterFactory();
    }

    public function getType() {
        return parent::getType();
    }
     /**
     * Return logo URL for emails. Take logo from theme if custom logo is undefined
     *
     * @param  Store|int|string $store
     * @return string
     */
    protected function getLogoUrl($store)
    {
        error_log('ewerwe');
        $store = $this->storeManager->getStore($store);
        $fileName = $this->scopeConfig->getValue(
            self::XML_PATH_DESIGN_EMAIL_LOGO,
            ScopeInterface::SCOPE_STORE,
            $store
        );
        if ($fileName) {
            $uploadDir = \Trustcomp\Magento\Model\Design\Backend\Logo::UPLOAD_DIR;
            $mediaDirectory = $this->filesystem->getDirectoryRead(DirectoryList::MEDIA);
            if ($mediaDirectory->isFile($uploadDir . '/' . $fileName)) {
                return $this->storeManager->getStore()->getBaseUrl(
                    \Magento\Framework\UrlInterface::URL_TYPE_MEDIA
                ) . $uploadDir . '/' . $fileName;
            }
        }
        return $this->getDefaultEmailLogo();
    }


//put your code here
}
