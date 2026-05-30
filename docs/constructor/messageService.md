# messageService

**Description** : *Indicates a service message*

**Layer** : 225

```tl
messageService#7a800e0a flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true reactions_are_possible:flags.9?true silent:flags.13?true post:flags.14?true legacy:flags.19?true id:int from_id:flags.8?Peer peer_id:Peer saved_peer_id:flags.28?Peer reply_to:flags.3?MessageReplyHeader date:int action:MessageAction reactions:flags.20?MessageReactions ttl_period:flags.25?int = Message;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in the message |
| **media_unread** | [`flags.5?true`](type/true) | Whether the message contains unread media |
| **reactions_are_possible** | [`flags.9?true`](type/true) | Whether you can react to this message » |
| **silent** | [`flags.13?true`](type/true) | Whether the message is silent |
| **post** | [`flags.14?true`](type/true) | Whether it's a channel post |
| **legacy** | [`flags.19?true`](type/true) | This is a legacy message: it has to be refetched with the new layer |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| **from_id** | [`flags.8?Peer`](type/Peer) | ID of the sender of this message |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Sender of service message |
| **saved_peer_id** | [`flags.28?Peer`](type/Peer) | Will only be set for service messages within a monoforum topic »: peer will be equal to the ID of the monoforum and the saved_peer_id flag will be set to the ID of a topic |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply (thread) information |
| <mark>date</mark> | [`int`](type/int) | Message date |
| <mark>action</mark> | [`MessageAction`](type/MessageAction) | Event connected with the service message |
| **reactions** | [`flags.20?MessageReactions`](type/MessageReactions) | Reactions » |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Message](type/Message)

---

## Example

```php
$message = $client->messageService(
	out : true,
	mentioned : true,
	media_unread : true,
	reactions_are_possible : true,
	silent : true,
	post : true,
	legacy : true,
	id : 34,
	from_id : $client->peerUser(
		user_id : -4684351570054249440,
	),
	peer_id : $client->peerUser(
		user_id : 8274110676867056538,
	),
	saved_peer_id : $client->peerUser(
		user_id : 1996136212201640434,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 20,
		reply_to_peer_id : $client->peerUser(
			user_id : 8521569353890100269,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 2304441509224824373,
			),
			from_name : 'Dn9suEG1Uamw5Mjz',
			date : 23,
			channel_post : 48,
			post_author : 'oEHX4DhgAa6sZCe8',
			saved_from_peer : $client->peerUser(
				user_id : 766238193859463175,
			),
			saved_from_msg_id : 67,
			saved_from_id : $client->peerUser(
				user_id : -7917255215196017447,
			),
			saved_from_name : 'jcIWpTLtG3MgYsxN',
			saved_date : 70,
			psa_type : 'mx2GzSsWA7tv9pCc',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 32,
		quote_text : 'RSxH3LKqmTboWdED',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 82,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 91,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 91,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 61,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 48,
				language : 'hmKVaysSP8TOzBQ6',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 5,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 18,
				user_id : 8954054187632562509,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 49,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 23,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 74,
				document_id : -5781470069630553285,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 24,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 19,
				date : 19,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 35,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 41,
				old_text : 'KQp0CZgoqYkAfIEc',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 14,
			),
		),
		quote_offset : 52,
		todo_item_id : 4,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	date : 16,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 45,
				reaction : $client->reactionEmpty(),
				count : 58,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : -2973752914985850949,
				),
				date : 21,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : -8888572082401486822,
				),
				count : 19,
			),
		),
	),
	ttl_period : 99,
);
```