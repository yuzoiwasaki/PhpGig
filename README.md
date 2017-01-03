# PhpGig

Simple GitHub User Information Getter.

## Usage

```php
require_once('PhpGig.php');

$php_gig = new PhpGig('Your GitHub Account ID');

$php_gig->getUserId(); #=> Your GitHub Account ID
$php_gig->getUserImage(); #=> Your GitHub Account Image URL
$php_gig->getUserFollowers(); #=> Your GitHub Followers
$php_gig->getUserFollowing(); #=> Your GitHub Following Users
$php_gig->getUserName(); #=> Your GitHub Screen Name
$php_gig->getUserCompany(); #=> Your GitHub Registered Company
$php_gig->getUserLocation(); #=> Your GitHub Registered Location
$php_gig->getUserEmail(); #=> Your GitHub Registered Email Address
$php_gig->getUserBio(); #=> Your GitHub Registered Biography
$php_gig->getUserRepos(); #=> Your GitHub Repositories
$php_gig->getUserStarred(); #=> Your GitHub Starred Repositories
$php_gig->getUserSubscriptions(); #=> Your GitHub Subscriptions
$php_gig->getUserOrganizations(); #=> Your GitHub Organizations
```
