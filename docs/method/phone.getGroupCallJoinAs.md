# phone.getGroupCallJoinAs

**Description** : *Get a list of peers that can be used to join a group call, presenting yourself as a specific user/channel*

**Layer** : 211

```tl
phone.getGroupCallJoinAs#ef7c213a peer:InputPeer = phone.JoinAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The dialog whose group call or livestream we're trying to join |

---

## Result

[phone.JoinAsPeers](type/phone.JoinAsPeers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$phoneJoinAsPeers = $client->phone->getGroupCallJoinAs(
	peer : $client->inputPeerEmpty(),
);
```