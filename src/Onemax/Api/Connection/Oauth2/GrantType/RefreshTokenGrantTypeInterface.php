<?php
namespace Onemax\Api\Connection\Oauth2\GrantType;

interface RefreshTokenGrantTypeInterface extends GrantTypeInterface
{

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken($refreshToken);

    /**
     * @return bool
     */
    public function hasRefreshToken();
}
