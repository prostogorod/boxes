<?php
/* ====================
[BEGIN_COT_EXT]
Code=boxes
Hooks=index.tags
Tags=index.tpl:{INDEX_TEXT_BOXES}
Order=10
[END_COT_EXT]
==================== */
/**
 * boxes plugin
 *
 * @author  WebRomen
 * @copyright Copyright (C) 2015 - today: WebRomen | https://github.com/WebRomen/boxes
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$t->assign('INDEX_TEXT_BOXES', $cfg['plugin']['boxes']['indextextboxes']);
