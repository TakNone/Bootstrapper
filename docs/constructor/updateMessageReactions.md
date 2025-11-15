# updateMessageReactions

**Description** : *New message reactions &raquo; are available*

**Layer** : 218

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
| **saved_peer_id** | [`flags.1?Peer`](type/Peer) | If set, the reactions are in the specified monoforum topic » |
| <mark>reactions</mark> | [`MessageReactions`](type/MessageReactions) | Reactions |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateMessageReactions(
	peer : $client->peerUser(
		user_id : 3759771269850023128,
	),
	msg_id : 57,
	top_msg_id : 68,
	saved_peer_id : $client->peerUser(
		user_id : -5204854679228349601,
	),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 19,
				reaction : $client->reactionEmpty(),
				count : 67,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : 285122927652263220,
				),
				date : 100,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : 2659278585203047090,
				),
				count : 41,
			),
		),
	),
);
```