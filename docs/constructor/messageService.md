# messageService

**Description** : *Indicates a service message*

**Layer** : 229

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
	id : 48,
	from_id : $client->peerUser(
		user_id : -7942830450673001324,
	),
	peer_id : $client->peerUser(
		user_id : 5217173246611682619,
	),
	saved_peer_id : $client->peerUser(
		user_id : 6551521616192744659,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 100,
		reply_to_peer_id : $client->peerUser(
			user_id : -5200852419759170450,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -4396279538338907838,
			),
			from_name : 'WSPiHY7DqUbyl6Jv',
			date : 24,
			channel_post : 1,
			post_author : 'kvhQ1EueJAVH4Lxa',
			saved_from_peer : $client->peerUser(
				user_id : -1680476288774167189,
			),
			saved_from_msg_id : 83,
			saved_from_id : $client->peerUser(
				user_id : -1817820762190920047,
			),
			saved_from_name : 'S4zBP03Wu1tYHlsy',
			saved_date : 99,
			psa_type : 'mBry8thCbsoK3x5W',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 31,
		quote_text : 'tv7GEgqFDBQhey40',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 94,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 40,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 9,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 89,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 95,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 67,
				language : 'Z8vrQpuHGOMbLeTJ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 32,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : 2120385257854786825,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 14,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 36,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 20,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 65,
				document_id : -6530759645910867557,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 29,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 62,
				date : 72,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 82,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 100,
				old_text : 'N24KGn3xcBZAMf87',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 2,
			),
		),
		quote_offset : 35,
		todo_item_id : 64,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	date : 73,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 0,
				reaction : $client->reactionEmpty(),
				count : 79,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : -6798899815696454904,
				),
				date : 29,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : 1523606771459794503,
				),
				count : 76,
			),
		),
	),
	ttl_period : 61,
);
```