# messages.discardEncryption

**Description** : *Cancels a request for creation and/or delete info on secret chat*

**Layer** : 218

```tl
messages.discardEncryption#f393aea0 flags:# delete_history:flags.0?true chat_id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **delete_history** | [`flags.0?true`](type/true) | Whether to delete the entire chat history for the other user as well |
| <mark>chat_id</mark> | [`int`](type/int) | Secret chat ID |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_EMPTY** | `400` | The provided chat ID is empty |
| **ENCRYPTION_ALREADY_ACCEPTED** | `400` | Secret chat already accepted |
| **ENCRYPTION_ALREADY_DECLINED** | `400` | The secret chat was already declined |
| **ENCRYPTION_ID_INVALID** | `400` | The provided secret chat ID is invalid |

---

## Example

```php
$bool = $client->messages->discardEncryption(
	delete_history : true,
	chat_id : 70,
);
```