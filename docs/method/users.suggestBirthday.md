# users.suggestBirthday

**Layer** : 216

```tl
users.suggestBirthday#fc533372 id:InputUser birthday:Birthday = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->users->suggestBirthday(
	id : $client->inputUserEmpty(),
	birthday : $client->birthday(
		day : 98,
		month : 33,
		year : 53,
	),
);
```