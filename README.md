# Symfony Messenger

A project to test how works symfony messenger component with RabbitMQ.

## Getting Started

* Run `docker compose build --no-cache` to build fresh images
* Run `docker compose up --pull always -d --wait` to set up
* Run `docker compose down --remove-orphans` to stop the Docker containers.

## Commands

### Sync

I have created a dummy command to test how works sync messenger. It'll create a EmailNotificacion message and dispatch it then the EmailNotificationHandler will do whatever it have to do, in this case print a message.

Run `bin/console app:email-notification:sync` inside symfony's container.

### Async

I have created a dummy command to test how works async messenger with rabbitmq. It'll create a SmsNotificacion message and dispatch it then the SmsNotificationHandler will do whatever it have to do, in this case print a message.
This message dispached will be taken by rabbitmq.

* Run `bin/console app:sms-notification:async` inside symfony's container.
* Consume rabbitmq messages with `bin/console messenger:consume sms_notification -vv`

## Links

* [Symfony](https://localhost/)
* [RabbitMQ](http://localhost:15672/)
