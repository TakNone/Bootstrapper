# account.savedMusicIdsNotModified

**Description** : *The list of IDs of songs \(document\.ids\) currently pinned on our profile hasn&#039;t changed*

**Layer** : 218

```tl
account.savedMusicIdsNotModified#4fc81d6e = account.SavedMusicIds;
```

---

## Type

[account.SavedMusicIds](type/account.SavedMusicIds)

---

## Example

```php
$accountSavedMusicIds = $client->account->savedMusicIdsNotModified();
```