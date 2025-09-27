# account.savedMusicIds

**Layer** : 214

```tl
account.savedMusicIds#998d6636 ids:Vector<long> = account.SavedMusicIds;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>ids</mark> | [`Vector<long>`](type/long) | NOTHING |

---

## Type

[account.SavedMusicIds](type/account.SavedMusicIds)

---

## Example

```php
$accountSavedMusicIds = $client->account->savedMusicIds(
	ids : array(988866738574380405),
);
```