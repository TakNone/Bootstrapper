# messages.saveDefaultSendAs

**Description** : *Change the default peer that should be used when sending messages, reactions, poll votes to a specific group*

**Layer** : 211

```tl
messages.saveDefaultSendAs#ccfddf96 peer:InputPeer send_as:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Group |
| <mark>send_as</mark> | [`InputPeer`](type/InputPeer) | The default peer that should be used when sending messages to the group |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **SEND_AS_PEER_INVALID** | `400` | You can't send messages as the specified peer |

---

## Example

```php
$bool = $client->messages->saveDefaultSendAs(
	peer : $client->inputPeerEmpty(),
	send_as : $client->inputPeerEmpty(),
);
```