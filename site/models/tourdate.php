<?php
class TourdatePage extends Page {


    public function bookings() {
        return $this->childrenAndDrafts()->filterBy('intendedTemplate', '==', 'booking');
    }

    public function children_num() {

        $allchildrenarray = $this->bookings()->pluck('children_number');

        return array_reduce($allchildrenarray, function($carry, $item) { $carry += $item->int(); return $carry; });

    }

    public function adult_num() {

        $alladultsarray = $this->bookings()->pluck('adultnum');

        return array_reduce($alladultsarray, function($carry, $item) { $carry += $item->int(); return $carry; });

    }

    public function allowed_num() {
        if ($this->people()->exists() and $this->people()->isNotEmpty()){
            return $this->people()->int();
        } else {
            return 18;
        }
    }

    public function status() {

        $closingdate = $this->date()->toDate() + 43200;

        if (time() > $closingdate) {

            return "closed";

        } elseif ( $this->children_num() >= $this->allowed_num() ) {

            return "full";

        } elseif ( $this->children_num() >= ($this->allowed_num() - 8) ) {

            return "almost";

        } else {

            return "open";

        }

    }

    public function isFuture() {

        $closingdate = $this->date()->toDate() + 43200;

        if (time() < $closingdate) {

            return true;

        }

    }

    public function acceptsRegistrations() {

        if ($this->status() == 'open' or $this->status() == 'almost') {
            return true;
        }
        else {
            return false;
        }
    }


    public function format_date() {

        if ($this->site()->language()->locale() == 'en_US') {
            return $this->date()->toDate('l, F j');
        } else {
            return t($this->date()->toDate('l')) . ', ' . $this->date()->toDate('j') . ' ' . t($this->date()->toDate('F'));
        }

    }

    public function short_date() {

        if ($this->site()->language()->locale() == 'en_US') {
            return $this->date()->toDate('l d/m');
        } else {
            return t($this->date()->toDate('l')) . ' ' . $this->date()->toDate('d/m');
        }

    }

}
