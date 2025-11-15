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
	id : 18,
	from_id : 8579251455034544655,
	chat_id : -4512716727817569420,
	message : '3uCHwK1JASTb9YQi',
	pts : 50,
	pts_count : 56,
	date : 21,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -803141621053667637,
		),
		from_name : 'XVgxbPMtRf5Qv4wT',
		date : 16,
		channel_post : 83,
		post_author : 'Gd42whFTS1nCZY7O',
		saved_from_peer : $client->peerUser(
			user_id : -1408631123826858338,
		),
		saved_from_msg_id : 90,
		saved_from_id : $client->peerUser(
			user_id : -2968901721160237107,
		),
		saved_from_name : 'axRnZmSoj18lkyvL',
		saved_date : 73,
		psa_type : 'kcROUerBYn7w3j20',
	),
	via_bot_id : 9150057394151205920,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 68,
		reply_to_peer_id : $client->peerUser(
			user_id : 4637065398057031450,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -7531449273845873457,
			),
			from_name : 'ymIdRTq15nH0L4B9',
			date : 0,
			channel_post : 97,
			post_author : 'pmizX3ZwqbdQrk8J',
			saved_from_peer : $client->peerUser(
				user_id : -5116640335809387666,
			),
			saved_from_msg_id : 73,
			saved_from_id : $client->peerUser(
				user_id : 2438975689386051825,
			),
			saved_from_name : 'u31pfIwSUjQgBsPK',
			saved_date : 78,
			psa_type : '1WJd59YLt6hFosPe',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 18,
		quote_text : 'qvwEtOcXDr94UZTG',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 53,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 20,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 12,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 21,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'UjehDqQs5ZBwuVRd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 9,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 45,
				user_id : 8557412091760087432,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 6,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 31,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 14,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 20,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 95,
				document_id : 4164143525937057642,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 93,
			),
		),
		quote_offset : 67,
		todo_item_id : 50,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 56,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 73,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 45,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 30,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 18,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 59,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 1,
			language : 'elkpNG5A8ygj4QLT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 50,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : -4497624902350788127,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 87,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 10,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 59,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 66,
			document_id : 2653425813367992907,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 65,
		),
	),
	ttl_period : 46,
);
```