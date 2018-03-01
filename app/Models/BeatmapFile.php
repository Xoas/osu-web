<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace App\Models;

class BeatmapFile
{
    private $parsed = false;
    private $backgroundImage;

    public static function open(string $filename)
    {
        return self::parse(file_get_contents($filename));
    }

    public static function parse(string $content)
    {
        // check file 'header'
        if (!presence($content) || substr($content, 0, 17) !== 'osu file format v') {
            return false;
        }

        // TODO: parse more stuff? ^_^b
        $matching = false;
        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            $line = trim($line);

            if ($matching) {
                $parts = explode(',', $line);
                if (count($parts) > 2 && $parts[0] === '0') {
                    $imageFilename = str_replace('"', '', $parts[2]);
                    break;
                }
            }

            if ($line === '[Events]') {
                $matching = true;
            }

            if ($line === '[HitObjects]') {
                break;
            }
        }

        $file = new self;
        $file->parsed = true;

        if (isset($imageFilename)) {
            // older beatmaps may not have sanitized paths
            $file->backgroundImage = str_replace('\\', '/', $imageFilename);
        }

        return $file;
    }

    public function backgroundImage()
    {
        if (!$this->parsed) {
            return false;
        }

        return $this->backgroundImage;
    }
}
