<?php
//Notification marking
Route::post('mark-read/{id}', 'Common\NotificationController@markRead');
Route::post('mark-all-read/{id}', 'Common\NotificationController@markAllRead');
/*        Breadcrumbs::register('notification.list', function ($breadcrumbs) {
            $breadcrumbs->parent('dashboard');
            $breadcrumbs->push('All Notifications', route('notification.list'));
        });*/
Route::get('notifications-list', ['as' => 'notification.list', 'uses' => 'Common\NotificationController@show']);
Route::post('notification-delete/{id}',
  ['as' => 'notification.delete', 'uses' => 'Common\NotificationController@delete']);
/*        Breadcrumbs::register('notification.settings', function ($breadcrumbs) {
            $breadcrumbs->parent('setting');
            $breadcrumbs->push('Notifications Settings', route('notification.settings'));
        });*/
Route::get('settings-notification',
  ['as' => 'notification.settings', 'uses' => 'Admin\helpdesk\SettingsController@notificationSettings']);
Route::get('delete-read-notification', 'Admin\helpdesk\SettingsController@deleteReadNoti');
Route::post('delete-notification-log', 'Admin\helpdesk\SettingsController@deleteNotificationLog');
Route::get('job-scheduler',
  ['as' => 'get.job.scheduler', 'uses' => 'CronJobsController@getScheduler']); //to get ob scheduler form page
/*        Breadcrumbs::register('get.job.scheder', function ($breadcrumbs) {
            $breadcrumbs->parent('setting');
            $breadcrumbs->push(Lang::get('lang.cron-jobs'), route('get.job.scheder'));
        });*/
/*
 * Error and debugging
 */
//route for showing error and debugging setting form page
Route::get('error-and-debugging-options',
  ['as' => 'err.debug.settings', 'uses' => 'Admin\helpdesk\ErrorAndDebuggingController@showSettings']);
/*Breadcrumbs::register('err.debug.settings', function ($breadcrumbs) {
    $breadcrumbs->parent('setting');
    $breadcrumbs->push(Lang::get('lang.error-debug-settings'), route('err.debug.settings'));
});*/
//route for submit error and debugging setting form page
Route::post('post-settings', [
  'as' => 'post.error.debug.settings',
  'uses' => 'Admin\helpdesk\ErrorAndDebuggingController@postSettings',
]);
//route to error logs table page
Route::get('show-error-logs', [
  'as' => 'error.logs',
  'uses' => 'Admin\helpdesk\ErrorAndDebuggingController@showErrorLogs',
]);
Route::get('test', ['as' => 'test', 'uses' => 'Common\PushNotificationController@response']);
// Error routes
Route::get('errors', ['as' => 'admin.errors.index', 'uses' => 'ErrorsController@index']);
Route::get('errors/purge', ['as' => 'admin.errors.purge', 'uses' => 'ErrorsController@purge']);
Route::get('errors/{errorId}/show', ['as' => 'admin.errors.show', 'uses' => 'ErrorsController@show']);
Route::get('test', ['as' => 'test', 'uses' => 'Common\PushNotificationController@response']);
Route::get('mail/config/service', ['as' => 'mail.config.service', 'uses' => 'Job\MailController@serviceForm']);
/*
 * Queue
 */
/*Breadcrumbs::register('queue', function ($breadcrumbs) {
    $breadcrumbs->parent('setting');
    $breadcrumbs->push(Lang::get('lang.queues'), route('queue'));
});*/
Route::get('queue', ['as' => 'queue', 'uses' => 'Job\QueueController@index']);
Route::get('form/queue', ['as' => 'queue.form', 'uses' => 'Job\QueueController@getForm']);
/*Breadcrumbs::register('queue.edit', function ($breadcrumbs) {
    $id = \Input::segment(2);
    $breadcrumbs->parent('queue');
    $breadcrumbs->push(Lang::get('lang.edit'), route('queue.edit', $id));
});*/
Route::get('queue/{id}', ['as' => 'queue.edit', 'uses' => 'Job\QueueController@edit']);
Route::post('queue/{id}', ['as' => 'queue.update', 'uses' => 'Job\QueueController@update']);
Route::get('queue/{id}/activate', ['as' => 'queue.activate', 'uses' => 'Job\QueueController@activate']);
Route::get('get-ticket-number',
  ['as' => 'get.ticket.number', 'uses' => 'Admin\helpdesk\SettingsController@getTicketNumber']);
Route::get('genereate-pdf/{threadid}', ['as' => 'thread.pdf', 'uses' => 'Agent\helpdesk\TicketController@pdfThread']);
/*
 * Url Settings
 */
/*Breadcrumbs::register('url', function ($breadcrumbs) {
    $breadcrumbs->parent('setting');
    $breadcrumbs->push('URL', route('url.settings'));
});*/
Route::get('url/settings', ['as' => 'url.settings', 'uses' => 'Admin\helpdesk\UrlSettingController@settings']);
Route::patch('url/settings',
  ['as' => 'url.settings.post', 'uses' => 'Admin\helpdesk\UrlSettingController@postSettings']);
/*
 * Social media settings
 */
/*Breadcrumbs::register('social', function ($breadcrumbs) {
    $breadcrumbs->parent('setting');
    $breadcrumbs->push(Lang::get('lang.social-media'), route('social'));
});*/
/*Breadcrumbs::register('social.media', function ($breadcrumbs) {
    $id = \Input::segment(2);
    $breadcrumbs->parent('social');
    $breadcrumbs->push(Lang::get('lang.settings'), route('social.media', $id));
});*/
Route::get('social/media', ['as' => 'social', 'uses' => 'Admin\helpdesk\SocialMedia\SocialMediaController@index']);
Route::get('social/media/{provider}',
  ['as' => 'social.media', 'uses' => 'Admin\helpdesk\SocialMedia\SocialMediaController@settings']);
Route::post('social/media/{provider}',
  ['as' => 'social.media.post', 'uses' => 'Admin\helpdesk\SocialMedia\SocialMediaController@postSettings']);


// user---arindam
Route::post('rolechangeadmin/{id}', ['as' => 'user.post.rolechangeadmin', 'uses' => 'Agent\helpdesk\UserController@changeRoleAdmin']);
Route::post('rolechangeagent/{id}', ['as' => 'user.post.rolechangeagent', 'uses' => 'Agent\helpdesk\UserController@changeRoleAgent']);
Route::post('rolechangeuser/{id}', ['as' => 'user.post.rolechangeuser', 'uses' => 'Agent\helpdesk\UserController@changeRoleUser']);
Route::get('password', ['as' => 'user.changepassword', 'uses' => 'Agent\helpdesk\UserController@randomPassword']);
Route::post('changepassword/{id}', ['as' => 'user.post.changepassword', 'uses' => 'Agent\helpdesk\UserController@randomPostPassword']);
Route::post('delete/{id}', ['as' => 'user.post.delete', 'uses' => 'Agent\helpdesk\UserController@deleteAgent']);








