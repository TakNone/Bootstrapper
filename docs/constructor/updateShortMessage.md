# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 225

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
	id : 78,
	user_id : -4188813731325708898,
	message : '7vWjVnmCPrUJZGsB',
	pts : 32,
	pts_count : 71,
	date : 92,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 7297313471763662019,
		),
		from_name : 'hafTREXspyiIo2Zj',
		date : 76,
		channel_post : 8,
		post_author : 'we82GDRhP9Snyaq5',
		saved_from_peer : $client->peerUser(
			user_id : -4376543902229519623,
		),
		saved_from_msg_id : 48,
		saved_from_id : $client->peerUser(
			user_id : 3325505059872913193,
		),
		saved_from_name : 'GoMEd7tTYuv3wnZs',
		saved_date : 77,
		psa_type : '8gGhvSPyxZMUks9n',
	),
	via_bot_id : -4566508299846318689,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 3,
		reply_to_peer_id : $client->peerUser(
			user_id : 6612586002114343177,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 3493131897308558620,
			),
			from_name : '6bC4AoZTg7R5sLWf',
			date : 69,
			channel_post : 28,
			post_author : '9bW4gn8MSch6BFGl',
			saved_from_peer : $client->peerUser(
				user_id : 3531022525072927115,
			),
			saved_from_msg_id : 41,
			saved_from_id : $client->peerUser(
				user_id : 858872615765702016,
			),
			saved_from_name : 'WE4HJnTpu5xGXNdw',
			saved_date : 79,
			psa_type : 'aoImqKjvpcYl63GL',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 10,
		quote_text : 'iBkOQlfvxKzZur8P',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 49,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 36,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 38,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 7,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 58,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 99,
				language : 'VK5pS7Ihivat16OQ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 96,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : -5402322326374866356,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 38,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 64,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 68,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 77,
				document_id : -6828645183260901209,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 37,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 1,
				date : 5,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 33,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 7,
				old_text : 'br4gLNHtq63kQAe7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 33,
			),
		),
		quote_offset : 75,
		todo_item_id : 20,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 97,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 19,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 86,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 80,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 25,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 12,
			language : '0MzkEwpmoPrW5abQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 39,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : 2822578118955636864,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 42,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 36,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 33,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 19,
			document_id : 6227321272516233329,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 21,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 40,
			date : 38,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 70,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 88,
			old_text : 'QVLrwzpZIx4Ko3u5',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 74,
		),
	),
	ttl_period : 78,
);
```