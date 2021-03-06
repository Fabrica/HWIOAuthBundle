<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

/**
 * BitbucketResourceOwner
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class BitbucketResourceOwner extends GenericOAuth1ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $options = array(
        'authorization_url'   => 'https://bitbucket.org/!api/1.0/oauth/request_token?format=yaml',
        'request_token_url'   => 'https://bitbucket.org/!api/1.0/oauth/authenticate?format=yaml',
        'access_token_url'    => 'https://bitbucket.org/!api/1.0/oauth/access_token?format=yaml',
        'infos_url'           => 'https://api.bitbucket.org/1.0/user?format=yaml',
    );

    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier'     => 'user.username',
        'nickname'       => 'user.username',
        'realname'       => 'user.display_name',
        'profilepicture' => 'user.avatar',
    );
}
