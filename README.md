# dishq-php-client

dishq client PHP Api. The api follows the following practices:

- namespaced under DishqClient\Api
- call $api->class->function() to access the api
- api throws exceptions instead of returning errors
- options are passed as an array instead of multiple arguments wherever possible
- All request and responses are communicated over JSON
- A minimum of PHP 5.3 is required

After that include `DishqClient.php` in your application and you can use the API as usual.

# Usage

### NOTE
` Use assigned secret key (shared via email from dishq) in all the API’s below. Without secret key (or invalid key) API’s cannot be accessed. `

```php
use DishqClient\Api\Api;

$api = new Api($api_secret);

$api->transaction->insert($user_id,$order_id,$order_time,$order_details); // Creates transaction history
eg: $add = $api->transaction->insert(3, 'av454', '01/12/2016 22:10:13', array(array('dish_id' => 1917 , 'quantity' => 1),array('dish_id' => 1905 ,'quantity' => 1)));

$api->feedback->insert($user_id, $order_id, $feedback); // Creates order feedback by user
eg: $feedback = $api->feedback->insert(3,"sh7s", 10);

$api->recommendations->get($user_id, $user_latitude, $user_longitude); // Fetch list of dishes (at latitude and longitude) recommended for user
eg: $recommend = $api->recommendations->get(90519, 12.908496, 77.63806); // when lat lon of user is available
eg: $recommend = $api->recommendations->get(90519, 0.0, 0.0); // when lat lon is NOT available

$api->personalise->get($user_id, $restaurant_array); // Fetch personalised menu of restaurant(s) for a user
eg: $personalise = $api->personalise->get(90519,[31,162]);

```

# Release

Steps to follow for a release:

0. Merge the branch with the new code to master.
1. Bump the Version in `src/Api.php`.
2. Rename Unreleased to the new tag in `CHANGELOG.md`
3. Add a new empty "Unreleased" section at the top of `CHANGELOG.md`
3. Fix links at bottom in `CHANGELOG.md`
4. Commit
5. Tag the release and push to GitHub
6. A release should automatically be created once the travis build passes. Edit the release to add some description.
