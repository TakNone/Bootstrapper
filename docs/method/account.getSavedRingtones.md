# account.getSavedRingtones

**Description** : *Fetch saved notification sounds*

**Layer** : 218

```tl
account.getSavedRingtones#e1902288 hash:long = account.SavedRingtones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[account.SavedRingtones](type/account.SavedRingtones)

---

## Example

```php
$accountSavedRingtones = $client->account->getSavedRingtones(
	hash : 0,
);
```