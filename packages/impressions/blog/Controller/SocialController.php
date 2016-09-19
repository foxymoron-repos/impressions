<?php
namespace Impressions\Blog\Controller;

use Socialite;

class SocialController extends Controller
{
	/**
	 * Redirect the user to the GitHub authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProvider()
	{
		return Socialite::driver('google')->scopes(['scope1', 'scope2'])->redirect();
	}

	/**
	 * Obtain the user information from GitHub.
	 *
	 * @return Response
	 */
	public function handleProviderCallback()
	{
		$user = Socialite::driver('google')->user();

		// OAuth Two Providers
		$token = $user->token;
		$refreshToken = $user->refreshToken; // not always provided
		$expiresIn = $user->expiresIn;
		
		// OAuth One Providers
		$token = $user->token;
		$tokenSecret = $user->tokenSecret;
		
		// All Providers
		$user->getId();
		$user->getNickname();
		$user->getName();
		$user->getEmail();
		$user->getAvatar();
	}
}
