# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 229

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
	id : 48,
	from_id : 3237718379264439339,
	chat_id : -845870595660470573,
	message : 'ctTFE3hWqv7Yupj9',
	pts : 34,
	pts_count : 55,
	date : 59,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 6338632848494907829,
		),
		from_name : 'TtsxNvEi3S5BLQYu',
		date : 96,
		channel_post : 92,
		post_author : 'OSIfNdK8MzsUAB79',
		saved_from_peer : $client->peerUser(
			user_id : -5099393669744658521,
		),
		saved_from_msg_id : 25,
		saved_from_id : $client->peerUser(
			user_id : -6918360088137740464,
		),
		saved_from_name : 'SXIeKN4hZ6MHJwOF',
		saved_date : 39,
		psa_type : 'xE8BOjz0paI2r6Qi',
	),
	via_bot_id : 5746011910402654309,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 78,
		reply_to_peer_id : $client->peerUser(
			user_id : -5421029377285308934,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 178175284869893315,
			),
			from_name : 'gs1TolO8rZQneqJU',
			date : 49,
			channel_post : 83,
			post_author : '1vRa2QHOBgLX69xU',
			saved_from_peer : $client->peerUser(
				user_id : 6784269062933615504,
			),
			saved_from_msg_id : 64,
			saved_from_id : $client->peerUser(
				user_id : 2980038794751487211,
			),
			saved_from_name : '8lgU9wV1Bpa0vLWN',
			saved_date : 42,
			psa_type : 'yjIhHNEcVXG01OfY',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 15,
		quote_text : '9AZkYWTwVH3mBPGK',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 24,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 58,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 82,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 86,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 58,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 32,
				language : 'n8f70WLq5Y9by1a6',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 49,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : 6837385392745148053,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 66,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 95,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 96,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 1,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 54,
				document_id : 3967113867335204802,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 55,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 97,
				date : 50,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 45,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 45,
				old_text : 'uAWG6e0VIb2EglOP',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 55,
			),
		),
		quote_offset : 28,
		todo_item_id : 8,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 14,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 46,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 69,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 34,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 21,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 52,
			language : 'eQFVIvkqA96iuBTm',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 41,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : 6201383083444156101,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 29,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 13,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 13,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 85,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 9,
			document_id : 5803900900470523898,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 84,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 51,
			date : 73,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 47,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 51,
			old_text : 'EuNrJd730LHxeIRV',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 9,
		),
	),
	ttl_period : 89,
);
```