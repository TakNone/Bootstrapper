# bots.allowSendMessage

**Description** : *Allow the specified bot to send us messages*

**Layer** : 211

```tl
bots.allowSendMessage#f132e3ef bot:InputUser = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$updates = $client->bots->allowSendMessage(
	bot : $client->inputUserEmpty(),
);
```