# messageService

**Description** : *Indicates a service message*

**Layer** : 214

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
	id : 79,
	from_id : $client->peerUser(
		user_id : 8384608488511653836,
	),
	peer_id : $client->peerUser(
		user_id : 7778151944937700159,
	),
	saved_peer_id : $client->peerUser(
		user_id : 6621937208122432516,
	),
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 22,
		reply_to_peer_id : $client->peerUser(
			user_id : -4289273851768905000,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'WVi3RIYjQ76bPeMK',
			date : 51,
			channel_post : 62,
			post_author : 'KDPtTjWEJmUAVi5p',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 5,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'TgFcw89X32b0l7Qy',
			saved_date : 6,
			psa_type : 'JRiK3BVTjHr8ysnv',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 26,
		quote_text : '8LdVIrimECxZjyAh',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 51,
				length : 9,
			),
			$client->messageEntityMention(
				offset : 18,
				length : 63,
			),
			$client->messageEntityHashtag(
				offset : 42,
				length : 89,
			),
			$client->messageEntityBotCommand(
				offset : 84,
				length : 38,
			),
			$client->messageEntityUrl(
				offset : 74,
				length : 49,
			),
			$client->messageEntityEmail(
				offset : 11,
				length : 15,
			),
			$client->messageEntityBold(
				offset : 2,
				length : 26,
			),
			$client->messageEntityItalic(
				offset : 38,
				length : 64,
			),
			$client->messageEntityCode(
				offset : 24,
				length : 1,
			),
			$client->messageEntityPre(
				offset : 76,
				length : 78,
				language : 'sRJela0ofUH28wmI',
			),
			$client->messageEntityTextUrl(
				offset : 3,
				length : 30,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 11,
				length : 58,
				user_id : 4931677706884512427,
			),
			$client->inputMessageEntityMentionName(
				offset : 78,
				length : 78,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 1,
				length : 22,
			),
			$client->messageEntityCashtag(
				offset : 5,
				length : 20,
			),
			$client->messageEntityUnderline(
				offset : 76,
				length : 33,
			),
			$client->messageEntityStrike(
				offset : 8,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 52,
				length : 29,
			),
			$client->messageEntitySpoiler(
				offset : 8,
				length : 32,
			),
			$client->messageEntityCustomEmoji(
				offset : 100,
				length : 10,
				document_id : 3185589988016149399,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 86,
				length : 71,
			),
		),
		quote_offset : 86,
		todo_item_id : 74,
	),
	date : 28,
	action : $client->messageActionEmpty(),
	reactions : $client->messageReactions(
		min : true,
		can_see_list : true,
		reactions_as_tags : true,
		results : array(
			$client->reactionCount(
				chosen_order : 11,
				reaction : $client->reactionEmpty(...),
				count : 5,
			),
		),
		recent_reactions : array(
			$client->messagePeerReaction(
				big : true,
				unread : true,
				my : true,
				peer_id : $client->peerUser(...),
				date : 75,
				reaction : $client->reactionEmpty(...),
			),
		),
		top_reactors : array(
			$client->messageReactor(
				top : true,
				my : true,
				anonymous : true,
				peer_id : $client->peerUser(...),
				count : 48,
			),
		),
	),
	ttl_period : 48,
);
```