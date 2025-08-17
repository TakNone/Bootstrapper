# account.getNotifySettings

**Description** : *Gets current notification settings for a given user/group, from all users/all groups*

**Layer** : 211

```tl
account.getNotifySettings#12b3ad31 peer:InputNotifyPeer = PeerNotifySettings;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputNotifyPeer`](type/InputNotifyPeer) | Notification source |

---

## Result

[PeerNotifySettings](type/PeerNotifySettings)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$peerNotifySettings = $client->account->getNotifySettings(
	peer : $client->inputNotifyPeer(
		peer : $client->inputPeerEmpty(),
	),
);
```