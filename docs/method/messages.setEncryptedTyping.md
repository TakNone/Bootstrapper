# messages.setEncryptedTyping

**Description** : *Send typing event by the current user to a secret chat*

**Layer** : 218

```tl
messages.setEncryptedTyping#791451ed peer:InputEncryptedChat typing:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputEncryptedChat`](type/InputEncryptedChat) | Secret chat ID |
| <mark>typing</mark> | [`Bool`](type/Bool) | Typing.Possible values:(boolTrue), if the user started typing and more than 5 seconds have passed since the last request(boolFalse), if the user stopped typing |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |

---

## Example

```php
$bool = $client->messages->setEncryptedTyping(
	peer : $client->inputEncryptedChat(
		chat_id : 0,
		access_hash : -9012647901307950642,
	),
	typing : true,
);
```