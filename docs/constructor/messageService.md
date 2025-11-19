# messageService

**Description** : *Indicates a service message*

**Layer** : 218

```tl
messageService#7a800e0a flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true reactions_are_possible:flags.9?true silent:flags.13?true post:flags.14?true legacy:flags.19?true id:int from_id:flags.8?Peer peer_id:Peer saved_peer_id:flags.28?Peer reply_to:flags.3?MessageReplyHeader date:int action:MessageAction reactions:flags.20?MessageReactions ttl_period:flags.25?int = Message;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 94,
	from_id : $client->peerUser(
		user_id : -3160483760486459781,
	),
	peer_id : $client->peerUser(
		user_id : 6739049407984535938,
	),
	saved_peer_id : $client->peerUser(
		user_id : -2332591377832490092,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 93,
		reply_to_peer_id : $client->peerUser(
			user_id : -6632196326069138096,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -3693869797392393545,
			),
			from_name : 'jQdkVNDyYU1blzh8',
			date : 64,
			channel_post : 1,
			post_author : 'hPYv0OfQo64eCJtl',
			saved_from_peer : $client->peerUser(
				user_id : 7634193876313063952,
			),
			saved_from_msg_id : 31,
			saved_from_id : $client->peerUser(
				user_id : 5518765919078516475,
			),
			saved_from_name : 'gxcHyzCrdWNmP37X',
			saved_date : 15,
			psa_type : '6XNWvHtnA2EcyKIO',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 4,
		quote_text : 'mKMYvQ43rnDLIZc9',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 90,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 90,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 98,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 60,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 91,
				language : '6BK0mn2PgwGZNjJU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 47,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : -7614239423620930317,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 53,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 98,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 11,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 46,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 0,
				document_id : -5900736280891671805,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 82,
			),
		),
		quote_offset : 32,
		todo_item_id : 53,
	),
	date : 22,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 56,
				reaction : $client->reactionEmpty(),
				count : 78,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : -2509309747329024492,
				),
				date : 54,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : -5080922867105836977,
				),
				count : 96,
			),
		),
	),
	ttl_period : 98,
);
```