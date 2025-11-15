# channels.getLeftChannels

**Description** : *Get a list of channels/supergroups we left, requires a takeout session, see here &raquo; for more info*

**Layer** : 216

```tl
channels.getLeftChannels#8341ecc0 offset:int = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset for pagination |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **TAKEOUT_INVALID** | `400` | The specified takeout ID is invalid |
| **TAKEOUT_REQUIRED** | `403` | A takeout session needs to be initialized first, see here » for more info |

---

## Example

```php
$messagesChats = $client->channels->getLeftChannels(
	offset : 0,
);
```