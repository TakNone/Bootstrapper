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
	id : 40,
	from_id : 1529338472870425638,
	chat_id : -9188431289824008565,
	message : 'B609wJsWoQaZArDi',
	pts : 76,
	pts_count : 40,
	date : 38,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 3753799872670160257,
		),
		from_name : 'DrXPdEYI76hJ8GHQ',
		date : 22,
		channel_post : 0,
		post_author : 'hIy8x1bnJuwv0QkM',
		saved_from_peer : $client->peerUser(
			user_id : 5623401770185226315,
		),
		saved_from_msg_id : 67,
		saved_from_id : $client->peerUser(
			user_id : 2021101681460142361,
		),
		saved_from_name : 'xhOmJoUwLe63rRgj',
		saved_date : 15,
		psa_type : 'JNrdgwsBX3iGeWQj',
	),
	via_bot_id : -5564983393213055922,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 8,
		reply_to_peer_id : $client->peerUser(
			user_id : -7846832341654073602,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'UrBL1p4SMX8td6CK',
			date : 14,
			channel_post : 94,
			post_author : 'NJu8w6XvT03hEa2j',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 6,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'Fzl5dVUtmDEo0KPZ',
			saved_date : 10,
			psa_type : 'cr6bmCOqznHJPEMB',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 72,
		quote_text : 'xvXgGMDn9LU2FT1R',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 72,
				length : 88,
			),
			$client->messageEntityMention(
				offset : 34,
				length : 55,
			),
			$client->messageEntityHashtag(
				offset : 92,
				length : 8,
			),
			$client->messageEntityBotCommand(
				offset : 33,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 44,
				length : 99,
			),
			$client->messageEntityEmail(
				offset : 1,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 8,
				length : 66,
			),
			$client->messageEntityItalic(
				offset : 35,
				length : 61,
			),
			$client->messageEntityCode(
				offset : 35,
				length : 14,
			),
			$client->messageEntityPre(
				offset : 12,
				length : 24,
				language : '6BXAg91LjxH47Crk',
			),
			$client->messageEntityTextUrl(
				offset : 87,
				length : 31,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 3,
				length : 26,
				user_id : 4021034520208060032,
			),
			$client->inputMessageEntityMentionName(
				offset : 7,
				length : 46,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 79,
				length : 16,
			),
			$client->messageEntityCashtag(
				offset : 52,
				length : 64,
			),
			$client->messageEntityUnderline(
				offset : 33,
				length : 39,
			),
			$client->messageEntityStrike(
				offset : 89,
				length : 91,
			),
			$client->messageEntityBankCard(
				offset : 9,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 40,
				length : 62,
			),
			$client->messageEntityCustomEmoji(
				offset : 12,
				length : 63,
				document_id : -4529128434336321758,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 95,
				length : 25,
			),
		),
		quote_offset : 37,
		todo_item_id : 54,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 81,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 69,
			length : 8,
		),
		$client->messageEntityHashtag(
			offset : 37,
			length : 39,
		),
		$client->messageEntityBotCommand(
			offset : 36,
			length : 79,
		),
		$client->messageEntityUrl(
			offset : 66,
			length : 62,
		),
		$client->messageEntityEmail(
			offset : 99,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 13,
			length : 49,
		),
		$client->messageEntityItalic(
			offset : 27,
			length : 75,
		),
		$client->messageEntityCode(
			offset : 69,
			length : 2,
		),
		$client->messageEntityPre(
			offset : 84,
			length : 15,
			language : 'k0JasMx6K4Y3eR5r',
		),
		$client->messageEntityTextUrl(
			offset : 32,
			length : 59,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 31,
			length : 27,
			user_id : -7051086914358939506,
		),
		$client->inputMessageEntityMentionName(
			offset : 69,
			length : 81,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 54,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 26,
			length : 2,
		),
		$client->messageEntityUnderline(
			offset : 96,
			length : 85,
		),
		$client->messageEntityStrike(
			offset : 38,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 19,
			length : 89,
		),
		$client->messageEntitySpoiler(
			offset : 19,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 45,
			length : 92,
			document_id : -589055090440624349,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 59,
			length : 25,
		),
	),
	ttl_period : 24,
);
```