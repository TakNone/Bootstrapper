# messagePeerReaction

**Description** : *How a certain peer reacted to the message*

**Layer** : 216

```tl
messagePeerReaction#8c79b63c flags:# big:flags.0?true unread:flags.1?true my:flags.2?true peer_id:Peer date:int reaction:Reaction = MessagePeerReaction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **big** | [`flags.0?true`](type/true) | Whether the specified message reaction » should elicit a bigger and longer reaction |
| **unread** | [`flags.1?true`](type/true) | Whether the reaction wasn't yet marked as read by the current user |
| **my** | [`flags.2?true`](type/true) | Starting from layer 159, messages.sendReaction will send reactions from the peer (user or channel) specified using messages.saveDefaultSendAs. If set, this flag indicates that this reaction was sent by us, even if the peer doesn't point to the current account |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Peer that reacted to the message |
| <mark>date</mark> | [`int`](type/int) | When was this reaction added |
| <mark>reaction</mark> | [`Reaction`](type/Reaction) | Reaction emoji |

---

## Type

[MessagePeerReaction](type/MessagePeerReaction)

---

## Example

```php
$messagePeerReaction = $client->messagePeerReaction(
	big : true,
	unread : true,
	my : true,
	peer_id : $client->peerUser(
		user_id : 1063161851872657969,
	),
	date : 62,
	reaction : $client->reactionEmpty(),
);
```