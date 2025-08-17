# messages.getOnlines

**Description** : *Get count of online users in a chat*

**Layer** : 211

```tl
messages.getOnlines#6e2be050 peer:InputPeer = ChatOnlines;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat |

---

## Result

[ChatOnlines](type/ChatOnlines)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$chatOnlines = $client->messages->getOnlines(
	peer : $client->inputPeerEmpty(),
);
```