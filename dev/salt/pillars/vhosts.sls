vhosting:
  users:
    frisbee.dev:
      vhost:
        frisbee.dev:
          php_version: '7.0'
          webroot_public: True
          fastcgi_params:
            - fastcgi_param APPLICATION_ENV development;
          extra_config:
            - sendfile off;
      mysql_database:
        project:
          password: changeme
