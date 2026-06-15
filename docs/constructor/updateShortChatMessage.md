# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 227

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
	id : 13,
	from_id : 4516778015173470076,
	chat_id : -8434493636082639500,
	message : 'xgmhyjwUlzkA0bV6',
	pts : 76,
	pts_count : 83,
	date : 91,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -2772670284131001468,
		),
		from_name : 'nRBeYMCE5rPwVqst',
		date : 75,
		channel_post : 67,
		post_author : 'x5UfPKGWdgsl4h8t',
		saved_from_peer : $client->peerUser(
			user_id : -3149457210736877041,
		),
		saved_from_msg_id : 35,
		saved_from_id : $client->peerUser(
			user_id : 6509680327646062071,
		),
		saved_from_name : 'f1tcHynkXigpDj3r',
		saved_date : 74,
		psa_type : 'StgEOFvA3JxRiXG1',
	),
	via_bot_id : -8242350621074660406,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 80,
		reply_to_peer_id : $client->peerUser(
			user_id : 532978486898727899,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 4423076013013268078,
			),
			from_name : 'Om6avtTQRscIwqAy',
			date : 55,
			channel_post : 61,
			post_author : '6jURE5eC1s9dAZWB',
			saved_from_peer : $client->peerUser(
				user_id : -8807312569832570653,
			),
			saved_from_msg_id : 16,
			saved_from_id : $client->peerUser(
				user_id : -5383905050804970552,
			),
			saved_from_name : 'Pj8a3L5cExzK0G72',
			saved_date : 0,
			psa_type : 'ZhCH9zxf6UVXuQ1s',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 88,
		quote_text : 'zVcKoS4T8iH9gYrG',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 3,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 55,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 21,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 70,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 90,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'UiOEzHyhSYbAfnQ7',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 27,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : 5838473687300784433,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 44,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 41,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 98,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 88,
				document_id : 6195538446743792487,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 89,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 92,
				date : 90,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 70,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 16,
				old_text : 'ZC17l4kPJXdRUxj3',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 54,
			),
		),
		quote_offset : 21,
		todo_item_id : 72,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 78,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 14,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 77,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 77,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 73,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 12,
			language : 'cDlk3SARZGWsYFTd',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 11,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 86,
			user_id : -8949985698146466198,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 91,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 36,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 20,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 59,
			document_id : -1214170568196942262,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 51,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 4,
			date : 18,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 0,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 1,
			old_text : 'FTqEicy1YN4QVLrB',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 6,
		),
	),
	ttl_period : 43,
);
```