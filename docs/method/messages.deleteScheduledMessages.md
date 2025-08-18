# messages.deleteScheduledMessages

**Description** : *Delete scheduled messages*

**Layer** : 211

```tl
messages.deleteScheduledMessages#59ae2b16 peer:InputPeer id:Vector<int> = Updates;
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
| **MESSAGE_DELETE_FORBIDDEN** | `403` | You can't delete one of the messages you tried to delete, most likely because it is a service message |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->deleteScheduledMessages(
	peer : $client->inputPeerEmpty(),
	id : array(54),
);
```