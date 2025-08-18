# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 211

```tl
updateShortMessage#313bc7f8 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int user_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 33,
	user_id : -4074332903928397582,
	message : 'hi6CMTXn5JYPD4BA',
	pts : 66,
	pts_count : 31,
	date : 23,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -4363484528459796729,
		),
		from_name : '1Fj7tWXpROCNeV8y',
		date : 41,
		channel_post : 67,
		post_author : 'krGX3qcD8xoKvQBZ',
		saved_from_peer : $client->peerUser(
			user_id : -3806429182660233109,
		),
		saved_from_msg_id : 24,
		saved_from_id : $client->peerUser(
			user_id : 6244137043646678843,
		),
		saved_from_name : 'WC0DnQvHROLeS3X5',
		saved_date : 58,
		psa_type : 'UtvJkL4n19owaZgR',
	),
	via_bot_id : 2653773373038619689,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 8,
		reply_to_peer_id : $client->peerUser(
			user_id : -3810600054796887892,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'KFHu1RsXdpi4YDtW',
			date : 71,
			channel_post : 73,
			post_author : 'K0wiTY1VayeWjU8d',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 31,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'i1h6G3EgIW9YJ85a',
			saved_date : 7,
			psa_type : 'f5s2J64liBMmTbaH',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 26,
		quote_text : 'PdOSgApo4K9qzNRI',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 86,
				length : 11,
			),
			$client->messageEntityMention(
				offset : 89,
				length : 57,
			),
			$client->messageEntityHashtag(
				offset : 69,
				length : 0,
			),
			$client->messageEntityBotCommand(
				offset : 23,
				length : 4,
			),
			$client->messageEntityUrl(
				offset : 62,
				length : 26,
			),
			$client->messageEntityEmail(
				offset : 78,
				length : 26,
			),
			$client->messageEntityBold(
				offset : 27,
				length : 0,
			),
			$client->messageEntityItalic(
				offset : 1,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 1,
				length : 100,
			),
			$client->messageEntityPre(
				offset : 62,
				length : 81,
				language : 'uatUx6vPWTJyI1NC',
			),
			$client->messageEntityTextUrl(
				offset : 2,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 12,
				length : 4,
				user_id : 8637634035847130320,
			),
			$client->inputMessageEntityMentionName(
				offset : 23,
				length : 48,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 22,
				length : 20,
			),
			$client->messageEntityCashtag(
				offset : 17,
				length : 76,
			),
			$client->messageEntityUnderline(
				offset : 93,
				length : 51,
			),
			$client->messageEntityStrike(
				offset : 74,
				length : 83,
			),
			$client->messageEntityBankCard(
				offset : 13,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 45,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 38,
				length : 54,
				document_id : -2685577049636978880,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 85,
				length : 99,
			),
		),
		quote_offset : 63,
		todo_item_id : 55,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 56,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 100,
			length : 69,
		),
		$client->messageEntityHashtag(
			offset : 82,
			length : 43,
		),
		$client->messageEntityBotCommand(
			offset : 66,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 31,
			length : 24,
		),
		$client->messageEntityEmail(
			offset : 29,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 34,
			length : 70,
		),
		$client->messageEntityItalic(
			offset : 17,
			length : 64,
		),
		$client->messageEntityCode(
			offset : 30,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 3,
			length : 10,
			language : 'JIoewGAgpcb2tlSD',
		),
		$client->messageEntityTextUrl(
			offset : 20,
			length : 60,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 24,
			length : 31,
			user_id : 4484212135225678605,
		),
		$client->inputMessageEntityMentionName(
			offset : 44,
			length : 35,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 56,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 27,
			length : 12,
		),
		$client->messageEntityUnderline(
			offset : 33,
			length : 0,
		),
		$client->messageEntityStrike(
			offset : 43,
			length : 93,
		),
		$client->messageEntityBankCard(
			offset : 2,
			length : 2,
		),
		$client->messageEntitySpoiler(
			offset : 35,
			length : 76,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 42,
			document_id : 6142774626710699427,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 86,
			length : 81,
		),
	),
	ttl_period : 25,
);
```