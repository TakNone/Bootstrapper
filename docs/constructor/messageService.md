# messageService

**Description** : *Indicates a service message*

**Layer** : 216

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
	id : 2,
	from_id : $client->peerUser(
		user_id : -3820961440902963437,
	),
	peer_id : $client->peerUser(
		user_id : -4575352135145927987,
	),
	saved_peer_id : $client->peerUser(
		user_id : 8782655387292810905,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 72,
		reply_to_peer_id : $client->peerUser(
			user_id : -1549063242746355772,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'Fwl4VADMhePBiXyb',
			date : 30,
			channel_post : 5,
			post_author : '62T13nlzAoSjUVeR',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 51,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'YCK7Tq41rywDBWXV',
			saved_date : 9,
			psa_type : 'ahHMRO8PkjpzsJuf',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 25,
		quote_text : 'aSECYQwMOcProzDN',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 1,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 26,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 47,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 62,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 87,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : 'sHSY6TCKyrecomZz',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 75,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 24,
				user_id : -3523719022543751187,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 34,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 0,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 54,
				document_id : 6658488836292813166,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 91,
			),
		),
		quote_offset : 56,
		todo_item_id : 100,
	),
	date : 6,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 57,
				reaction : $client->reactionEmpty(...),
				count : 64,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 52,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 52,
			),
		),
	),
	ttl_period : 25,
);
```