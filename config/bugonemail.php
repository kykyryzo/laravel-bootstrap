<?php

return array(
    'project_name' => 'BugOnEmail!',
    'notify_emails' => array(''),
    'email_template' => "bugonemail::email.notifyException",
    'notify_environment' => array('production'),
    'prevent_exception' => array('Symfony\Component\HttpKernel\Exception\NotFoundHttpException'),
);
