# messageService

**Description** : *Indicates a service message*

**Layer** : 211

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
| **reactions_are_possible** | [`flags.9?true`](type/true) | NOTHING |
| **silent** | [`flags.13?true`](type/true) | Whether the message is silent |
| **post** | [`flags.14?true`](type/true) | Whether it's a channel post |
| **legacy** | [`flags.19?true`](type/true) | This is a legacy message: it has to be refetched with the new layer |
| <mark>id</mark> | [`int`](type/int) | Message ID |
| **from_id** | [`flags.8?Peer`](type/Peer) | ID of the sender of this message |
| <mark>peer_id</mark> | [`Peer`](type/Peer) | Sender of service message |
| **saved_peer_id** | [`flags.28?Peer`](type/Peer) | NOTHING |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply (thread) information |
| <mark>date</mark> | [`int`](type/int) | Message date |
| <mark>action</mark> | [`MessageAction`](type/MessageAction) | Event connected with the service message |
| **reactions** | [`flags.20?MessageReactions`](type/MessageReactions) | NOTHING |
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
	id : 65,
	from_id : $client->peerUser(
		user_id : 67473975954329146,
	),
	peer_id : $client->peerUser(
		user_id : -883151249045879928,
	),
	saved_peer_id : $client->peerUser(
		user_id : 6906308203841323667,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 24,
		reply_to_peer_id : $client->peerUser(
			user_id : 271231535105936755,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'FgSbv4A7qMQI2VBe',
			date : 80,
			channel_post : 57,
			post_author : 'G9BnqCdVW5ul04MQ',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 1,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'RGO5WMlAoEZumUs9',
			saved_date : 40,
			psa_type : 'iWTApKqLZx1y2C3g',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 60,
		quote_text : 'ouHDR3OIzkw2jTrp',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 9,
				length : 28,
			),
			$client->messageEntityMention(
				offset : 96,
				length : 12,
			),
			$client->messageEntityHashtag(
				offset : 6,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 87,
				length : 73,
			),
			$client->messageEntityUrl(
				offset : 79,
				length : 54,
			),
			$client->messageEntityEmail(
				offset : 75,
				length : 50,
			),
			$client->messageEntityBold(
				offset : 41,
				length : 45,
			),
			$client->messageEntityItalic(
				offset : 95,
				length : 40,
			),
			$client->messageEntityCode(
				offset : 92,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 93,
				length : 31,
				language : 'ps4kgToQBAEhWd8c',
			),
			$client->messageEntityTextUrl(
				offset : 39,
				length : 18,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 38,
				length : 57,
				user_id : 5229118312271466686,
			),
			$client->inputMessageEntityMentionName(
				offset : 6,
				length : 11,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 15,
				length : 100,
			),
			$client->messageEntityCashtag(
				offset : 77,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 27,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 51,
				length : 26,
			),
			$client->messageEntityBankCard(
				offset : 70,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 7,
				length : 19,
			),
			$client->messageEntityCustomEmoji(
				offset : 77,
				length : 19,
				document_id : 2254758434287605905,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 79,
				length : 18,
			),
		),
		quote_offset : 10,
		todo_item_id : 70,
	),
	date : 27,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 6,
				reaction : $client->reactionEmpty(...),
				count : 58,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 11,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 81,
			),
		),
	),
	ttl_period : 30,
);
```