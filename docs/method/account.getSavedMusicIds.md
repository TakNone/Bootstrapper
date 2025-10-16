# account.getSavedMusicIds

**Layer** : 216

```tl
account.getSavedMusicIds#e09d5faf hash:long = account.SavedMusicIds;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[account.SavedMusicIds](type/account.SavedMusicIds)

---

## Example

```php
$accountSavedMusicIds = $client->account->getSavedMusicIds(
	hash : 0,
);
```