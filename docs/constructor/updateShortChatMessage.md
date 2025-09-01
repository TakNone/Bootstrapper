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
	id : 0,
	from_id : 2182558150297718491,
	chat_id : -3321720717706083507,
	message : 'E8OpQzYiZy7XtWG1',
	pts : 91,
	pts_count : 50,
	date : 97,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -6284895671932933868,
		),
		from_name : 'C6V7eSEMairzwjb8',
		date : 72,
		channel_post : 34,
		post_author : '2coCR3OnpEPaBrLt',
		saved_from_peer : $client->peerUser(
			user_id : 6998437852317477461,
		),
		saved_from_msg_id : 99,
		saved_from_id : $client->peerUser(
			user_id : 956898772197946568,
		),
		saved_from_name : 'YkEQoGJxT2MH8fOu',
		saved_date : 4,
		psa_type : 'XpNTBqtA5kEwUhIy',
	),
	via_bot_id : -8014285983682317528,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 74,
		reply_to_peer_id : $client->peerUser(
			user_id : -609790344712127758,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'PbvMRYashfC2ASnU',
			date : 80,
			channel_post : 19,
			post_author : 'K0oMgWrmBFRjGtzE',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 21,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'JVhPxtZTEqHwQenk',
			saved_date : 94,
			psa_type : 'A8xGn6SbVsmhlo0r',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 13,
		quote_text : 'EcuVdKsTJlx9IzkG',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 5,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 75,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 65,
				length : 15,
			),
			$client->messageEntityBotCommand(
				offset : 23,
				length : 82,
			),
			$client->messageEntityUrl(
				offset : 1,
				length : 71,
			),
			$client->messageEntityEmail(
				offset : 66,
				length : 89,
			),
			$client->messageEntityBold(
				offset : 72,
				length : 28,
			),
			$client->messageEntityItalic(
				offset : 70,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 36,
				length : 80,
			),
			$client->messageEntityPre(
				offset : 5,
				length : 3,
				language : 'hwz2KfJu1bexTm5I',
			),
			$client->messageEntityTextUrl(
				offset : 45,
				length : 20,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 23,
				length : 45,
				user_id : 2887005257695248069,
			),
			$client->inputMessageEntityMentionName(
				offset : 85,
				length : 30,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 98,
				length : 93,
			),
			$client->messageEntityCashtag(
				offset : 48,
				length : 5,
			),
			$client->messageEntityUnderline(
				offset : 61,
				length : 35,
			),
			$client->messageEntityStrike(
				offset : 30,
				length : 43,
			),
			$client->messageEntityBankCard(
				offset : 7,
				length : 21,
			),
			$client->messageEntitySpoiler(
				offset : 81,
				length : 7,
			),
			$client->messageEntityCustomEmoji(
				offset : 58,
				length : 67,
				document_id : 3454988593628642617,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 60,
				length : 62,
			),
		),
		quote_offset : 15,
		todo_item_id : 84,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 32,
			length : 2,
		),
		$client->messageEntityMention(
			offset : 10,
			length : 20,
		),
		$client->messageEntityHashtag(
			offset : 32,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 100,
			length : 72,
		),
		$client->messageEntityUrl(
			offset : 40,
			length : 99,
		),
		$client->messageEntityEmail(
			offset : 55,
			length : 48,
		),
		$client->messageEntityBold(
			offset : 92,
			length : 52,
		),
		$client->messageEntityItalic(
			offset : 36,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 68,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 11,
			length : 22,
			language : 'KP3Rm2Xx4FTbhc8p',
		),
		$client->messageEntityTextUrl(
			offset : 90,
			length : 12,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 41,
			length : 62,
			user_id : -6302251710069439281,
		),
		$client->inputMessageEntityMentionName(
			offset : 17,
			length : 61,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 21,
			length : 51,
		),
		$client->messageEntityCashtag(
			offset : 71,
			length : 80,
		),
		$client->messageEntityUnderline(
			offset : 52,
			length : 41,
		),
		$client->messageEntityStrike(
			offset : 64,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 67,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 12,
			length : 38,
		),
		$client->messageEntityCustomEmoji(
			offset : 76,
			length : 5,
			document_id : -2199124369576868811,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 90,
			length : 12,
		),
	),
	ttl_period : 98,
);
```