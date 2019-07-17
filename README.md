# Mail Console Setup

Requirements:
 - OS: Debian 10 (Buster)
 - Memory: >1GB (otherwise ClamAV will not start)


To be able to run Ansible you need Python installed on the server:

    apt-get install python-minimal python-apt python-pycurl --no-install-recommends -y


Use your regular account to connect to the server and setup passwordless sudo
so Ansible can run commands with root privileges.

    apt-get install sudo

    /usr/sbin/visudo

Add your user account like this:

    {{username}}    ALL=(ALL:ALL) NOPASSWD:ALL

Copy your SSH public key to the server so you can login without the password:

    ssh-copy-id {{username}}@192.168.5.20
