<?php if(!defined("__XE__")) exit();
$info = new stdClass;
$info->default_index_act = '';
$info->setup_index_act='';
$info->simple_setup_index_act='';
$info->admin_index_act = 'dispSpamfilterAdminDeniedIPList';
$info->menu = new stdClass;
$info->menu->spamFilter = new stdClass;
$info->menu->spamFilter->title='스팸필터';
$info->menu->spamFilter->type='';
$info->action = new stdClass;
$info->menu->spamFilter->index='dispSpamfilterAdminDeniedIPList';
$info->menu->spamFilter->acts[0]='dispSpamfilterAdminDeniedIPList';
$info->action->dispSpamfilterAdminDeniedIPList = new stdClass;
$info->action->dispSpamfilterAdminDeniedIPList->type='view';
$info->action->dispSpamfilterAdminDeniedIPList->grant='guest';
$info->action->dispSpamfilterAdminDeniedIPList->standalone='true';
$info->action->dispSpamfilterAdminDeniedIPList->ruleset='';
$info->action->dispSpamfilterAdminDeniedIPList->method='';
$info->menu->spamFilter->acts[1]='dispSpamfilterAdminDeniedWordList';
$info->action->dispSpamfilterAdminDeniedWordList = new stdClass;
$info->action->dispSpamfilterAdminDeniedWordList->type='view';
$info->action->dispSpamfilterAdminDeniedWordList->grant='guest';
$info->action->dispSpamfilterAdminDeniedWordList->standalone='true';
$info->action->dispSpamfilterAdminDeniedWordList->ruleset='';
$info->action->dispSpamfilterAdminDeniedWordList->method='';
$info->menu->spamFilter->acts[2]='dispSpamfilterAdminConfigBlock';
$info->action->dispSpamfilterAdminConfigBlock = new stdClass;
$info->action->dispSpamfilterAdminConfigBlock->type='view';
$info->action->dispSpamfilterAdminConfigBlock->grant='guest';
$info->action->dispSpamfilterAdminConfigBlock->standalone='true';
$info->action->dispSpamfilterAdminConfigBlock->ruleset='';
$info->action->dispSpamfilterAdminConfigBlock->method='';
$info->action->procSpamfilterAdminInsertDeniedIP = new stdClass;
$info->action->procSpamfilterAdminInsertDeniedIP->type='controller';
$info->action->procSpamfilterAdminInsertDeniedIP->grant='guest';
$info->action->procSpamfilterAdminInsertDeniedIP->standalone='true';
$info->action->procSpamfilterAdminInsertDeniedIP->ruleset='';
$info->action->procSpamfilterAdminInsertDeniedIP->method='';
$info->action->procSpamfilterAdminInsertDeniedWord = new stdClass;
$info->action->procSpamfilterAdminInsertDeniedWord->type='controller';
$info->action->procSpamfilterAdminInsertDeniedWord->grant='guest';
$info->action->procSpamfilterAdminInsertDeniedWord->standalone='true';
$info->action->procSpamfilterAdminInsertDeniedWord->ruleset='';
$info->action->procSpamfilterAdminInsertDeniedWord->method='';
$info->action->procSpamfilterAdminDeleteDeniedIP = new stdClass;
$info->action->procSpamfilterAdminDeleteDeniedIP->type='controller';
$info->action->procSpamfilterAdminDeleteDeniedIP->grant='guest';
$info->action->procSpamfilterAdminDeleteDeniedIP->standalone='true';
$info->action->procSpamfilterAdminDeleteDeniedIP->ruleset='';
$info->action->procSpamfilterAdminDeleteDeniedIP->method='';
$info->action->procSpamfilterAdminDeleteDeniedWord = new stdClass;
$info->action->procSpamfilterAdminDeleteDeniedWord->type='controller';
$info->action->procSpamfilterAdminDeleteDeniedWord->grant='guest';
$info->action->procSpamfilterAdminDeleteDeniedWord->standalone='true';
$info->action->procSpamfilterAdminDeleteDeniedWord->ruleset='';
$info->action->procSpamfilterAdminDeleteDeniedWord->method='';
$info->action->procSpamfilterAdminInsertConfig = new stdClass;
$info->action->procSpamfilterAdminInsertConfig->type='controller';
$info->action->procSpamfilterAdminInsertConfig->grant='guest';
$info->action->procSpamfilterAdminInsertConfig->standalone='true';
$info->action->procSpamfilterAdminInsertConfig->ruleset='insertConfig';
$info->action->procSpamfilterAdminInsertConfig->method='';
return $info;