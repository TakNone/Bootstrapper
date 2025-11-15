# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 216

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
	id : 57,
	user_id : 1317898623238734896,
	message : 'hxruKekAD2vO8yWq',
	pts : 45,
	pts_count : 77,
	date : 25,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -4944061797135436363,
		),
		from_name : 'oI25eAcj1MKtaVLG',
		date : 53,
		channel_post : 66,
		post_author : 'sZNX49nKotvIEkhO',
		saved_from_peer : $client->peerUser(
			user_id : 2209933593893111992,
		),
		saved_from_msg_id : 59,
		saved_from_id : $client->peerUser(
			user_id : -4500314103016460731,
		),
		saved_from_name : 't3FrhMeLfnbZlC4W',
		saved_date : 17,
		psa_type : 'amopFE1DGIdzi6cT',
	),
	via_bot_id : 1111301919787707129,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 25,
		reply_to_peer_id : $client->peerUser(
			user_id : -54604768020160350,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : '9Awixju0av74otlb',
			date : 71,
			channel_post : 50,
			post_author : 'qj91eHvLkCb2AO0f',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 96,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'MyE0m8QXk9phnuoa',
			saved_date : 87,
			psa_type : '4VpYWN0wEKLqjf9S',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 25,
		quote_text : 'bpIy8Gs24n9TmMKL',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 80,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 67,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 70,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 8,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 20,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 85,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 2,
				language : 'COnuiKfzBN23JW5D',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 33,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : 2243154937961122212,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 55,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 52,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 0,
				document_id : 6272064269245433996,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 0,
			),
		),
		quote_offset : 96,
		todo_item_id : 95,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 21,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 70,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 27,
			language : 'nzDtJFErH4lTciKY',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 96,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 97,
			user_id : -7028737968377758803,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 20,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 1,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 89,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 2,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 77,
			document_id : -5524580737398583875,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 66,
		),
	),
	ttl_period : 19,
);
```