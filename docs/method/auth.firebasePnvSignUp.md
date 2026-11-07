# auth.firebasePnvSignUp

**Layer** : 229

```tl
auth.firebasePnvSignUp#783f6b56 flags:# no_joined_notifications:flags.0?true first_name:string last_name:string = auth.Authorization;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **no_joined_notifications** | [`flags.0?true`](type/true) | NOTHING |
| <mark>first_name</mark> | [`string`](type/string) | NOTHING |
| <mark>last_name</mark> | [`string`](type/string) | NOTHING |

---

## Result

[auth.Authorization](type/auth.Authorization)

---

## Example

```php
$authAuthorization = $client->auth->firebasePnvSignUp(
	no_joined_notifications : true,
	first_name : 'Tak',
	last_name : 'None',
);
```