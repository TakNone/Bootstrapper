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
	id : 88,
	from_id : -4662025954696608585,
	chat_id : -1490723145297984664,
	message : 'Ysq2bBfRVNFnckpJ',
	pts : 32,
	pts_count : 76,
	date : 68,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 7338083456077268449,
		),
		from_name : 'Y6z8iV5uv9tHeN0g',
		date : 19,
		channel_post : 48,
		post_author : 'caf7xi3zpYn82TZJ',
		saved_from_peer : $client->peerUser(
			user_id : -4803507314204844355,
		),
		saved_from_msg_id : 27,
		saved_from_id : $client->peerUser(
			user_id : -1730974695152009311,
		),
		saved_from_name : 'jxPm0i5kCwQhvDFI',
		saved_date : 5,
		psa_type : 'oBcVgkUKYw9IbMJ1',
	),
	via_bot_id : 2235984898707129419,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 35,
		reply_to_peer_id : $client->peerUser(
			user_id : 7213650004713063746,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 4790916767964091190,
			),
			from_name : 'crCuhAT93wLsIyNe',
			date : 65,
			channel_post : 1,
			post_author : 'pUy3c7TK1a4BEoSW',
			saved_from_peer : $client->peerUser(
				user_id : -2292497290581872680,
			),
			saved_from_msg_id : 21,
			saved_from_id : $client->peerUser(
				user_id : -5656458795065713682,
			),
			saved_from_name : 'HehNrRz8FZbctjgy',
			saved_date : 37,
			psa_type : 'z4iYc9S0Udp32NxM',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 0,
		quote_text : 'bDzOLEK6uTafJog1',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 100,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 7,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 70,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 83,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 13,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 27,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 20,
				language : 'BcIq2XyDWZtnxU8z',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : -1295902292864359776,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 47,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 19,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 0,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 39,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 9,
				document_id : -5499338458701911257,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 42,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 61,
				date : 41,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 38,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 96,
				old_text : 'kjGiwd06ulC84ZVT',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 82,
			),
		),
		quote_offset : 3,
		todo_item_id : 98,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 89,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 27,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 97,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 64,
			language : '4E6zUxqDk2viOcGW',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 26,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : -7734798870524944937,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 14,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 20,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 71,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 38,
			document_id : 6250583454245785238,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 71,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 48,
			date : 50,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 78,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 99,
			old_text : 'w6MRBHbKDJU0nlcy',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 19,
		),
	),
	ttl_period : 31,
);
```