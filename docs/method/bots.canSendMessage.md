# bots.canSendMessage

**Description** : *Check whether the specified bot can send us messages*

**Layer** : 211

```tl
bots.canSendMessage#1359f4e6 bot:InputUser = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | The bot |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$bool = $client->bots->canSendMessage(
	bot : $client->inputUserEmpty(),
);
```