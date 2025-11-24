# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 218

```tl
updateShortChatMessage#4d6deea5 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int from_id:long chat_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in this message |
| **media_unread** | [`flags.5?true`](type/true) | Whether the message contains some unread mentions |
| **silent** | [`flags.13?true`](type/true) | If true, the message is a silent message, no notifications should be triggered |
| <mark>id</mark> | [`int`](type/int) | ID of the message |
| <mark>from_id</mark> | [`long`](type/long) | ID of the sender of the message |
| <mark>chat_id</mark> | [`long`](type/long) | ID of the chat where the message was sent |
| <mark>message</mark> | [`string`](type/string) | Message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |
| <mark>date</mark> | [`int`](type/int) | date |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about a forwarded message |
| **via_bot_id** | [`flags.11?long`](type/long) | Info about the inline bot used to generate this message |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply (thread) information |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Entities for styled text |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once updateShortChatMessage.date+updateShortChatMessage.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShortChatMessage(
	out : true,
	mentioned : true,
	media_unread : true,
	silent : true,
	id : 5,
	from_id : -3322799265950072861,
	chat_id : -1445371837368139638,
	message : 'AvYJjFlbSr4W01md',
	pts : 90,
	pts_count : 47,
	date : 100,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 8445301268425775935,
		),
		from_name : 'ZJ3wV5sk7xTmXjlU',
		date : 50,
		channel_post : 21,
		post_author : 'TudFap5ResDfxvQU',
		saved_from_peer : $client->peerUser(
			user_id : 3916253284707905045,
		),
		saved_from_msg_id : 82,
		saved_from_id : $client->peerUser(
			user_id : 9048941185417519083,
		),
		saved_from_name : '36RPtJpT7iFHBhDv',
		saved_date : 67,
		psa_type : 'krxwDX3sO90UgbEQ',
	),
	via_bot_id : 3048378189561271964,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 71,
		reply_to_peer_id : $client->peerUser(
			user_id : 3363943298191602502,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 5629954142022346273,
			),
			from_name : '8Uy3SQpxYNFcZBAK',
			date : 58,
			channel_post : 15,
			post_author : 'tThU4AmwnzklM87j',
			saved_from_peer : $client->peerUser(
				user_id : -3613656806166462297,
			),
			saved_from_msg_id : 41,
			saved_from_id : $client->peerUser(
				user_id : 8815826383029721329,
			),
			saved_from_name : '1pvToQFkP4M6bO3G',
			saved_date : 36,
			psa_type : 'Aw674YTynGzSRmLW',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 30,
		quote_text : 'aMBk243zcoiJHe5A',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 32,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 28,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 4,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : 'WyTS9wkFai7YvQBo',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 97,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : 5396546873433421651,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 76,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 6,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 18,
				document_id : 2538236730645881494,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 32,
			),
		),
		quote_offset : 49,
		todo_item_id : 65,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 14,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 33,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 57,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 79,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 71,
			language : '23htKaNc7LFiVAG4',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : 9160292584718212985,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 40,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 93,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 86,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 93,
			document_id : 5851283525272237192,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 27,
		),
	),
	ttl_period : 69,
);
```