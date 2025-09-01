# messages.getSavedMusicIds

**Layer** : 214

```tl
messages.getSavedMusicIds#e09d5faf hash:long = SavedMusicIds;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[SavedMusicIds](type/SavedMusicIds)

---

## Example

```php
$savedMusicIds = $client->messages->getSavedMusicIds(
	hash : -7349376756775971932,
);
```