# users.savedMusicNotModified

**Layer** : 216

```tl
users.savedMusicNotModified#e3878aa4 count:int = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | NOTHING |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusicNotModified(
	count : 94,
);
```