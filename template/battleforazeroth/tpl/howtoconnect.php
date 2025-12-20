<?php
/**
 * Created by Amin.MasterkinG
 * Website : MasterkinG32.CoM
 * Email : lichwow_masterking@yahoo.com
 * Date: 11/26/2018 - 8:36 PM
 */
?>
<p>1. <?php elang('create_account_tip1'); ?></p>
<p>2. <?php
    $win = '<a href="' . htmlspecialchars(get_config('download_windows_url') ? get_config('download_windows_url') : '#') . '">Windows</a>';
    echo sprintf(lang('create_account_tip2'), $win, htmlspecialchars(get_config('game_version')));
?></p>
<p>3. <?php elang('create_account_tip3'); ?></p>
<p>4. <?php elang('create_account_tip4'); ?></p>
<p style="text-align: center;font-weight: bold;" class="highlight-blue">set
    realmlist <?php echo get_config('realmlist'); ?></p>

