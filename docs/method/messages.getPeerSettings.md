# messages.getPeerSettings

**Description** : *Get peer settings*

**Layer** : 218

```tl
messages.getPeerSettings#efd9a6a2 peer:InputPeer = messages.PeerSettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The peer |

---

## Result

[messages.PeerSettings](type/messages.PeerSettings)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_MONOFORUM_UNSUPPORTED** | `400` | Monoforums do not support this feature |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesPeerSettings = $client->messages->getPeerSettings(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```