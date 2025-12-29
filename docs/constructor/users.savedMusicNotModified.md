# users.savedMusicNotModified

**Description** : *This subset of the songs currently pinned on a user&#039;s profile hasn&#039;t changed, see here &raquo; for more info*

**Layer** : 218

```tl
users.savedMusicNotModified#e3878aa4 count:int = users.SavedMusic;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>count</mark> | [`int`](type/int) | Total number of songs on the user's profile |

---

## Type

[users.SavedMusic](type/users.SavedMusic)

---

## Example

```php
$usersSavedMusic = $client->users->savedMusicNotModified(
	count : 24,
);
```