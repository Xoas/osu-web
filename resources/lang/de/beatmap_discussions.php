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

return [
    'authorizations' => [
        'update' => [
            'null_user' => 'Zum Bearbeiten bitte einloggen.',
            'system_generated' => 'Automatisch erzeugte Beiträge können nicht bearbeitet werden.',
            'wrong_user' => 'Nur der Autor des Beitrages kann den Beitrag bearbeiten.',
        ],
    ],

    'events' => [
        'empty' => 'Noch ist nichts passiert.',
    ],

    'index' => [
        'title' => 'Beatmapdiskussion',
        'form' => [
            'deleted' => 'Gelöschte Diskussionen einbeziehen',

            'user' => [
                'label' => 'Benutzer',
                'overview' => 'Aktivitätsübersicht',
            ],
        ],
    ],

    'item' => [
        'created_at' => 'Beitragsdatum',
        'deleted_at' => 'Löschdatum',
        'message_type' => 'Typ',
        'permalink' => 'Permalink',
    ],

    'nearby_posts' => [
        'confirm' => 'Keiner dieser Beiträge behandelt mein Anliegen.',
        'notice' => 'There are posts around :timestamp (:existing_timestamps). Please check them before posting.',
    ],

    'reply' => [
        'open' => [
            'guest' => 'Zum Antworten einloggen',
            'user' => 'Antworten',
        ],
    ],

    'system' => [
        'resolved' => [
            'true' => 'Von :user als <resolved> markiert',
            'false' => 'Von :user wiedereröffnet',
        ],
    ],

    'user' => [
        'admin' => 'admin',
        'bng' => 'nominator',
        'owner' => 'mapper',
        'qat' => 'qat',
    ],
];
