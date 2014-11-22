<?php
/**
*
* @package phpBB Extension - Gringott's Bank
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace zkspanel\gringotts\migrations;

class release_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['gringotts_absence_time']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('gringotts_absence_time', 75)),
            array('config.add', array('gringotts_interest_absence', 20)),
            array('config.add', array('gringotts_interest_month', 0)),
            array('config.add', array('gringotts_lottery_price', 50)),
            array('config.add', array('gringotts_monthly_yield_bs', 0)),
            array('config.add', array('gringotts_monthly_yield_cc', 0.2)),
            array('config.add', array('gringotts_monthly_yield_cp', 1)),
            array('config.add', array('gringotts_cost_withdrawal_bs', 0)),
            array('config.add', array('gringotts_cost_withdrawal_cc', 0)),
            array('config.add', array('gringotts_cost_withdrawal_cp', 0)),
            array('config.add', array('gringotts_extract_rate_bs', 0.02)),
            array('config.add', array('gringotts_extract_rate_cc', 0.02)),
            array('config.add', array('gringotts_extract_rate_cp', 0.02)),
            array('config.add', array('gringotts_lottery_rate', 0.05)),
            array('config.add', array('gringotts_monthly_rate_bs', 0)),
            array('config.add', array('gringotts_monthly_rate_cc', 0)),
            array('config.add', array('gringotts_monthly_rate_cp', 0)),
            array('config.add', array('gringotts_rate_transfer_bs', 1)),
            array('config.add', array('gringotts_rate_transfer_cc', 1)),
            array('config.add', array('gringotts_rate_transfer_cp', 1)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_GRINGOTTS_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_GRINGOTTS_TITLE',
				array(
					'module_basename'	=> '\zkspanel\gringotts\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
