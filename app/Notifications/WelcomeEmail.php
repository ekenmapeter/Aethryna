<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeEmail extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Welcome to SkillsCo-op')
            ->greeting('Welcome to Aethryna, ' . $notifiable->name . '!')
            ->line('Thank you for joining SkillsCo-op. You are now part of a community built around widening access to digital skills and meaningful career progression.')
            ->line('Take our free career assessment to find the track that fits your goals and strengths.')
            ->line('Explore your learning pathway across Web Development, Digital Design, IT Support, and Digital Sales.')
            ->line('Register for an upcoming panel session to hear directly from practitioners.')
            ->action('Go to Your Dashboard', url('/dashboard'))
            ->line('If you have any questions, reply to this email or contact us at hello@skillscoop.org.')
            ->salutation('The SkillsCo-op Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
