<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace NhoLuong\CloudMaintenanceMode;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Filesystem;
use Magento\Framework\Event\Manager;

class MaintenanceMode extends \Magento\Framework\App\MaintenanceMode
{

    /**
     * Maintenance flag dir
     */
    const FLAG_DIR = '/pub/media/';

}

