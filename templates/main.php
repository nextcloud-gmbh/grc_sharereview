<?php
/**
 * Share Review
 *
 * SPDX-FileCopyrightText: 2026 Nextcloud GmbH
 * SPDX-FileCopyrightText: 2024 Marcel Scherello
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

use OCP\Util;
Util::addStyle('grc_sharereview', 'style');
Util::addStyle('grc_sharereview', '3rdParty/datatables.min');
Util::addScript('grc_sharereview', '3rdParty/jquery.min');
Util::addScript('grc_sharereview', '3rdParty/datatables.min');
Util::addScript('grc_sharereview', 'app');
Util::addScript('grc_sharereview', 'visualization');
Util::addScript('grc_sharereview', 'userGuidance');
?>

<div id="app-navigation">
    <?php print_unescaped($this->inc('part.navigation')); ?>
</div>

<div id="app-content">
    <div id="loading">
        <i class="ioc-spinner ioc-spin"></i>
    </div>
    <?php print_unescaped($this->inc('part.content')); ?>
</div>
<div>
    <?php print_unescaped($this->inc('part.templates')); ?>
</div>
