# users.suggestBirthday

**Layer** : 222

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
	id : $client->get_input_user(user : '@TakNone'),
	birthday : $client->birthday(
		day : 10,
		month : 86,
		year : 45,
	),
);
```