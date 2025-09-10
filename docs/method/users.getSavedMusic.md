# users.getSavedMusic

**Layer** : 214

```tl
users.getSavedMusic#788d7fe3 id:InputUser offset:int limit:int hash:long = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>offset</mark> | [`int`](type/int) | NOTHING |
| <mark>limit</mark> | [`int`](type/int) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->getSavedMusic(
	id : $client->inputUserEmpty(),
	offset : 0,
	limit : 93,
	hash : 0,
);
```