<?php
/**
 *
 * @package phpBB Extension - Zkspanel Gringotts
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace zkspanel\gringotts\acp;

class main_module
{
    var $u_action;

    function main($id, $mode)
    {
        global $user, $template, $request, $config;

        // Include Language
        $user->add_lang('acp/common');
        $this->tpl_name = 'settings_body';
        $this->page_title = $user->lang('ACP_DEMO_TITLE');
        add_form_key('zkspanel/gringotts');

        if ($request->is_set_post('submit'))
        {
            if (!check_form_key('zkspanel/gringotts'))
            {
                trigger_error('FORM_INVALID');
            }

            $config->set('gringotts_absence_time',          $request->variable('gringotts_absence_time', 0));
            $config->set('gringotts_interest_absence',      $request->variable('gringotts_interest_absence', 0));
            $config->set('gringotts_interest_month',        $request->variable('gringotts_interest_month', 0));
            $config->set('gringotts_lottery_price',         $request->variable('gringotts_lottery_price', 0));
            $config->set('gringotts_monthly_yield_bs',      $request->variable('gringotts_monthly_yield_bs', 0));
            $config->set('gringotts_monthly_yield_cc',      $request->variable('gringotts_monthly_yield_cc', 0));
            $config->set('gringotts_monthly_yield_cp',      $request->variable('gringotts_monthly_yield_cp', 0));
            $config->set('gringotts_cost_withdrawal_bs',    $request->variable('gringotts_cost_withdrawal_bs', 0));
            $config->set('gringotts_cost_withdrawal_cc',    $request->variable('gringotts_cost_withdrawal_cc', 0));
            $config->set('gringotts_cost_withdrawal_cp',    $request->variable('gringotts_cost_withdrawal_cp', 0));
            $config->set('gringotts_extract_rate_bs',       $request->variable('gringotts_extract_rate_bs', 0));
            $config->set('gringotts_extract_rate_cc',       $request->variable('gringotts_extract_rate_cc', 0));
            $config->set('gringotts_extract_rate_cp',       $request->variable('gringotts_extract_rate_cp', 0));
            $config->set('gringotts_lottery_rate',          $request->variable('gringotts_lottery_rate', 0));
            $config->set('gringotts_monthly_rate_bs',       $request->variable('gringotts_monthly_rate_bs', 0));
            $config->set('gringotts_monthly_rate_cc',       $request->variable('gringotts_monthly_rate_cc', 0));
            $config->set('gringotts_monthly_rate_cp',       $request->variable('gringotts_monthly_rate_cp', 0));
            $config->set('gringotts_rate_transfer_bs',      $request->variable('gringotts_rate_transfer_bs', 0));
            $config->set('gringotts_rate_transfer_cc',      $request->variable('gringotts_rate_transfer_cc', 0));
            $config->set('gringotts_rate_transfer_cp',      $request->variable('gringotts_rate_transfer_cp', 0));

            trigger_error($user->lang('ACP_GRINGOTTS_SETTING_SAVED') . adm_back_link($this->u_action));
        }

        $template->assign_vars(array(
            'U_ACTION'				        => $this->u_action,
            'GRINGOTTS_ABSENCE_TIME'		=> $config['gringotts_absence_time'],
            'GRINGOTTS_INTEREST_ABSENCE'	=> $config['gringotts_interest_absence'],
            'GRINGOTTS_INTEREST_MONTH'		=> $config['gringotts_interest_month'],
            'GRINGOTTS_LOTTERY_PRICE'		=> $config['gringotts_lottery_price'],
            'GRINGOTTS_MONTHLY_YIELD_BS'	=> $config['gringotts_monthly_yield_bs'],
            'GRINGOTTS_MONTHLY_YIELD_CC'	=> $config['gringotts_monthly_yield_cc'],
            'GRINGOTTS_MONTHLY_YIELD_CP'	=> $config['gringotts_monthly_yield_cp'],
            'GRINGOTTS_COST_WITHDRAWAL_BS'	=> $config['gringotts_cost_withdrawal_bs'],
            'GRINGOTTS_COST_WITHDRAWAL_CC'	=> $config['gringotts_cost_withdrawal_cc'],
            'GRINGOTTS_COST_WITHDRAWAL_CP'	=> $config['gringotts_cost_withdrawal_cp'],
            'GRINGOTTS_EXTRACT_RATE_BS'		=> $config['gringotts_extract_rate_bs'],
            'GRINGOTTS_EXTRACT_RATE_CC'		=> $config['gringotts_extract_rate_cc'],
            'GRINGOTTS_EXTRACT_RATE_CP'		=> $config['gringotts_extract_rate_cp'],
            'GRINGOTTS_LOTTERY_RATE'		=> $config['gringotts_lottery_rate'],
            'GRINGOTTS_MONTHLY_RATE_BS'		=> $config['gringotts_monthly_rate_bs'],
            'GRINGOTTS_MONTHLY_RATE_CC'		=> $config['gringotts_monthly_rate_cc'],
            'GRINGOTTS_MONTHLY_RATE_CP'		=> $config['gringotts_monthly_rate_cp'],
            'GRINGOTTS_RATE_TRANSFER_BS'	=> $config['gringotts_rate_transfer_bs'],
            'GRINGOTTS_RATE_TRANSFER_CC'	=> $config['gringotts_rate_transfer_cc'],
            'GRINGOTTS_RATE_TRANSFER_CP'	=> $config['gringotts_rate_transfer_cp'],
            // Language
            'L_GRINGOTTS_ABSENCE_TIME'		        => $user->lang('GRINGOTTS_ABSENCE_TIME'),
            'L_GRINGOTTS_ABSENCE_TIME_EXPLAIN'		=> $user->lang('GRINGOTTS_ABSENCE_TIME_EXPLAIN'),
            'L_GRINGOTTS_INTEREST_ABSENCE'	        => $user->lang('GRINGOTTS_INTEREST_ABSENCE'),
            'L_GRINGOTTS_INTEREST_ABSENCE_EXPLAIN'	=> $user->lang('GRINGOTTS_INTEREST_ABSENCE_EXPLAIN'),
            'L_GRINGOTTS_INTEREST_MONTH'		    => $user->lang('GRINGOTTS_INTEREST_MONTH'),
            'L_GRINGOTTS_INTEREST_MONTH_EXPLAIN'	=> $user->lang('GRINGOTTS_INTEREST_MONTH_EXPLAIN'),
            'L_GRINGOTTS_LOTTERY_PRICE'		        => $user->lang('GRINGOTTS_LOTTERY_PRICE'),
            'L_GRINGOTTS_LOTTERY_PRICE_EXPLAIN'		=> $user->lang('GRINGOTTS_LOTTERY_PRICE_EXPLAIN'),
            'L_GRINGOTTS_MONTHLY_YIELD_BS'	        => $user->lang('GRINGOTTS_MONTHLY_YIELD_BS'),
            'L_GRINGOTTS_MONTHLY_YIELD_BS_EXPLAIN'	=> $user->lang('GRINGOTTS_MONTHLY_YIELD_BS_EXPLAIN'),
            'L_GRINGOTTS_MONTHLY_YIELD_CC'	        => $user->lang('GRINGOTTS_MONTHLY_YIELD_CC'),
            'L_GRINGOTTS_MONTHLY_YIELD_CC_EXPLAIN'	=> $user->lang('GRINGOTTS_MONTHLY_YIELD_CC_EXPLAIN'),
            'L_GRINGOTTS_MONTHLY_YIELD_CP'	        => $user->lang('GRINGOTTS_MONTHLY_YIELD_CP'),
            'L_GRINGOTTS_MONTHLY_YIELD_CP_EXPLAIN'	=> $user->lang('GRINGOTTS_MONTHLY_YIELD_CP_EXPLAIN'),
            'L_GRINGOTTS_COST_WITHDRAWAL_BS'	    => $user->lang('GRINGOTTS_COST_WITHDRAWAL_BS'),
            'L_GRINGOTTS_COST_WITHDRAWAL_BS_EXPLAIN'=> $user->lang('GRINGOTTS_COST_WITHDRAWAL_BS_EXPLAIN'),
            'L_GRINGOTTS_COST_WITHDRAWAL_CC'	    => $user->lang('GRINGOTTS_COST_WITHDRAWAL_CC'),
            'L_GRINGOTTS_COST_WITHDRAWAL_CC_EXPLAIN'=> $user->lang('GRINGOTTS_COST_WITHDRAWAL_CC_EXPLAIN'),
            'L_GRINGOTTS_COST_WITHDRAWAL_CP'	    => $user->lang('GRINGOTTS_COST_WITHDRAWAL_CP'),
            'L_GRINGOTTS_COST_WITHDRAWAL_CP_EXPLAIN'=> $user->lang('GRINGOTTS_COST_WITHDRAWAL_CP_EXPLAIN'),
            'L_GRINGOTTS_EXTRACT_RATE_BS'		    => $user->lang('GRINGOTTS_EXTRACT_RATE_BS'),
            'L_GRINGOTTS_EXTRACT_RATE_BS_EXPLAIN'	=> $user->lang('GRINGOTTS_EXTRACT_RATE_BS_EXPLAIN'),
            'L_GRINGOTTS_EXTRACT_RATE_CC'		    => $user->lang('GRINGOTTS_EXTRACT_RATE_CC'),
            'L_GRINGOTTS_EXTRACT_RATE_CC_EXPLAIN'	=> $user->lang('GRINGOTTS_EXTRACT_RATE_CC_EXPLAIN'),
            'L_GRINGOTTS_EXTRACT_RATE_CP'		    => $user->lang('GRINGOTTS_EXTRACT_RATE_CP'),
            'L_GRINGOTTS_EXTRACT_RATE_CP_EXPLAIN'	=> $user->lang('GRINGOTTS_EXTRACT_RATE_CP_EXPLAIN'),
            'L_GRINGOTTS_LOTTERY_RATE'		        => $user->lang('GRINGOTTS_LOTTERY_RATE'),
            'L_GRINGOTTS_LOTTERY_RATE_EXPLAIN'		=> $user->lang('GRINGOTTS_LOTTERY_RATE_EXPLAIN'),
            'L_GRINGOTTS_MONTHLY_RATE_BS'		    => $user->lang('GRINGOTTS_MONTHLY_RATE_BS'),
            'L_GRINGOTTS_MONTHLY_RATE_BS_EXPLAIN'	=> $user->lang('GRINGOTTS_MONTHLY_RATE_BS_EXPLAIN'),
            'L_GRINGOTTS_MONTHLY_RATE_CC'		    => $user->lang('GRINGOTTS_MONTHLY_RATE_CC'),
            'L_GRINGOTTS_MONTHLY_RATE_CC_EXPLAIN'	=> $user->lang('GRINGOTTS_MONTHLY_RATE_CC_EXPLAIN'),
            'L_GRINGOTTS_MONTHLY_RATE_CP'		    => $user->lang('GRINGOTTS_MONTHLY_RATE_CP'),
            'L_GRINGOTTS_MONTHLY_RATE_CP_EXPLAIN'	=> $user->lang('GRINGOTTS_MONTHLY_RATE_CP_EXPLAIN'),
            'L_GRINGOTTS_RATE_TRANSFER_BS'	        => $user->lang('GRINGOTTS_RATE_TRANSFER_BS'),
            'L_GRINGOTTS_RATE_TRANSFER_BS_EXPLAIN'	=> $user->lang('GRINGOTTS_RATE_TRANSFER_BS_EXPLAIN'),
            'L_GRINGOTTS_RATE_TRANSFER_CC'	        => $user->lang('GRINGOTTS_RATE_TRANSFER_CC'),
            'L_GRINGOTTS_RATE_TRANSFER_CC_EXPLAIN'	=> $user->lang('GRINGOTTS_RATE_TRANSFER_CC_EXPLAIN'),
            'L_GRINGOTTS_RATE_TRANSFER_CP'	        => $user->lang('GRINGOTTS_RATE_TRANSFER_CP'),
            'L_GRINGOTTS_RATE_TRANSFER_CP_EXPLAIN'	=> $user->lang('GRINGOTTS_RATE_TRANSFER_CP_EXPLAIN'),
        ));
    }
}