<?php

/*
 * Copyright (C) 2017 <a href="mailto:jens.pelzetter@googlemail.com">Jens Pelzetter</a>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace AppBundle\Twig;

class CheckDateTime extends \Twig_Extension
{

    public function getFunctions()
    {
        return array(
            'isDateTime' => new \Twig_Function_Method($this, 'isDateTime'),
        );
    }

    public function isDateTime($date)
    {
        if ($date === null) {
            return false;
        }
        if (is_array($date)) {
            return false;
        }
        
        return ($date instanceof \DateTime);
    }

    public function getName()
    {
        return 'cms_compass_is_date_time';
    }

}
