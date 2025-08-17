# account.saveRingtone

**Description** : *Save or remove saved notification sound*

**Layer** : 211

```tl
account.saveRingtone#3dea5b03 id:InputDocument unsave:Bool = account.SavedRingtone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`InputDocument`](type/InputDocument) | Notification sound uploaded using account.uploadRingtone |
| <mark>unsave</mark> | [`Bool`](type/Bool) | Whether to add or delete the notification sound |

---

## Result

[account.SavedRingtone](type/account.SavedRingtone)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RINGTONE_INVALID** | `400` | The specified ringtone is invalid |

---

## Example

```php
$accountSavedRingtone = $client->account->saveRingtone(
	id : $client->inputDocumentEmpty(),
	unsave : $client->boolFalse(),
);
```