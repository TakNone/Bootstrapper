# help.support

**Description** : *Info on support user*

**Layer** : 216

```tl
help.support#17c6b5f6 phone_number:string user:User = help.Support;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phone_number</mark> | [`string`](type/string) | Phone number |
| <mark>user</mark> | [`User`](type/User) | User |

---

## Type

[help.Support](type/help.Support)

---

## Example

```php
$helpSupport = $client->help->support(
	phone_number : '+1234567890',
	user : $client->userEmpty(
		id : 5641783791315586307,
	),
);
```