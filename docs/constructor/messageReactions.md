# messageReactions

**Description** : *Message reactions &raquo;*

**Layer** : 218

```tl
messageReactions#a339f0b flags:# min:flags.0?true can_see_list:flags.2?true reactions_as_tags:flags.3?true results:Vector<ReactionCount> recent_reactions:flags.1?Vector<MessagePeerReaction> top_reactors:flags.4?Vector<MessageReactor> = MessageReactions;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **min** | [`flags.0?true`](type/true) | Similar to min objects, used for message reaction » constructors that are the same for all users so they don't have the reactions sent by the current user (you can use messages.getMessagesReactions to get the full reaction info) |
| **can_see_list** | [`flags.2?true`](type/true) | Whether messages.getMessageReactionsList can be used to see how each specific peer reacted to the message |
| **reactions_as_tags** | [`flags.3?true`](type/true) | If set or if there are no reactions, all present and future reactions should be treated as message tags, see here » for more info |
| <mark>results</mark> | [`Vector<ReactionCount>`](type/ReactionCount) | Reactions |
| **recent_reactions** | [`flags.1?Vector<MessagePeerReaction>`](type/MessagePeerReaction) | List of recent peers and their reactions |
| **top_reactors** | [`flags.4?Vector<MessageReactor>`](type/MessageReactor) | Paid Telegram Star reactions leaderboard » for this message |

---

## Type

[MessageReactions](type/MessageReactions)

---

## Example

```php
$messageReactions = $client->messageReactions(
	min : true,
	can_see_list : true,
	reactions_as_tags : true,
	results : array(
		$client->reactionCount(
			chosen_order : 53,
			reaction : $client->reactionEmpty(),
			count : 80,
		),
	),
	recent_reactions : array(
		$client->messagePeerReaction(
			big : true,
			unread : true,
			my : true,
			peer_id : $client->peerUser(
				user_id : 4247885230874781600,
			),
			date : 37,
			reaction : $client->reactionEmpty(),
		),
	),
	top_reactors : array(
		$client->messageReactor(
			top : true,
			my : true,
			anonymous : true,
			peer_id : $client->peerUser(
				user_id : -4380342276302735225,
			),
			count : 6,
		),
	),
);
```