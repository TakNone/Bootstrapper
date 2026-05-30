# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 222

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
	id : 24,
	from_id : 7047683136482395142,
	chat_id : -3753134774465072777,
	message : 'z4TWhQ5lIoOZdHeJ',
	pts : 53,
	pts_count : 19,
	date : 74,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -1163329224718697594,
		),
		from_name : 'VJA9h6Wl8SG1M4j0',
		date : 14,
		channel_post : 27,
		post_author : 'Trum08XtOEpLi6lj',
		saved_from_peer : $client->peerUser(
			user_id : 7210101720184516912,
		),
		saved_from_msg_id : 82,
		saved_from_id : $client->peerUser(
			user_id : -38565531283655415,
		),
		saved_from_name : '2pPjdtWVu81EbhTN',
		saved_date : 24,
		psa_type : 'QfBZ1n85pILywteC',
	),
	via_bot_id : -9146432323637278835,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 46,
		reply_to_peer_id : $client->peerUser(
			user_id : -1730270429614882744,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -5346653745077707825,
			),
			from_name : 'Q6Kj8hcxHzMlvJVo',
			date : 42,
			channel_post : 48,
			post_author : 'l7NUny8afHr2bk9Q',
			saved_from_peer : $client->peerUser(
				user_id : -4046322517588490902,
			),
			saved_from_msg_id : 25,
			saved_from_id : $client->peerUser(
				user_id : 4005093185500866761,
			),
			saved_from_name : 'CnvZhT0p4ikEB5uz',
			saved_date : 45,
			psa_type : 'tAhbOigrYVmdxXFu',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 92,
		quote_text : 'an8tiZqL3Y5klmpz',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 36,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 52,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 41,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 14,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 34,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 91,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 23,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 64,
				language : 'xdgzKyJj4arX2hLZ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 23,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 90,
				user_id : 658593965047276456,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 19,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 39,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 76,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 86,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 99,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 20,
				document_id : -3059813071235210644,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 88,
			),
		),
		quote_offset : 56,
		todo_item_id : 67,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 63,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 38,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 20,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 37,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 3,
			language : 'Mkig2H7ulPoJSqKp',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 54,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 92,
			user_id : 7520514114911324459,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 50,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 54,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 34,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 38,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : 8572982660093783499,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 70,
		),
	),
	ttl_period : 81,
);
```