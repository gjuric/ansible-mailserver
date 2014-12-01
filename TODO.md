# TODO

## Apps

    - Prosody
    - mail_console


## Dovecot

    - use only one query to check password and fetch user data
    - move quota to redis


## SQLGrey

    - set Postmaster address
    - check error in the log: 'sqlgrey: Couldn't unlink "/var/run/sqlgrey.pid" [Permission denied]'


## Spamassassin

    - TODO: update sa rules: http://krischan.eu/index.php/2014/04/21/spamassassin-bug-gpg-validation-failed/
      Check /etc/cron.daily/spamassassin for info (sa-update-keys home folder etc.)
    - http://wiki.apache.org/spamassassin/RazorAmavisd


## General

    - see what to do with mail to local users (amavis, root, ...)
    - double check the warning about permissions while starting amavisd-new during boot
    - move spamassassins bayes data to mysql
    - ipv6 firewall
