<?php

namespace App\Enums\V1;

enum PermissionEnum: string
{
    // Roles have Permissions

    case VIEW_USER = 'view_user';
    case LIST_USERS = 'list_users';
    case CREATE_USER = 'create_user';
    case UPDATE_USER = 'update_user';

    case VIEW_MENTEE = 'view_mentee';
    case LIST_MENTEES = 'list_mentees';
    case CREATE_MENTEE = 'create_mentee';
    case UPDATE_MENTEE = 'update_mentee';

    public static function getAll(): array
    {
        return array_map(fn ($permission) => $permission->value, self::cases());
    }

    public static function groupByRole(): array
    {
        return [
            RoleEnum::ADMIN->value => [
                self::VIEW_USER->value,
                self::LIST_USERS->value,
                self::CREATE_USER->value,
                self::UPDATE_USER->value,
            ],
            RoleEnum::MENTOR->value => [
                self::VIEW_MENTEE->value,
                self::LIST_MENTEES->value,
                self::CREATE_MENTEE->value,
                self::UPDATE_MENTEE->value,
            ],
        ];
    }
}
