# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 214

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
	id : 69,
	user_id : -8516493635587498058,
	message : 'kpuGCDgze2mNsa83',
	pts : 73,
	pts_count : 86,
	date : 59,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -3157522156081343950,
		),
		from_name : '2yHkB59LftMnFAXV',
		date : 5,
		channel_post : 13,
		post_author : 'J6FdugC3vHQSqy4k',
		saved_from_peer : $client->peerUser(
			user_id : 1601386346539981801,
		),
		saved_from_msg_id : 19,
		saved_from_id : $client->peerUser(
			user_id : 4687532345423206831,
		),
		saved_from_name : 'TfviDj61ur7QWhMU',
		saved_date : 61,
		psa_type : 'AGcIzSYKEMU3Feb9',
	),
	via_bot_id : -4234825142490326733,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 29,
		reply_to_peer_id : $client->peerUser(
			user_id : -3767057549634363741,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'agoTV5hfNDePZ7sl',
			date : 94,
			channel_post : 23,
			post_author : 'tu8aowFlZUNxIsV0',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 41,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'WDyOvJdRC3ok6X4n',
			saved_date : 79,
			psa_type : 'YKZyd83BaxpjRNIh',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 46,
		quote_text : 'CnGbhYXeZKrA2m9J',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 64,
				length : 33,
			),
			$client->messageEntityMention(
				offset : 45,
				length : 38,
			),
			$client->messageEntityHashtag(
				offset : 27,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 76,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 39,
				length : 5,
			),
			$client->messageEntityEmail(
				offset : 45,
				length : 54,
			),
			$client->messageEntityBold(
				offset : 94,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 74,
				length : 10,
			),
			$client->messageEntityCode(
				offset : 95,
				length : 52,
			),
			$client->messageEntityPre(
				offset : 55,
				length : 0,
				language : 'MCx8DFoqPctbWOGY',
			),
			$client->messageEntityTextUrl(
				offset : 79,
				length : 57,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 36,
				length : 7,
				user_id : 8479514228810058335,
			),
			$client->inputMessageEntityMentionName(
				offset : 7,
				length : 60,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 77,
				length : 69,
			),
			$client->messageEntityCashtag(
				offset : 3,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 68,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 20,
				length : 36,
			),
			$client->messageEntityBankCard(
				offset : 66,
				length : 45,
			),
			$client->messageEntitySpoiler(
				offset : 91,
				length : 57,
			),
			$client->messageEntityCustomEmoji(
				offset : 31,
				length : 30,
				document_id : -7061900776793872171,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 70,
				length : 70,
			),
		),
		quote_offset : 25,
		todo_item_id : 67,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 79,
			length : 70,
		),
		$client->messageEntityMention(
			offset : 49,
			length : 69,
		),
		$client->messageEntityHashtag(
			offset : 98,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 5,
			length : 93,
		),
		$client->messageEntityUrl(
			offset : 25,
			length : 36,
		),
		$client->messageEntityEmail(
			offset : 40,
			length : 38,
		),
		$client->messageEntityBold(
			offset : 45,
			length : 80,
		),
		$client->messageEntityItalic(
			offset : 94,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 80,
			length : 38,
		),
		$client->messageEntityPre(
			offset : 36,
			length : 34,
			language : 'Gf8Noc5dw2QCUFMJ',
		),
		$client->messageEntityTextUrl(
			offset : 24,
			length : 65,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 1,
			length : 93,
			user_id : 4629601560076332933,
		),
		$client->inputMessageEntityMentionName(
			offset : 27,
			length : 17,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 94,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 19,
			length : 9,
		),
		$client->messageEntityUnderline(
			offset : 35,
			length : 15,
		),
		$client->messageEntityStrike(
			offset : 9,
			length : 20,
		),
		$client->messageEntityBankCard(
			offset : 98,
			length : 52,
		),
		$client->messageEntitySpoiler(
			offset : 95,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 96,
			length : 34,
			document_id : -1679054506166428388,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 47,
			length : 85,
		),
	),
	ttl_period : 29,
);
```