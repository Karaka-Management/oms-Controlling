<?php
/**
 * Jingga
 *
 * PHP Version 8.1
 *
 * @package   Modules\Controlling\Admin
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

namespace Modules\Controlling\Admin;

use phpOMS\Module\UninstallerAbstract;

/**
 * Uninstaller class.
 *
 * @package Modules\Controlling\Admin
 * @license OMS License 2.0
 * @link    https://jingga.app
 * @since   1.0.0
 */
final class Uninstaller extends UninstallerAbstract
{
    /**
     * Path of the file
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__;
}
