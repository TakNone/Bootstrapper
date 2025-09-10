# messages.getChats

**Description** : *Returns chat basic info on their IDs*

**Layer** : 214

```tl
messages.getChats#49e9528f id:Vector<long> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<long>`](type/long) | List of chat IDs |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesChats = $client->messages->getChats(
	id : array(7623218611201869218),
);
```