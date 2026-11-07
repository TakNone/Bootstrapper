# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 229

```tl
updateShortMessage#313bc7f8 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int user_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **out** | [`flags.1?true`](type/true) | Whether the message is outgoing |
| **mentioned** | [`flags.4?true`](type/true) | Whether we were mentioned in the message |
| **media_unread** | [`flags.5?true`](type/true) | Whether there are some unread mentions in this message |
| **silent** | [`flags.13?true`](type/true) | If true, the message is a silent message, no notifications should be triggered |
| <mark>id</mark> | [`int`](type/int) | The message ID |
| <mark>user_id</mark> | [`long`](type/long) | The ID of the sender (if outgoing will be the ID of the destination) of the message |
| <mark>message</mark> | [`string`](type/string) | The message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |
| <mark>date</mark> | [`int`](type/int) | date |
| **fwd_from** | [`flags.2?MessageFwdHeader`](type/MessageFwdHeader) | Info about a forwarded message |
| **via_bot_id** | [`flags.11?long`](type/long) | Info about the inline bot used to generate this message |
| **reply_to** | [`flags.3?MessageReplyHeader`](type/MessageReplyHeader) | Reply and thread information |
| **entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Entities for styled text |
| **ttl_period** | [`flags.25?int`](type/int) | Time To Live of the message, once message.date+message.ttl_period === time(), the message will be deleted on the server, and must be deleted locally as well |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShortMessage(
	out : true,
	mentioned : true,
	media_unread : true,
	silent : true,
	id : 12,
	user_id : 2431575413505793214,
	message : 'U3d70t4bDAjNIYyW',
	pts : 97,
	pts_count : 21,
	date : 44,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -7168984261868725696,
		),
		from_name : 'D2nIN8eMs0RzZx6A',
		date : 88,
		channel_post : 10,
		post_author : 'u4Q0xEhecdYrnW5K',
		saved_from_peer : $client->peerUser(
			user_id : 2743257064310487164,
		),
		saved_from_msg_id : 80,
		saved_from_id : $client->peerUser(
			user_id : 8627948903548232433,
		),
		saved_from_name : 'cXoTMgdlbO7j60xU',
		saved_date : 1,
		psa_type : 'ZR9hEpaBnUDuk8w6',
	),
	via_bot_id : -5407552833426561494,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 80,
		reply_to_peer_id : $client->peerUser(
			user_id : -5950549590694355299,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 9193865538461052144,
			),
			from_name : 'znvyN4gIcPw1SATs',
			date : 28,
			channel_post : 100,
			post_author : 'RtPwEyGZ9nBWM2ah',
			saved_from_peer : $client->peerUser(
				user_id : 6628526471008501955,
			),
			saved_from_msg_id : 46,
			saved_from_id : $client->peerUser(
				user_id : -6310139488150459821,
			),
			saved_from_name : 'BvtKR5hx7GJXbNdc',
			saved_date : 64,
			psa_type : 'KpFXtwzVU78cJCAn',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 2,
		quote_text : 'oLzDjUhdA7MSPYcG',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 22,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 50,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 86,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 93,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 57,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 21,
				language : '2igKhAs7X0eCL1MU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 57,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 88,
				user_id : 1395192813375377571,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 56,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 88,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 10,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 62,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 39,
				document_id : 6358632163576247470,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 61,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 94,
				date : 81,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 47,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 87,
				old_text : 'E1aB4ZGKkgVdIuPz',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 18,
			),
		),
		quote_offset : 44,
		todo_item_id : 9,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 12,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 67,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 16,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 15,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 13,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 88,
			language : 'fkSIbq47VujyCsor',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 30,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 74,
			user_id : -4601920433946935473,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 32,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 26,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 23,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 17,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 60,
			document_id : 788485526893323470,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 65,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 37,
			date : 30,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 97,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 48,
			old_text : 'xqiG4ul3ra8UfK0o',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 81,
		),
	),
	ttl_period : 83,
);
```