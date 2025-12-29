# messages.getSponsoredMessages

**Description** : *Get a list of sponsored messages for a peer, see here &raquo; for more info*

**Layer** : 218

```tl
messages.getSponsoredMessages#3d6ce850 flags:# peer:InputPeer msg_id:flags.0?int = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The currently open channel/bot |
| **msg_id** | [`flags.0?int`](type/int) | Must be set when fetching sponsored messages to show on channel videos » |

---

## Result

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |

---

## Example

```php
$messagesSponsoredMessages = $client->messages->getSponsoredMessages(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 20,
);
```