<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUser extends Notification
{
    use Queueable;
    private $new_user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $new_user)
    {
      $this->new_user = $new_user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      return (new MailMessage)
                ->greeting('Saludos')
                ->subject('Nueva solicitud de inscripción')
          ->line($this->new_user->name. ' quiere registrarse en la plataforma promocional de la comunidad. El email de registro es: ' . $this->new_user->email)
          ->action('Aprobar usuario', route('admin.users.approve', $this->new_user->id));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
