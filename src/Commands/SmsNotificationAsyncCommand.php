<?php

namespace App\Commands;

use App\Messages\SmsNotification;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Throwable;

#[AsCommand(name: 'app:sms-notification:async')]
class SmsNotificationAsyncCommand extends Command
{
    public function __construct(private MessageBusInterface $bus)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setDescription('Dispatch sms notification message.')
            ->setHelp('This command allows you to test sms notification message dispatching.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $this->bus->dispatch(new SmsNotification(
                'This is a test message from Symfony Messenger Component.',
                'daniel.olivet@test.com',
                'david.olivet@test.com'
            ));
        } catch (Throwable $e) {
            $output->writeln($e->getMessage());

            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
