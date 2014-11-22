<?php
/**
 *
 * @package phpBB Extension - Zkspanel Gringott's
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'ACP_GRINGOTTS' => "Gringott's Settings",
    'ACP_GRINGOTTS_TITLE' => "Gringott's Bank",
    'ACP_GRINGOTTS_SETTING_SAVED' => 'Configurações salvas com Sucesso!',

    'GRINGOTTS_ABSENCE_TIME'		        => "Tempo de ausência do usuário",
    'GRINGOTTS_ABSENCE_TIME_EXPLAIN'		=> "Determine a partir de quantos dias o usuário será considerado ausente.",
    'GRINGOTTS_INTEREST_ABSENCE'	        => "Juros por Ausência",
    'GRINGOTTS_INTEREST_ABSENCE_EXPLAIN'	=> "Determine o valor dos juros que será cobrado mensalmente do usuário devido a sua ausência. Deixe 0 para desativar.",
    'GRINGOTTS_INTEREST_MONTH'		        => "Juros por mês nas empresas",
    'GRINGOTTS_INTEREST_MONTH_EXPLAIN'		=> "Determine quanto será cobrado por mês das lojas e empresas para elas funcionarem.. Deixe 0 para desativar.",
    'GRINGOTTS_LOTTERY_PRICE'		        => "Preço do bilhete da loteria",
    'GRINGOTTS_LOTTERY_PRICE_EXPLAIN'		=> "Determine o valor do bilhete da loteria que será descontado do personagem. . Deixe 0 para desativar.",
    'GRINGOTTS_MONTHLY_YIELD_BS'	        => "Rendimento mensal da Economia Pessoal",
    'GRINGOTTS_MONTHLY_YIELD_BS_EXPLAIN'	=> "Determine o valor mensal de rendimento. Deixe 0 para desativar.",
    'GRINGOTTS_MONTHLY_YIELD_CC'	        => "Rendimento mensal da Conta Corrente",
    'GRINGOTTS_MONTHLY_YIELD_CC_EXPLAIN'	=> "Determine o valor mensal de rendimento. Deixe 0 para desativar.",
    'GRINGOTTS_MONTHLY_YIELD_CP'	        => "Rendimento mensal da Conta Poupança",
    'GRINGOTTS_MONTHLY_YIELD_CP_EXPLAIN'	=> "Determine o valor mensal de rendimento. Deixe 0 para desativar.",
    'GRINGOTTS_COST_WITHDRAWAL_BS'	        => "Custo de Saque da Economia Pessoal",
    'GRINGOTTS_COST_WITHDRAWAL_BS_EXPLAIN'	=> "Determine o custo que será cobrado para cada saque da economia pessoal. Deixe 0 para desativar.",
    'GRINGOTTS_COST_WITHDRAWAL_CC'	        => "Custo de Saque da Conta Corrente",
    'GRINGOTTS_COST_WITHDRAWAL_CC_EXPLAIN'	=> "Determine o custo que será cobrado para cada saque da conta corrente. Deixe 0 para desativar.",
    'GRINGOTTS_COST_WITHDRAWAL_CP'	        => "Custo de Saque da Conta Poupança",
    'GRINGOTTS_COST_WITHDRAWAL_CP_EXPLAIN'	=> "Determine o custo que será cobrado para cada saque da conta poupança. Deixe 0 para desativar.",
    'GRINGOTTS_EXTRACT_RATE_BS'		        => "Taxa de Extrato da Economia Pessoal",
    'GRINGOTTS_EXTRACT_RATE_BS_EXPLAIN'		=> "Determine a taxa que será descontada da economia pessoal a cada visualização do extrato. Deixe 0 para desativar.",
    'GRINGOTTS_EXTRACT_RATE_CC'		        => "Taxa de Extrato da Conta Corrente",
    'GRINGOTTS_EXTRACT_RATE_CC_EXPLAIN'		=> "Determine a taxa que será descontada da conta corrente a cada visualização do extrato. Deixe 0 para desativar.",
    'GRINGOTTS_EXTRACT_RATE_CP'		        => "Taxa de Extrato da Conta Poupança",
    'GRINGOTTS_EXTRACT_RATE_CP_EXPLAIN'		=> "Determine a taxa que será descontada da conta poupança a cada visualização do extrato. Deixe 0 para desativar.",
    'GRINGOTTS_LOTTERY_RATE'		        => "Taxa da loteria",
    'GRINGOTTS_LOTTERY_RATE_EXPLAIN'		=> "Determine a porcentagem que será cobrada em cima do valor do prêmio da loteria antes dele ser entregue. Deixe 0 para desativar.",
    'GRINGOTTS_MONTHLY_RATE_BS'		        => "Taxa mensal de uso Economia Pessoal",
    'GRINGOTTS_MONTHLY_RATE_BS_EXPLAIN'		=> "Determine a taxa mensal de uso da economia pessoal no gringotts. Esta opção, normalmente é deixada inativa. Deixe 0 para desativar.",
    'GRINGOTTS_MONTHLY_RATE_CC'		        => "Taxa mensal de uso Conta Corrente",
    'GRINGOTTS_MONTHLY_RATE_CC_EXPLAIN'		=> "Determine a taxa mensal de uso da conta corrente no gringotts. Esta opção, normalmente é deixada inativa. Deixe 0 para desativar.",
    'GRINGOTTS_MONTHLY_RATE_CP'		        => "Taxa mensal de uso Conta Poupança",
    'GRINGOTTS_MONTHLY_RATE_CP_EXPLAIN'		=> "Determine a taxa mensal de uso da conta poupança no gringotts. Esta opção, normalmente é deixada inativa. Deixe 0 para desativar.",
    'GRINGOTTS_RATE_TRANSFER_BS'	        => "Taxa de Transferência da Economia Pessoal",
    'GRINGOTTS_RATE_TRANSFER_BS_EXPLAIN'	=> "Determine a taxa de transferência que será cobrada a cada valor transferido da economia pessoal. Deixe 0 para desativar.",
    'GRINGOTTS_RATE_TRANSFER_CC'	        => "Taxa de Transferência da Conta Corrente",
    'GRINGOTTS_RATE_TRANSFER_CC_EXPLAIN'	=> "Determine a taxa de transferência que será cobrada a cada valor transferido da conta corrente. Deixe 0 para desativar.",
    'GRINGOTTS_RATE_TRANSFER_CP'	        => "Taxa de Transferência da Conta Poupança",
    'GRINGOTTS_RATE_TRANSFER_CP_EXPLAIN'	=> "Determine a taxa de transferência que será cobrada a cada valor transferido da conta poupança. Deixe 0 para desativar.",
));