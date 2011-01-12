<?php

/**
* include file to set spform snippet properties.
* @access protected.
*
* Note: the properties recipientArray, errorsTo,
* SPFResponseID, and formProcAllowedReferers will
* be reset on install so their values here
* don't matter - they're set here to establish
* their position in the properties list.
*/

/* This section and the one at the end for debugging
 *  They allow this run as a standalone script that
 *  sets the properties and prints debugging info
 */

/*
global $modx;
$obj = $modx->getObject('modSnippet',array('name'=>'SPForm'));
if (!$obj) {
    $output .= "Object not found<br>";
}
*/

$properties = array(

array (
    'name'=>'recipientArray',
    'desc'=>'spf_recipientarray_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'Webmaster: Webmaster: you@yourdomain.com'
),
array(
    'name'=>'errorsTo',
    'desc'=>'spf_errorsto_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'you@yourdomain.com'
),
array(
    'name'=>'spformTpl',
    'desc'=>'spf_spformtpl_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'spformTpl'
),
array(
    'name'=>'spformprocTpl',
    'desc'=>'spf_spformproctpl_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'spformprocTpl'
),
array(
    'name'=>'spfcaptchaTpl',
    'desc'=>'spf_spfcaptchatpl_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'spfcaptchaTpl'
),
array(
    'name'=>'test_mode',
    'desc'=>'spftest_mode_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'spfDebug',
    'desc'=>'spf_spfdebug_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'formProcAllowedReferers',
    'desc'=>'spf_formprocallowedreferers_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'mysite.com'
),
array(
    'name'=>'spfResponseID',
    'desc'=>'spf_spfresponseid_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'9999'
),
array(
    'name'=>'adviseAll',
    'desc'=>'spf_adviseall_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnAll',
    'desc'=>'spf_warnall_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'spfUseSMTP',
    'desc'=>'spf_spfusesmtp_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'spfSMTP_Port',
    'desc'=>'spf_spfsmtp_port_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'587'
),
array(
    'name'=>'spfSMTP_Host',
    'desc'=>'spf_spfsmtp_host_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'yourhost.com'
),
array(
    'name'=>'spfSMTP_UserName',
    'desc'=>'spf_spfsmtp_username_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'yourUserName'
),
array(
    'name'=>'spfSMTP_Password',
    'desc'=>'spf_spfsmtp_password_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'yourPassword'
),
array(
    'name'=>'useHiddenField',
    'desc'=>'spf_usehiddenfield_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'warnHiddenField',
    'desc'=>'spf_warnhiddenfield_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logOnHidden',
    'desc'=>'spf_logonhidden_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'requireMouseOrKeyboard',
    'desc'=>'spf_requiremouseorkeyboard_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'requireKeyboard',
    'desc'=>'spf_requirekeyboard_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'requireMouse',
    'desc'=>'spf_requiremouse_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnMouseAndKeyboard',
    'desc'=>'spf_warnmouseandkeyboard_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logMouseAndKeyboardErrors',
    'desc'=>'spf_logmouseandkeyboarderrors_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'useTimer',
    'desc'=>'spf_usetimer_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'useTimerMin',
    'desc'=>'spf_usetimermin_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'10'
),
array(
    'name'=>'useTimerMax',
    'desc'=>'spf_usetimermax_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1800'
),
array(
    'name'=>'warnTimer',
    'desc'=>'spf_warntimer_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logOnTimer',
    'desc'=>'spf_logontimer_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'timerOffset',
    'desc'=>'spf_timeroffset_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'14543'
),
array(
    'name'=>'addSubjSig',
    'desc'=>'spf_addsubjsig_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'dfltSubj',
    'desc'=>'spf_dfltsubj_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>" Contact"
),
array(
    'name'=>'logInjections',
    'desc'=>'spf_loginjections_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnInjections',
    'desc'=>'spf_warninjections_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'maxRecipientLen',
    'desc'=>'spf_maxrecipientlen_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'65'
),
array(
    'name'=>'logRecipientLen',
    'desc'=>'spf_logrecipientlen_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnRecipientLen',
    'desc'=>'spf_warnrecipientlen_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'maxSubjectLen',
    'desc'=>'spf_maxsubjectlen_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'100'
),
array(
    'name'=>'logSubjectLen',
    'desc'=>'spf_logsubjectlen_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnSubjectLen',
    'desc'=>'spf_warnsubjectlen_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'maxLinks',
    'desc'=>'spf_maxlinks_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'3'
),
array(
    'name'=>'logMaxLinks',
    'desc'=>'spf_logmaxlinks_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnMaxLinks',
    'desc'=>'spf_warnmaxlinks_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logIllegalSubject',
    'desc'=>'spf_logillegalsubject_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnIllegalSubject',
    'desc'=>'spf_warnillegalsubject_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'mailAlso',
    'desc'=>'spf_mailalso_desc',
    'type'=>'textfield',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>''
),
array(
    'name'=>'requireName',
    'desc'=>'spf_requirename_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'requireSubject',
    'desc'=>'spf_requiresubject_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'requireEmail',
    'desc'=>'spf_requireemail_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'spTextRows',
    'desc'=>'spf_sptextrows_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'10'
),
array(
    'name'=>'spTextCols',
    'desc'=>'spf_sptextcols_desc',
    'type'=>'integer',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'50'
),
array(
    'name'=>'includeResetButton',
    'desc'=>'spf_includeresetbutton_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'showSingleRecipientTo',
    'desc'=>'spf_showsinglerecipientto_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'requireVerify',
    'desc'=>'spf_requireverify_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'useMathString',
    'desc'=>'spf_usemathstring_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'warnVerify',
    'desc'=>'spf_warnverify_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'adviseOnVerify',
    'desc'=>'spf_adviseonverify_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logOnVerify',
    'desc'=>'spf_logonverify_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'reportRemoteHost',
    'desc'=>'spf_reportremotehost_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'reportRemoteUser',
    'desc'=>'spf_reportremoteuser_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'reportRemoteAddr',
    'desc'=>'spf_reportremoteaddr_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'reportRemoteIdent',
    'desc'=>'spf_reportremoteident_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'reportOrigReferer',
    'desc'=>'spf_reportorigreferer_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'formProcBlankRefOkay',
    'desc'=>'spf_formprocblankrefokay_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'adviseOnReferer',
    'desc'=>'spf_adviseonreferer_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logOnReferer',
    'desc'=>'spf_logonreferer_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'useBanList',
    'desc'=>'spf_usebanlist_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'warnBanned',
    'desc'=>'spf_warnbanned_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'adviseOnBan',
    'desc'=>'spf_adviseonban_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'logOnBan',
    'desc'=>'spf_logonban_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'chkFormRefNotSelf',
    'desc'=>'spf_chkformrefnotself_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'1'
),
array(
    'name'=>'chkFormRefOwnServer',
    'desc'=>'spf_chkformrefownserver_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
),
array(
    'name'=>'chkFormRefNotBlank',
    'desc'=>'spf_chkformrefnotblank_desc',
    'type'=>'combo-boolean',
    'options'=>'',
    'lexicon'=>'spform:properties',
    'value'=>'0'
)
);

/* For debugging - see note above */

/*
  $obj->setProperties($spformProperties);
  $obj->save();

 $propArray = $obj->getProperties();

  foreach ($propArray as $key=>$value) {
      $output .= $key . ": " . $value . "<br><br>";
 }
*/

return $properties;
