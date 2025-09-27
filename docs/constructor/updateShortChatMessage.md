# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 216

```tl
updateShortChatMessage#4d6deea5 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int from_id:long chat_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 94,
	from_id : -2367692974142909117,
	chat_id : -4946789474010491454,
	message : 'l1VLxS9YNOHzbXDn',
	pts : 8,
	pts_count : 69,
	date : 4,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -5968784622236328167,
		),
		from_name : 'hOkLFRAtlubSgjif',
		date : 3,
		channel_post : 51,
		post_author : 'ZsgbBTtK4LvDpRF9',
		saved_from_peer : $client->peerUser(
			user_id : -5934836054577519223,
		),
		saved_from_msg_id : 53,
		saved_from_id : $client->peerUser(
			user_id : 6440249517633022055,
		),
		saved_from_name : 'fI2dCjHVJ3OZbDyL',
		saved_date : 70,
		psa_type : 'mEpb2ieCY0DgvdZh',
	),
	via_bot_id : -5263446383049796653,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 44,
		reply_to_peer_id : $client->peerUser(
			user_id : -2003528614558622327,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'GnvRYc6duIXCbAlF',
			date : 41,
			channel_post : 90,
			post_author : 'ZkDMTo7xBzOJn318',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 17,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'vPoxHe6br0gCU8q2',
			saved_date : 63,
			psa_type : 'yPJz0IAcbugq65Vl',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 11,
		quote_text : 'Wly0H2jcpiTnVdbP',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 63,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 5,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 18,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 23,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'ZzTrCI4gAbaEfGKp',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 66,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : -5774714496690103343,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 71,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 3,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 67,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 82,
				document_id : 3243995443595502478,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
		),
		quote_offset : 10,
		todo_item_id : 37,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 21,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 75,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 85,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 2,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 87,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 13,
			language : 'jyVYDSeIZh4HpTCi',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 8,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : -882627220356021662,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 18,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 15,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 62,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 37,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 88,
			document_id : -1643318852662259946,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 28,
		),
	),
	ttl_period : 57,
);
```