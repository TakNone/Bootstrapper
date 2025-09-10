# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 214

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
	from_id : -5025921803986120800,
	chat_id : 8847071134258641585,
	message : 'wI63x1R4ctUVivyk',
	pts : 13,
	pts_count : 81,
	date : 42,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -7732031347845775614,
		),
		from_name : 'EhZik8oFsX2JLmK4',
		date : 65,
		channel_post : 32,
		post_author : 'LIHYJxrFjp8RSeXh',
		saved_from_peer : $client->peerUser(
			user_id : -7976149723621943357,
		),
		saved_from_msg_id : 24,
		saved_from_id : $client->peerUser(
			user_id : 3056260050326529486,
		),
		saved_from_name : 'iEr9WlTJABhC0IsZ',
		saved_date : 44,
		psa_type : 'BVqWUkMX5J9ys8QA',
	),
	via_bot_id : 8401671043359988012,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 45,
		reply_to_peer_id : $client->peerUser(
			user_id : -1758689653035020646,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'yYaWgACkR6r82th3',
			date : 0,
			channel_post : 35,
			post_author : 'Xud3hlTGns9pVNjv',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 9,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'jNsASm8296hBdUro',
			saved_date : 57,
			psa_type : '5uYdDM7OZGv4tRFf',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 32,
		quote_text : 'uNtJ84gCWl1kESLG',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 95,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 39,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 13,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 50,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 94,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 72,
				language : 'e0Jm8h52odaknSlf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 53,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 26,
				user_id : 6023982440539727025,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 39,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 54,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 31,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 30,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 60,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 72,
				document_id : 5756507108716375034,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 60,
			),
		),
		quote_offset : 4,
		todo_item_id : 7,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 9,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 35,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 20,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 25,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 86,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'UAk1HKl3FDQ65PTg',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 73,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 41,
			user_id : -9017221764465505662,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 82,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 24,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 33,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 12,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 72,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 40,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 77,
			document_id : 8159764123220922664,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 16,
		),
	),
	ttl_period : 88,
);
```