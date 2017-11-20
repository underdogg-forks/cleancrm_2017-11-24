<?php
/*
  |=============================================================
  |  Cron Job links
  |=============================================================
  |	These links are for cron job execution
  |
 */
Route::get('readmails', ['as' => 'readmails', 'uses' => 'Agent\helpdesk\MailController@readmails']);
Route::get('notification',
  ['as' => 'notification', 'uses' => 'Agent\helpdesk\NotificationController@send_notification']);
Route::get('auto-close-tickets', ['as' => 'auto.close', 'uses' => 'Client\helpdesk\UnAuthController@autoCloseTickets']);





