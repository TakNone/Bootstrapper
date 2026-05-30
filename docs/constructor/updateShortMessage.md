# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 222

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
	id : 4,
	user_id : -8463874564208586785,
	message : 'eqiHTYVh8oLt7alC',
	pts : 89,
	pts_count : 38,
	date : 86,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -8125282799713754649,
		),
		from_name : 'pTjyCrtFgsRleiSd',
		date : 12,
		channel_post : 98,
		post_author : 'NEFKu4x9jDnTB5Sl',
		saved_from_peer : $client->peerUser(
			user_id : -4411765242315768958,
		),
		saved_from_msg_id : 11,
		saved_from_id : $client->peerUser(
			user_id : -1778130815308580037,
		),
		saved_from_name : 'qH710AZifL65sbTM',
		saved_date : 24,
		psa_type : 'TO1qV9Syb2favrox',
	),
	via_bot_id : -7466392418599930933,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 22,
		reply_to_peer_id : $client->peerUser(
			user_id : -3840601768750620542,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 6445927296231100878,
			),
			from_name : 'FsOcW8JlIfVHwLDz',
			date : 80,
			channel_post : 11,
			post_author : '1bONT0GuQB6yd4ma',
			saved_from_peer : $client->peerUser(
				user_id : -3462935799515071983,
			),
			saved_from_msg_id : 22,
			saved_from_id : $client->peerUser(
				user_id : 5677469760452668505,
			),
			saved_from_name : 'BiFN9JlL5aUg4ts0',
			saved_date : 7,
			psa_type : 'PKxEzv2RfYpg6cAq',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 0,
		quote_text : 'YI7Stau80HWPhbrA',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 20,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 1,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 6,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 86,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 90,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 33,
				language : 'Fi2Oc1JY9EyPzIUA',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 45,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : -4869606891004200262,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 44,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 69,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 38,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 97,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 4,
				document_id : -1757952074057194508,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 39,
			),
		),
		quote_offset : 69,
		todo_item_id : 95,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 37,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 26,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 50,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 48,
			language : '4rFa9Llh6JfMTIbt',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 7,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : 4030557119704487918,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 76,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 6,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 32,
			document_id : -1654120618756224053,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 46,
		),
	),
	ttl_period : 78,
);
```