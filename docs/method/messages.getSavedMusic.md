# messages.getSavedMusic

**Layer** : 214

```tl
messages.getSavedMusic#788d7fe3 id:InputUser offset:int limit:int hash:long = SavedMusic;
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

[SavedMusic](type/SavedMusic)

---

## Example

```php
$savedMusic = $client->messages->getSavedMusic(
	id : $client->inputUserEmpty(),
	offset : 8,
	limit : 57,
	hash : 6819578803374313076,
);
```