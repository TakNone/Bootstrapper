# channels.getSendAs

**Description** : *Obtains a list of peers that can be displayed as the sender in a specific context\. With for\_live\_stories, returns peers that may author live story in\-call messages &raquo;*

**Layer** : 233

```tl
channels.getSendAs#e785a43f flags:# for_paid_reactions:flags.0?true for_live_stories:flags.1?true peer:InputPeer = channels.SendAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_paid_reactions** | [`flags.0?true`](type/true) | If set, fetches the list of peers that can be used to send paid reactions to messages of a specific peer |
| **for_live_stories** | [`flags.1?true`](type/true) | Fetch the peers that may be passed to phone.sendGroupCallMessage.send_as to comment or react in a live story » |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The target peer; when for_live_stories is set, the peer that owns the live story |

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
	for_live_stories : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```