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
            ->subject('Welcome to Aethryna! 🎉')
            ->greeting('Welcome to Aethryna, ' . $notifiable->name . '!')
            ->line('Thank you for joining our community of digital transformation leaders. We\'re excited to have you on board!')
            ->line('**What\'s Next?**')
            ->line('• **Complete Your Profile**: Tell us more about your goals and interests')
            ->line('• **Take Our Assessment**: Discover your perfect tech career path')
            ->line('• **Join a Program**: Start your journey with our mentorship programs')
            ->line('• **Connect with Mentors**: Get guidance from industry professionals')
            ->action('Start Your Journey', url('/dashboard'))
            ->line('**Your Success is Our Mission**')
            ->line('At Aethryna, we believe in your potential. Our programs are designed to help you:')
            ->line('• Build real-world tech skills')
            ->line('• Connect with industry mentors')
            ->line('• Launch your tech career')
            ->line('• Join a supportive community')
            ->line('If you have any questions, don\'t hesitate to reach out to our team.')
            ->salutation('Best regards,')
            ->salutation('The Aethryna Team')
            ->salutation('🌟 Empowering Youth Through Digital Skills & Mentorship 🌟');
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
