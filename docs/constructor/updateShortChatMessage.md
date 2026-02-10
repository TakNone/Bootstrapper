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
	id : 16,
	from_id : 8454875922958506280,
	chat_id : 3994349491695957548,
	message : 'BejDw2HZLx9lEpnv',
	pts : 57,
	pts_count : 12,
	date : 52,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -7101342526971178592,
		),
		from_name : 'lzdZaYH9oM82TKbN',
		date : 54,
		channel_post : 3,
		post_author : 'ZC4mt1LvWjREfsay',
		saved_from_peer : $client->peerUser(
			user_id : 1165918049598137608,
		),
		saved_from_msg_id : 68,
		saved_from_id : $client->peerUser(
			user_id : -7629993669600598751,
		),
		saved_from_name : 'mQqaZD7bvgMXdyLu',
		saved_date : 50,
		psa_type : '5yuLcIPjAtoQiBkv',
	),
	via_bot_id : -566513405997145260,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 84,
		reply_to_peer_id : $client->peerUser(
			user_id : -2317848184634408941,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 4836839281982789539,
			),
			from_name : '62xjtlQ9yDYNdpfZ',
			date : 87,
			channel_post : 30,
			post_author : 'y9vWMml71RqdXgu8',
			saved_from_peer : $client->peerUser(
				user_id : -8919068490892093251,
			),
			saved_from_msg_id : 73,
			saved_from_id : $client->peerUser(
				user_id : 845310664452595722,
			),
			saved_from_name : 'OdDGgVsXFLBoCbfl',
			saved_date : 75,
			psa_type : 'HjYTL4bukXv12US7',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 40,
		quote_text : '1gl8oLvjqnYEdk4W',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 0,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 28,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 41,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 38,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 48,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : 'OBts95gYzCJvIled',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 25,
				user_id : -5766202413268864118,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 28,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 4,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 15,
				document_id : 2631820976402644436,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 1,
			),
		),
		quote_offset : 55,
		todo_item_id : 82,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 97,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 95,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 78,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 43,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 4,
			language : 'YMVHfKG5jxy7TJL3',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 29,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 55,
			user_id : -6749130267072380473,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 43,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 92,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 63,
			document_id : 6396013091050101380,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 86,
		),
	),
	ttl_period : 24,
);
```