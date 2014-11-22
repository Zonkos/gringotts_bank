<?php
/**
 *
 * @package phpBB Extension - Gringotts Bank
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace zkspanel\gringotts\acp;

class main_info
{
    function module()
    {
        return array(
            'filename'	=> '\zkspanel\gringotts\acp\main_module',
            'title'		=> 'ACP_GRINGOTTS_TITLE',
            'version'	=> '0.0.1',
            'modes'		=> array(
                'settings'	=> array('title' => 'ACP_GRINGOTTS', 'auth' => 'ext_zkspanel/gringotts && acl_a_board', 'cat' => array('ACP_GRINGOTTS_TITLE')),
            ),
        );
    }
}
