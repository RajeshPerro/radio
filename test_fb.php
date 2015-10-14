<?php
$request = new FacebookRequest(
    $session,
    'GET',
    '/me/feed',
    array(
        'limit' => '20'
    )
);

$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
foreach($graphObject as $data)
{
echo $data['CAACEdEose0cBABMfMftl4FbDAv4Txz0HUExh4jTWTenE5WXkWRhHZAc779NNopGQoTmAR1vWZCmULi15bkiwNRbPwdsvgcqr4u8D6U9gSxmU29fiMpE4iF0scZB1OZBVZCVNLPZBKgS6IJq8jJHhmYcZAzV3JHj69wXEBq5Ad2M3uKx3ZBM8ofgs7CQZB6Vy8ObbMUYCKi84ZAf8phSge4B8yL'];
}
?>