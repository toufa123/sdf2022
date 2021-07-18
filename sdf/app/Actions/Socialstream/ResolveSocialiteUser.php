<?php

declare(strict_types=1);

namespace App\Actions\Socialstream;

use JoelButcher\Socialstream\Contracts\ResolvesSocialiteUsers;
use JoelButcher\Socialstream\Socialstream;
use Laravel\Socialite\Facades\Socialite;

class ResolveSocialiteUser implements ResolvesSocialiteUsers
{
    /**
     * Resolve the user for a given provider.
     */
    public function resolve(string $provider): \Laravel\Socialite\AbstractUser
    {
        $user = Socialite::driver($provider)->user();

        if (Socialstream::generatesMissingEmails()) {
            $user->email = $user->getEmail() ?? "{$user->id}@{$provider}".config('app.domain');
        }

        return $user;
    }
}
