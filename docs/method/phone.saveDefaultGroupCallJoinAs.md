# phone.saveDefaultGroupCallJoinAs

**Description** : *Set the default peer used to join a video chat/livestream &raquo; associated with a specific dialog*

**Layer** : 229

```tl
phone.saveDefaultGroupCallJoinAs#575e1f8c peer:InputPeer join_as:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Basic group, supergroup or channel whose video chat/livestream default should be changed |
| <mark>join_as</mark> | [`InputPeer`](type/InputPeer) | Eligible peer to use by default when joining the dialog's video chats/livestreams, selected from phone.getGroupCallJoinAs |

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	join_as : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```