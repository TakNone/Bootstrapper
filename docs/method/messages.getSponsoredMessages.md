# messages.getSponsoredMessages

**Description** : *Get a list of sponsored messages for a peer, see here &raquo; for more info*

**Layer** : 216

```tl
messages.getSponsoredMessages#3d6ce850 flags:# peer:InputPeer msg_id:flags.0?int = messages.SponsoredMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The currently open channel/bot |
| **msg_id** | [`flags.0?int`](type/int) | NOTHING |

---

## Result

[messages.SponsoredMessages](type/messages.SponsoredMessages)

---

## Example

```php
$messagesSponsoredMessages = $client->messages->getSponsoredMessages(
	peer : $client->inputPeerEmpty(),
	msg_id : 44,
);
```