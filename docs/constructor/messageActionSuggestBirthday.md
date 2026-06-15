# messageActionSuggestBirthday

**Layer** : 227

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
		day : 97,
		month : 28,
		year : 19,
	),
);
```