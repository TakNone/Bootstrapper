# phone.saveDefaultGroupCallJoinAs

**Description** : *Set the default peer that will be used to join a group call in a specific dialog*

**Layer** : 211

```tl
phone.saveDefaultGroupCallJoinAs#575e1f8c peer:InputPeer join_as:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The dialog |
| <mark>join_as</mark> | [`InputPeer`](type/InputPeer) | The default peer that will be used to join group calls in this dialog, presenting yourself as a specific user/channel |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **JOIN_AS_PEER_INVALID** | `400` | The specified peer cannot be used to join a group call |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->phone->saveDefaultGroupCallJoinAs(
	peer : $client->inputPeerEmpty(),
	join_as : $client->inputPeerEmpty(),
);
```