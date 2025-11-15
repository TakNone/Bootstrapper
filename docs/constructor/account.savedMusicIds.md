# account.savedMusicIds

**Description** : *List of IDs of songs \(document\.ids\) currently pinned on our profile, see here &raquo; for more info*

**Layer** : 218

```tl
account.savedMusicIds#998d6636 ids:Vector<long> = account.SavedMusicIds;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>ids</mark> | [`Vector<long>`](type/long) | Full list of document.ids |

---

## Type

[account.SavedMusicIds](type/account.SavedMusicIds)

---

## Example

```php
$accountSavedMusicIds = $client->account->savedMusicIds(
	ids : array(-261322293005195962),
);
```