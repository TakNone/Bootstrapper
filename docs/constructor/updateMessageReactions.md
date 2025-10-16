# updateMessageReactions

**Description** : *New message reactions &raquo; are available*

**Layer** : 216

```tl
updateMessageReactions#1e297bfa flags:# peer:Peer msg_id:int top_msg_id:flags.0?int saved_peer_id:flags.1?Peer reactions:MessageReactions = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>peer</mark> | [`Peer`](type/Peer) | Peer |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| **top_msg_id** | [`flags.0?int`](type/int) | Forum topic ID |
| **saved_peer_id** | [`flags.1?Peer`](type/Peer) | NOTHING |
| <mark>reactions</mark> | [`MessageReactions`](type/MessageReactions) | Reactions |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessageReactions(
	peer : $client->peerUser(
		user_id : 8464933232352491156,
	),
	msg_id : 34,
	top_msg_id : 63,
	saved_peer_id : $client->peerUser(
		user_id : -1935739494977374120,
	),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 3,
				reaction : $client->reactionEmpty(...),
				count : 99,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 38,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 76,
			),
		),
	),
);
```