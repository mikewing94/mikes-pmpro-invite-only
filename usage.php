<?php
include '/wp-content/plugins/mikes-pmpro-invite-only/mikes-pmpro-invite-only.php';

_e('Used Invite Codes', 'pmpro_invite_only');
echo pmproio_displayInviteCodes($current_user->ID, false, true);
?>
