# messages.getFactCheck

**Description** : *Fetch one or more factchecks, see here &raquo; for the full flow*

**Layer** : 214

```tl
messages.getFactCheck#b9cdc5ee peer:InputPeer msg_id:Vector<int> = Vector<FactCheck>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the messages were sent |
| <mark>msg_id</mark> | [`Vector<int>`](type/int) | Messages that have associated factCheck constructors with the need_check flag set |

---

## Result

[Vector<FactCheck>](type/FactCheck)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$factCheck = $client->messages->getFactCheck(
	peer : $client->inputPeerEmpty(),
	msg_id : array(92),
);
```