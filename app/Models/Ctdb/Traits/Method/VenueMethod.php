<?php

namespace App\Models\Ctdb\Traits\Method;

/**
 * Trait VenueMethod.
 */
trait VenueMethod
{
    /**
     * @return bool
     */
    public function hasSocialmedia()
    {
        if ($this->hasFacebookLink() || $this->hasTwitterLink() || $this->hasYouTubeLink() || $this->hasInstagramLink()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function hasFacebookLink()
    {
        if ($this->facebooklink) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function hasTwitterLink()
    {
        if ($this->twitterlink) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function hasYouTubeLink()
    {
        if ($this->youtubelink) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public function hasInstagramLink()
    {
        if ($this->instagramlink) {
            return true;
        } else {
            return false;
        }
    }




}
