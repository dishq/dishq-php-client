# Dishq-php-client

Dishq client PHP Api. The api follows the following practices:

- namespaced under DishqClient\Api
- call $api->class->function() to access the api
- api throws exceptions instead of returning errors
- options are passed as an array instead of multiple arguments wherever possible
- All request and responses are communicated over JSON
- A minimum of PHP 5.3 is required



After that include `DishqClient.php` in your application and you can use the
API as usual.

# Usage

```php
use DishqClient\Api\Api;

$api = new Api($api_secret);

$api->transaction->insert($user_id,$order_id,$order_time,$order_details); // Creates transaction history
eg: $add = $api->transaction->insert(3,'av454','10:10',array(array('dish_id' => 1917 , 'quantity' => 1),array('dish_id' => 1905 ,'quantity' => 1)));

$api->feedback->insert($user_id,$order_id,$feedback); // Creates order feedback by user
eg: $feedback = $api->feedback->insert(3,"sh7s", 10);


$api->recommendations->get($user_id); // Fetch list of dishes recommended for user
eg: $recommend = $api->recommendations->get(90519);

$api->personalise->get($user_id,$restaurant_id); // Fetch personalised menu of restaurant of user
eg: $personalise = $api->personalise->get(90519,1);

```





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
