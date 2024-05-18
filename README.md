
# Arbor for Laravel

A minimal package to enable quick integration of the Arbor Education API in a Laravel application. Currently it only supports the GraphQL API.


## Installation

Install laravel-arbor with composer

```bash
  composer require andrew1601/laravel-arbor
```

Add your [Arbor application](https://developers-portal.arbor.sc)'s credentials to your `.env` file

```
ARBOR_URL=https://api-sandbox2.uk.arbor.sc
ARBOR_APP_USERNAME=
ARBOR_APP_PASSWORD=
```
    
## Usage/Examples

You can use the ArborGraphQL facade to query with GraphQL. The facade is automatically registered for you when you install the package.

This facade returns the instance of `Softonic\GraphQL\Client` that was registered into your Laravel application and  is pre-configured to query the GraphQL endpoint of the Arbor site entered in the `ARBOR_URL` variable of your `.env` file.

```php
$query = <<<GQL
query {
    Student(currentlyEnrolled: true) {
        id
        displayName
    }
}
GQL;

$response = ArborGraphQL::query($query);

if ($response->hasErrors()) {
    // handle errors here
} else {
    $data = $response->getData();
}
```

For more information on performing queries, see the documentation for Softonic's [GraphQL Client](https://github.com/softonic/graphql-client).

## Authors

- [@andrew1601](https://www.github.com/andrew1601)


## Acknowledgements

 - [Arbor Education](https://arbor-education.com)
 - [Softonic GraphQL Client](https://github.com/softonic/graphql-client)

## License

[MIT](https://choosealicense.com/licenses/mit/)


