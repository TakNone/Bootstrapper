# messageService

**Description** : *Indicates a service message*

**Layer** : 227

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
	id : 45,
	from_id : $client->peerUser(
		user_id : -770084422233790054,
	),
	peer_id : $client->peerUser(
		user_id : -6257957480936145668,
	),
	saved_peer_id : $client->peerUser(
		user_id : -4153510861979369658,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 52,
		reply_to_peer_id : $client->peerUser(
			user_id : 5296186774224833566,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 8319416012421912512,
			),
			from_name : 'CGHnel09RrNFL6cU',
			date : 75,
			channel_post : 59,
			post_author : '6n9mWICoKHbzJ30G',
			saved_from_peer : $client->peerUser(
				user_id : -1532183386541760506,
			),
			saved_from_msg_id : 38,
			saved_from_id : $client->peerUser(
				user_id : 716966388761992492,
			),
			saved_from_name : 'fNpSRoGmvQdwJkXU',
			saved_date : 45,
			psa_type : 'Qdb38AREsDIzXflT',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 55,
		quote_text : '6WCRDjpYS8FXnB5O',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 50,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 35,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 36,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 21,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 96,
				language : 'orp8d0xWRXeM19KB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 87,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : -5318318151052280360,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 82,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 21,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 40,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 86,
				document_id : -4883543233749174071,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 97,
				date : 7,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 47,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 63,
				old_text : 'PHAm68IUCf39b4Fp',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 8,
			),
		),
		quote_offset : 94,
		todo_item_id : 83,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	date : 13,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 86,
				reaction : $client->reactionEmpty(),
				count : 0,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(
					user_id : 1904614072981264479,
				),
				date : 74,
				reaction : $client->reactionEmpty(),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(
					user_id : -5443005979451853153,
				),
				count : 84,
			),
		),
	),
	ttl_period : 77,
);
```