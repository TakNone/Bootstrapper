# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 225

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
	id : 75,
	from_id : 1882392949459233756,
	chat_id : 7580664748642326177,
	message : 'IWbamR7HLciPSvzx',
	pts : 11,
	pts_count : 93,
	date : 88,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 8908372298281676756,
		),
		from_name : 'yl5buFeAdaEcz2Os',
		date : 68,
		channel_post : 26,
		post_author : 'eSq3vHkYhfBsMILc',
		saved_from_peer : $client->peerUser(
			user_id : -7956212624904999557,
		),
		saved_from_msg_id : 14,
		saved_from_id : $client->peerUser(
			user_id : 374689939615046646,
		),
		saved_from_name : 'CJhLe7dDoFwEtxX3',
		saved_date : 95,
		psa_type : 'xK7NagsQ3AYTOVvR',
	),
	via_bot_id : 35673283823232906,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 11,
		reply_to_peer_id : $client->peerUser(
			user_id : 8511938757614975487,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -167651237105905505,
			),
			from_name : 'xWECcwjUgd0HGN5t',
			date : 21,
			channel_post : 46,
			post_author : 'OIAdzX3CLKg6y1Ve',
			saved_from_peer : $client->peerUser(
				user_id : -475999697590169607,
			),
			saved_from_msg_id : 40,
			saved_from_id : $client->peerUser(
				user_id : 3193552037882363952,
			),
			saved_from_name : 'AK2qfPW4vHs3Nb1B',
			saved_date : 19,
			psa_type : 'NYUmQj2unM4x3Sk8',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 3,
		quote_text : 'b2z8x4QPLNtZejST',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 52,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 54,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 45,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 88,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 39,
				language : 'xv4a1TqdikgOfybK',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 88,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 84,
				user_id : -6038211036492840025,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 1,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 64,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 42,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 77,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 81,
				document_id : -143879853993658354,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 29,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 5,
				date : 21,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 80,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 20,
				old_text : 'rJqZiG2E5QgyH6lk',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 72,
			),
		),
		quote_offset : 30,
		todo_item_id : 49,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 44,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 64,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 28,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 93,
			language : 'QaDfR0yL6rhvUtn9',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 40,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 19,
			user_id : -2989219785233923167,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 32,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 10,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 81,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 27,
			document_id : 6081768563727681857,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 28,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 45,
			date : 90,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 22,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 18,
			old_text : 'D173bGW8FutK2xiJ',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 6,
		),
	),
	ttl_period : 43,
);
```