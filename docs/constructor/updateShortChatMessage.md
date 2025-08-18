# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 211

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
	id : 71,
	from_id : -8833433947068510194,
	chat_id : 6790325150764242118,
	message : 'p6WXnNDYEJj1bAhM',
	pts : 86,
	pts_count : 39,
	date : 64,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -2215317748300496852,
		),
		from_name : '9b2QnfIeCRFPsmgJ',
		date : 96,
		channel_post : 90,
		post_author : 'bRy9Twxmh3E1lUA5',
		saved_from_peer : $client->peerUser(
			user_id : -28992305799354286,
		),
		saved_from_msg_id : 75,
		saved_from_id : $client->peerUser(
			user_id : 5370203570552163885,
		),
		saved_from_name : 'Bu6FNqhKgokxdLGI',
		saved_date : 62,
		psa_type : 'BXrjNpi2tWsvfE8S',
	),
	via_bot_id : 1188140296463614486,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 74,
		reply_to_peer_id : $client->peerUser(
			user_id : -1542317888339453001,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : '1PhsWNQpwGT8CDaR',
			date : 34,
			channel_post : 74,
			post_author : 'q940NWQD6ylRxoeB',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 64,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'BGZqjRfW12FpchPM',
			saved_date : 30,
			psa_type : 'DrL7IaWm0C4quNUT',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 28,
		quote_text : 'u3HM6NtGv2X4BfsE',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 89,
				length : 26,
			),
			$client->messageEntityMention(
				offset : 33,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 13,
				length : 96,
			),
			$client->messageEntityBotCommand(
				offset : 60,
				length : 67,
			),
			$client->messageEntityUrl(
				offset : 66,
				length : 7,
			),
			$client->messageEntityEmail(
				offset : 58,
				length : 2,
			),
			$client->messageEntityBold(
				offset : 50,
				length : 8,
			),
			$client->messageEntityItalic(
				offset : 96,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 3,
				length : 24,
			),
			$client->messageEntityPre(
				offset : 90,
				length : 12,
				language : 'B0KASw3H2aPMLFCh',
			),
			$client->messageEntityTextUrl(
				offset : 77,
				length : 3,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 59,
				length : 51,
				user_id : 4400067993921385554,
			),
			$client->inputMessageEntityMentionName(
				offset : 89,
				length : 36,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 21,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 65,
				length : 86,
			),
			$client->messageEntityUnderline(
				offset : 19,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 18,
				length : 45,
			),
			$client->messageEntityBankCard(
				offset : 47,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 70,
				length : 33,
			),
			$client->messageEntityCustomEmoji(
				offset : 96,
				length : 5,
				document_id : 5170133450430070498,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 55,
				length : 83,
			),
		),
		quote_offset : 92,
		todo_item_id : 84,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 8,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 36,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 92,
			length : 72,
		),
		$client->messageEntityBotCommand(
			offset : 76,
			length : 70,
		),
		$client->messageEntityUrl(
			offset : 18,
			length : 63,
		),
		$client->messageEntityEmail(
			offset : 8,
			length : 55,
		),
		$client->messageEntityBold(
			offset : 86,
			length : 92,
		),
		$client->messageEntityItalic(
			offset : 35,
			length : 37,
		),
		$client->messageEntityCode(
			offset : 1,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 73,
			length : 80,
			language : '0l4udJPq5kivQDCw',
		),
		$client->messageEntityTextUrl(
			offset : 39,
			length : 21,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 73,
			length : 64,
			user_id : 8109275595624096587,
		),
		$client->inputMessageEntityMentionName(
			offset : 6,
			length : 82,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 88,
			length : 18,
		),
		$client->messageEntityCashtag(
			offset : 85,
			length : 53,
		),
		$client->messageEntityUnderline(
			offset : 94,
			length : 87,
		),
		$client->messageEntityStrike(
			offset : 82,
			length : 40,
		),
		$client->messageEntityBankCard(
			offset : 23,
			length : 21,
		),
		$client->messageEntitySpoiler(
			offset : 25,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 49,
			length : 84,
			document_id : -1244348550698431514,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 44,
			length : 91,
		),
	),
	ttl_period : 31,
);
```