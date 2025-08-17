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
	id : 35,
	from_id : $client->peerUser(
		user_id : 1428145868855849277,
	),
	peer_id : $client->peerUser(
		user_id : 943629978337401077,
	),
	saved_peer_id : $client->peerUser(
		user_id : 5812288320118946704,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 86,
		reply_to_peer_id : $client->peerUser(
			user_id : -381917374841919981,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'RfQNWUJnbI6z4cuK',
			date : 1,
			channel_post : 79,
			post_author : 'xB8oFJ2YZfNC3Igv',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 95,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'e9Rz2LmJD4Cqgfn8',
			saved_date : 65,
			psa_type : 'AyCv97UDQ1N3hIJ6',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 98,
		quote_text : 'FMVapjCUAtY5Q6mZ',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 76,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 8,
				length : 62,
			),
			$client->messageEntityHashtag(
				offset : 61,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 63,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 86,
				length : 48,
			),
			$client->messageEntityEmail(
				offset : 21,
				length : 46,
			),
			$client->messageEntityBold(
				offset : 25,
				length : 40,
			),
			$client->messageEntityItalic(
				offset : 90,
				length : 45,
			),
			$client->messageEntityCode(
				offset : 73,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 45,
				length : 76,
				language : 'agpLiGltNIAnS76x',
			),
			$client->messageEntityTextUrl(
				offset : 44,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 9,
				length : 41,
				user_id : -8635844568919759310,
			),
			$client->inputMessageEntityMentionName(
				offset : 30,
				length : 65,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 88,
				length : 49,
			),
			$client->messageEntityCashtag(
				offset : 46,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 25,
				length : 91,
			),
			$client->messageEntityStrike(
				offset : 89,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 90,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 61,
				length : 31,
				document_id : 8393242178445770879,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 41,
				length : 37,
			),
		),
		quote_offset : 98,
		todo_item_id : 80,
	),
	date : 42,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 59,
				reaction : $client->reactionEmpty(...),
				count : 54,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 93,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 65,
			),
		),
	),
	ttl_period : 21,
);
```