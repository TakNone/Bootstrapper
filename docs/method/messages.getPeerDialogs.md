# messages.getPeerDialogs

**Description** : *Get dialog info of specified peers*

**Layer** : 216

```tl
messages.getPeerDialogs#e470bcfd peers:Vector<InputDialogPeer> = messages.PeerDialogs;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<InputDialogPeer>`](type/InputDialogPeer) | Peers |

---

## Result

[messages.PeerDialogs](type/messages.PeerDialogs)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **FROZEN_PARTICIPANT_MISSING** | `400` | The current account is frozen, and cannot access the specified peer |
| **INPUT_PEERS_EMPTY** | `400` | The specified peer array is empty |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesPeerDialogs = $client->messages->getPeerDialogs(
	peers : array(
		$client->inputDialogPeer(
			peer : $client->inputPeerEmpty(),
		),
		$client->inputDialogPeerFolder(
			folder_id : 8,
		),
	),
);
```