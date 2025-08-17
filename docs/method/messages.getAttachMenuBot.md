# messages.getAttachMenuBot

**Description** : *Returns attachment menu entry for a bot mini app that can be launched from the attachment menu »*

**Layer** : 211

```tl
messages.getAttachMenuBot#77216192 bot:InputUser = AttachMenuBotsBot;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>bot</mark> | [`InputUser`](type/InputUser) | Bot ID |

---

## Result

[AttachMenuBotsBot](type/AttachMenuBotsBot)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BOT_INVALID** | `400` | This is not a valid bot |

---

## Example

```php
$attachMenuBotsBot = $client->messages->getAttachMenuBot(
	bot : $client->inputUserEmpty(),
);
```