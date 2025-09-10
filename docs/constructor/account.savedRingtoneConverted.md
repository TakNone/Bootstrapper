# account.savedRingtoneConverted

**Description** : *The notification sound was not in MP3 format and was successfully converted and saved, use the returned Document to refer to the notification sound from now on*

**Layer** : 214

```tl
account.savedRingtoneConverted#1f307eb7 document:Document = account.SavedRingtone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>document</mark> | [`Document`](type/Document) | The converted notification sound |

---

## Type

[account.SavedRingtone](type/account.SavedRingtone)

---

## Example

```php
$accountSavedRingtone = $client->account->savedRingtoneConverted(
	document : $client->documentEmpty(
		id : 1723852274554069076,
	),
);
```