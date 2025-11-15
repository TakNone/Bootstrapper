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
	id : 34,
	from_id : -7865911728866020869,
	chat_id : 8719330287411825880,
	message : 'de64Ut5L7cAEWBlT',
	pts : 4,
	pts_count : 36,
	date : 33,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -1547724066206639908,
		),
		from_name : 'vKpAIiGuVRjo1arg',
		date : 83,
		channel_post : 74,
		post_author : 'LXjocn42Vmf5Jw7r',
		saved_from_peer : $client->peerUser(
			user_id : 2001725672192091015,
		),
		saved_from_msg_id : 50,
		saved_from_id : $client->peerUser(
			user_id : -5489108375053039496,
		),
		saved_from_name : 'esWo9JpSZqxtn73X',
		saved_date : 40,
		psa_type : 'gXsaE1b3CdZTtOzk',
	),
	via_bot_id : -285322861577112550,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 72,
		reply_to_peer_id : $client->peerUser(
			user_id : 1646463508768173530,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : '9xytOUKV7HuB4khc',
			date : 100,
			channel_post : 65,
			post_author : 'ncW5S8FfyxvwgUjs',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 92,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'OBUYobeTsy5lgznQ',
			saved_date : 91,
			psa_type : 'NeES9B3ljATb8RIf',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 19,
		quote_text : 'egtUDiN4qGd1c8CE',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 6,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 19,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 89,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 84,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 84,
				language : 'nRL8oB0kTeIcwDig',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 94,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 22,
				user_id : 5707897341975455639,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 95,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 81,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 27,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 61,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 56,
				document_id : 6631801628606597404,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 5,
			),
		),
		quote_offset : 13,
		todo_item_id : 70,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 83,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 20,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 89,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 61,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 2,
			language : 'C91SP3BocglmGM4F',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 77,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : -1790770051477162232,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 84,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 72,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 24,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 66,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 7,
			document_id : -9239242864388878,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 47,
		),
	),
	ttl_period : 86,
);
```