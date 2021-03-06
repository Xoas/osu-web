<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'edit' => [
        'title_compact' => 'ajustes',
        'username' => 'nombre de usuario',

        'avatar' => [
            'title' => 'Avatar',
            'rules' => 'Por favor asegúrese de que su avatar se adhiere a :link.<br/>Esto significa que debe ser <strong>adecuado para todas las edades</strong>. Es decir, no desnudez, profanidad o contenido sugestivo.',
            'rules_link' => 'las reglas de la comunidad',
        ],

        'email' => [
            'current' => 'correo electrónico actual',
            'new' => 'nuevo correo electrónico',
            'new_confirmation' => 'confirmar correo electrónico',
            'title' => 'Correo electrónico',
        ],

        'password' => [
            'current' => 'contraseña actual',
            'new' => 'nueva contraseña',
            'new_confirmation' => 'confirmar contraseña',
            'title' => 'Contraseña',
        ],

        'profile' => [
            'title' => 'Perfil',

            'user' => [
                'user_discord' => 'discord',
                'user_from' => 'ubicación actual',
                'user_interests' => 'intereses',
                'user_msnm' => 'skype',
                'user_occ' => 'ocupación',
                'user_twitter' => 'twitter',
                'user_website' => 'sitio web',
            ],
        ],

        'signature' => [
            'title' => 'Firma',
            'update' => 'actualizar',
        ],
    ],

    'notifications' => [
        'beatmapset_discussion_qualified_problem' => 'recibir notificaciones de nuevos problemas en mapas calificados de los siguientes modos',
        'beatmapset_disqualify' => 'recibir notificaciones para cuando se descalifiquen los mapas de los siguientes modos',
        'title' => 'Notificaciones',
        'topic_auto_subscribe' => 'activar automáticamente las notificaciones en nuevos temas del foro que crees',

        'options' => [
            '_' => 'opciones de entrega',
            'beatmapset:modding' => 'modding de mapas',
            'forum_topic_reply' => 'respuestas a temas',
            'mail' => 'correo electrónico',
            'push' => 'inserción',
        ],
    ],

    'oauth' => [
        'authorized_clients' => 'clientes autorizados',
        'own_clients' => 'clientes propios',
        'title' => 'OAuth',
    ],

    'options' => [
        'title' => 'Opciones',

        'beatmapset_download' => [
            '_' => 'tipo de descarga de mapa predeterminado',
            'all' => 'con vídeo si está disponible',
            'no_video' => 'sin vídeo',
            'direct' => 'abrir en osu!direct',
        ],
    ],

    'playstyles' => [
        'keyboard' => 'teclado',
        'mouse' => 'ratón',
        'tablet' => 'tableta',
        'title' => 'Estilos de juego',
        'touch' => 'táctil',
    ],

    'privacy' => [
        'friends_only' => 'bloquear los mensajes privados de personas que no están en la lista de amigos',
        'hide_online' => 'mostrarse como desconectado',
        'title' => 'Privacidad',
    ],

    'security' => [
        'current_session' => 'actual',
        'end_session' => 'Cerrar sesión',
        'end_session_confirmation' => 'Esto cerrará inmediatamente su sesión en ese dispositivo. ¿Esta seguro?',
        'last_active' => 'Última vez activo:',
        'title' => 'Seguridad',
        'web_sessions' => 'sesiones web',
    ],

    'update_email' => [
        'update' => 'actualizar',
    ],

    'update_password' => [
        'update' => 'actualizar',
    ],

    'verification_completed' => [
        'text' => 'Ya puedes cerrar esta pestaña/ventana',
        'title' => 'Verificación completada',
    ],

    'verification_invalid' => [
        'title' => 'Enlace de verificación no válido o caducado',
    ],
];
