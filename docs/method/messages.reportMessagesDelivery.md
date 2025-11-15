# messages.reportMessagesDelivery

**Description** : *Used for Telegram Gateway verification messages &raquo;: indicate to the server that one or more messages were received by the client, if requested by the message\.report\_delivery\_until\_date flag or the equivalent flag in push notifications*

**Layer** : 216

```tl
messages.reportMessagesDelivery#5a6d7395 flags:# push:flags.0?true peer:InputPeer id:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **push** | [`flags.0?true`](type/true) | Must be set if the messages were received from a push notification |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer where the messages were received |
| <mark>id</mark> | [`Vector<int>`](type/int) | The IDs of the received messages |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->reportMessagesDelivery(
	push : true,
	peer : $client->inputPeerEmpty(),
	id : array(92),
);
```