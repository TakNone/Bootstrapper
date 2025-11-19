# messages.readEncryptedHistory

**Description** : *Marks message history within a secret chat as read*

**Layer** : 218

```tl
messages.readEncryptedHistory#7f4b690a peer:InputEncryptedChat max_date:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | Secret chat ID |
| <mark>max_date</mark> | [`int`](type/int) | Maximum date value for received messages in history |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **MAX_DATE_INVALID** | `400` | The specified maximum date is invalid |
| **MSG_WAIT_FAILED** | `400` | A waiting call returned an error |

---

## Example

```php
$bool = $client->messages->readEncryptedHistory(
	peer : $client->inputEncryptedChat(
		chat_id : 62,
		access_hash : 7817635656825381349,
	),
	max_date : 8,
);
```