# account.getSavedMusicIds

**Description** : *Fetch the full list of only the IDs of songs currently added to the profile, see here &raquo; for more info*

**Layer** : 225

```tl
account.getSavedMusicIds#e09d5faf hash:long = account.SavedMusicIds;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash generated » from the previously returned list of IDs |

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