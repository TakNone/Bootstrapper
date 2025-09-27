# messageEmpty

**Description** : *Empty constructor, non\-existent message*

**Layer** : 214

```tl
messageEmpty#90a6ca84 flags:# id:int peer_id:flags.0?Peer = Message;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`int`](type/int) | Message identifier |
| **peer_id** | [`flags.0?Peer`](type/Peer) | Peer ID, the chat where this message was sent |

---

## Type

[Message](type/Message)

---

## Example

```php
$message = $client->messageEmpty(
	id : 42,
	peer_id : $client->peerUser(
		user_id : -4552790028474325318,
	),
);
```