<?php


namespace App\DesignPatterns\Observer;


class Login implements Subject
{
    private $observes = [];

    public function attach($observable)
    {
        if (is_array($observable)) {
            foreach ($observable as $observe) {
                if ($observe instanceof Observer)
                    $this->attach($observe);
            }
            return $this;
        }
        $this->observes[] = $observable;
        return $this;
    }

    public function detach($observable)
    {
        $i = 0;
        foreach ($this->observes as $observe) {
            if ($observe === $observable) {
                unset($this->observes[$i]);
            }
            $i++;
        }
    }

    public function notify()
    {
        $notifications = [];
        foreach ($this->observes as $observe) {
            $notifications[] = $observe->handle();
        }
        return $notifications;
    }

    public function fire() {
        return $this->notify();
    }
}
