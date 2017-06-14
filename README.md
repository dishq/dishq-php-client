# razorpay-php

Dishq client PHP Api. The api follows the following practices:

- namespaced under DishqClient\Api
- call $api->class->function() to access the api
- api throws exceptions instead of returning errors
- options are passed as an array instead of multiple arguments wherever possible
- All request and responses are communicated over JSON
- A minimum of PHP 5.3 is required


Then, run `composer update`. If you are not using composer, download
the latest release from [the releases section](https://github.com/razorpay/razorpay-php/releases).
**You should download the `dishq-php-client.zip` file**.

After that include `DishqClient.php` in your application and you can use the
API as usual.

# Usage

```php
use DishqClient\Api\Api;

$api = new Api($api_secret);
$api->transaction->insert($user_id,$order_id,$order_details); // Creates transaction history

$api->feedback->insert($user_id,$order_id,$order_time,$feedback); // Creates order feedback by user

$api->recommendations->get($user_id,$show_match_scores); // Returns dish recommendations
$api->personalise->get($user_id,$restaurant_id,$show_match_scores); // Returns personalised menu of restaurant


```

For further help, see our documentation on <https://docs.razorpay.com>.

[composer-install]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx

## Developing

See the [doc.md](doc.md) file for getting started with development.

## License

The Dishq Client PHP SDK is released under the MIT License.

## Release

Steps to follow for a release:

0. Merge the branch with the new code to master.
1. Bump the Version in `src/Api.php`.
2. Rename Unreleased to the new tag in `CHANGELOG.md`
3. Add a new empty "Unreleased" section at the top of `CHANGELOG.md`
3. Fix links at bottom in `CHANGELOG.md`
4. Commit
5. Tag the release and push to GitHub
6. A release should automatically be created once the travis build passes. Edit the release to add some description.
