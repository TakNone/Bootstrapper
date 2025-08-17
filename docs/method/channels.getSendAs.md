# channels.getSendAs

**Description** : *Obtains a list of peers that can be used to send messages in a specific group*

**Layer** : 211

```tl
channels.getSendAs#e785a43f flags:# for_paid_reactions:flags.0?true peer:InputPeer = channels.SendAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **for_paid_reactions** | [`flags.0?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The group where we intend to send messages |

---

## Result

[channels.SendAsPeers](type/channels.SendAsPeers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$channelsSendAsPeers = $client->channels->getSendAs(
	for_paid_reactions : true,
	peer : $client->inputPeerEmpty(),
);
```