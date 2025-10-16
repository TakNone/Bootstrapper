# messageActionSuggestBirthday

**Layer** : 216

```tl
messageActionSuggestBirthday#2c8f2a25 birthday:Birthday = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>birthday</mark> | [`Birthday`](type/Birthday) | NOTHING |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestBirthday(
	birthday : $client->birthday(
		day : 95,
		month : 92,
		year : 16,
	),
);
```