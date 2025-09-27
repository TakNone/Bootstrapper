# messages.sendScheduledMessages

**Description** : *Send scheduled messages right away*

**Layer** : 216

```tl
messages.sendScheduledMessages#bd38850a peer:InputPeer id:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer |
| <mark>id</mark> | [`Vector<int>`](type/int) | Scheduled message IDs |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **RANDOM_ID_DUPLICATE** | `500` | You provided a random ID that was already used |

---

## Example

```php
$updates = $client->messages->sendScheduledMessages(
	peer : $client->inputPeerEmpty(),
	id : array(17),
);
```