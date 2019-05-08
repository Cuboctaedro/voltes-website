<?php

namespace Uniform\Actions;

use Kirby\Cms\App;

class SaveBookingAction extends Action
{
    public function perform()
    {
        $kirby = kirby();
        $kirby->impersonate('kirby');
        $parent = $kirby->site()->pages()->find('tourdates')->childrenAndDrafts()->findBy('slug', $this->form->data('tourdate'));
        $slug = url_slug($this->form->data('first_name')) . '-' . url_slug($this->form->data('last_name')) . '-' . microtime();
        if($parent->status() == 'full') {
            $bookingtype = 'waiting';
        } else {
            $bookingtype = 'booked';
        }
        try {
            $parent->createChild([
                'slug'     => $slug,
                'template' => 'booking',
                'content'  => [
                    'first_name'      => $this->form->data('first_name'),
                    'last_name'       => $this->form->data('last_name'),
                    'address'         => $this->form->data('address'),
                    'city'            => $this->form->data('city'),
                    'phone'           => $this->form->data('phone'),
                    'email'           => $this->form->data('email'),
                    'children_number' => $this->form->data('children_number'),
                    'adult_number'    => $this->form->data('adult_number'),
                    'children_names'  => $this->form->data('children_names'),
                    'client_message'  => $this->form->data('client_message'),
                    'booking_type'    => $bookingtype,
                    'booking_time'    => date('r'),
                ]
            ]);

        } catch (\Exception $e) {
            $this->fail($e->getMessage());
        }
    }
}

class MailToClientAction extends Action {

    public function perform() {
        $kirby = kirby();
        $receiver = $this->form->data('email');
        try {
            $kirby->email('toclient', [
                'to' => $receiver,
                'template' => 'toclient',
                'data' => [
                    'data' => $this->form->data(),
                    'page' => $kirby->site()->pages()->find('tourdates')->childrenAndDrafts()->findBy('slug', $this->form->data('tourdate'))
                 ]
            ]);
        } catch (Exception $error) {
            echo $error;
        }
    }
}

class MailContactAction extends Action {

    public function perform() {
        $kirby = kirby();
        try {
            $kirby->email('contact', [
                'template' => 'contact',
                'data' => [
                    'data' => $this->form->data(),
                 ]
            ]);
        } catch (Exception $error) {
            echo $error;
        }
    }

}
