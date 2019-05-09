<?php
class TourPage extends Page {

    public function tourDates() {

        return $this->site()->pages()->find('tourdates')->childrenAndDrafts()->filterBy('tour', $this->id());

    }

    public function hasDates() {

        if($this->tourDates()->count() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function openDates() {

        return $this->tourDates()->filterBy('acceptsRegistrations', true);

    }

    public function futureDates() {

        return $this->tourDates()->filterBy('isFuture', true)->sortBy('date');

    }

    public function hasOpenDates() {

        if($this->openDates()->count() > 0) {
            return true;
        }

    }
    public function hasFutureDates() {

        if($this->futureDates()->count() > 0) {
            return true;
        }

    }

    public function coverImage() {
        return $this->image()->thumb([
            'crop'       => true,
            'height'     => 448,
            'quality'    => 80,
            'width'      => 448,
        ])->url();

    }

    public function largeImage() {
        return $this->image()->thumb([
            'crop'       => true,
            'height'     => 464,
            'quality'    => 80,
            'width'      => 928,
        ])->url();
    }

    public function mediumImage() {
        return $this->image()->thumb([
            'crop'       => true,
            'height'     => 304,
            'quality'    => 80,
            'width'      => 608,
        ])->url();
    }
}
