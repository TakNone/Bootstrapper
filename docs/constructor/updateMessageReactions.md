# updateMessageReactions

**Description** : *New message reactions &raquo; are available*

**Layer** : 222

```tl
updateMessageReactions#1e297bfa flags:# peer:Peer msg_id:int top_msg_id:flags.0?int saved_peer_id:flags.1?Peer reactions:MessageReactions = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		user_id : 1583071320381113637,
	),
	msg_id : 34,
	top_msg_id : 86,
	saved_peer_id : $client->peerUser(
		user_id : -7776363657912131436,
	),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 93,
				reaction : $client->reactionEmpty(),
				count : 89,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : 6411481299160291810,
				),
				date : 34,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : 2184973837298888628,
				),
				count : 28,
			),
		),
	),
);
```