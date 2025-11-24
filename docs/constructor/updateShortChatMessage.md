# updateShortChatMessage

**Description** : *Shortened constructor containing info on one new incoming text message from a chat*

**Layer** : 218

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
	id : 5,
	from_id : 8052467634661243459,
	chat_id : -4776002915250561872,
	message : 'Ro4SgOHLjdv5UxDn',
	pts : 59,
	pts_count : 63,
	date : 24,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 6665161228252916270,
		),
		from_name : '1geVY96Wo3NjTvR2',
		date : 14,
		channel_post : 40,
		post_author : 'xVj6Td3bcta9BEJH',
		saved_from_peer : $client->peerUser(
			user_id : -2630302859788318966,
		),
		saved_from_msg_id : 35,
		saved_from_id : $client->peerUser(
			user_id : -4074093836727625068,
		),
		saved_from_name : 'BIQCs0trAVOjHg4c',
		saved_date : 62,
		psa_type : '6w0XoSyAvHhLqx8Y',
	),
	via_bot_id : -1889222356532649202,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 86,
		reply_to_peer_id : $client->peerUser(
			user_id : 4050918205331938973,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -331673754304377215,
			),
			from_name : 'uNtbPCUfwvdZihFc',
			date : 100,
			channel_post : 70,
			post_author : 'xcflL6MPUsQhG9Ro',
			saved_from_peer : $client->peerUser(
				user_id : 7217182401849271118,
			),
			saved_from_msg_id : 12,
			saved_from_id : $client->peerUser(
				user_id : -8955848099107765619,
			),
			saved_from_name : 'GQgiLI2yTjeDsdUv',
			saved_date : 70,
			psa_type : '7l6ojReLPXyEf1hK',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 82,
		quote_text : 'rNndBwu8jXU2y1if',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 24,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 92,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 1,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 42,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 48,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 58,
				language : 'MJmvF9zg48BAC76b',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 98,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 99,
				user_id : -5686630470968283882,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 99,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 54,
				document_id : 6392446309958131290,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 99,
			),
		),
		quote_offset : 95,
		todo_item_id : 45,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 95,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 86,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 99,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 42,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 49,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 97,
			language : 'm5HK2UBz1dowhIP0',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 89,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : -3440715344747131246,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 63,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 95,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 57,
			document_id : 5881559531842912454,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 71,
		),
	),
	ttl_period : 2,
);
```