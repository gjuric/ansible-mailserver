# TODO

## Apps

    - mail_console
    - fail2ban


## amavisd-new

    - configure number of processes spawned (see end of https://help.ubuntu.com/community/PostfixAmavisNew)


## Dovecot

    - set default folder names http://apple.stackexchange.com/questions/105145/what-are-the-default-special-folder-names-for-imap-accounts-in-mail-app-like-dr
    - use only one query to check password and fetch user data
    - move quota to redis


## Roundcube

    - set default folder names to match the ones from Dovecot


## Prosody

    - https://code.google.com/p/prosody-modules/wiki/mod_log_auth + fail2ban rules


## SQLGrey

    - set Postmaster address
    - check error in the log: 'sqlgrey: Couldn't unlink "/var/run/sqlgrey.pid" [Permission denied]'


## Spamassassin

    - TODO: update sa rules: http://krischan.eu/index.php/2014/04/21/spamassassin-bug-gpg-validation-failed/
      Check /etc/cron.daily/spamassassin for info (sa-update-keys home folder etc.)
    - http://wiki.apache.org/spamassassin/RazorAmavisd


## Postfix

    - allow specifying the port MySQL is listening


## General

    - see what to do with mail to local users (amavis, root, ...)
    - double check the warning about permissions while starting amavisd-new during boot
    - move spamassassins bayes data to mysql
    - ipv6 firewall
