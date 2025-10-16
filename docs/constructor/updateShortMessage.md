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
	id : 85,
	user_id : -6863642712895253542,
	message : 'btxOVpMw9GzjUKrA',
	pts : 61,
	pts_count : 29,
	date : 55,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 8179595967634512130,
		),
		from_name : 'er51JkQVBvFxlDai',
		date : 97,
		channel_post : 95,
		post_author : '19bKACXUmDSh8Hpg',
		saved_from_peer : $client->peerUser(
			user_id : 4080919046579074014,
		),
		saved_from_msg_id : 51,
		saved_from_id : $client->peerUser(
			user_id : 5424914747849710502,
		),
		saved_from_name : 'oDrBflqF7jvZasc6',
		saved_date : 88,
		psa_type : '0c7IK6zUPnab5x14',
	),
	via_bot_id : 200973981391618524,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 0,
		reply_to_peer_id : $client->peerUser(
			user_id : -2441054105032642728,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'uHDqCWw6n04BePO5',
			date : 41,
			channel_post : 0,
			post_author : '5TjxbNLZ9EaOld17',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 72,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'IpcdVbCsELTA2UgP',
			saved_date : 100,
			psa_type : '0gnZPNjhtiTmFp93',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 82,
		quote_text : 'WVj9svUlG0B7o8MF',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 100,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 34,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 23,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 72,
				language : '7dcJWITE2e9wlvKy',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 35,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : 5007932880485051137,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 26,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 62,
				document_id : -1390809383729443122,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 69,
			),
		),
		quote_offset : 52,
		todo_item_id : 12,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 28,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 94,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 97,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 4,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 57,
			language : 'RUEZq3ky1bD5PnHF',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 7,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 58,
			user_id : -8195547243114234689,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 5,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 47,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 79,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 14,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 17,
			document_id : -8579387917954641273,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 51,
		),
	),
	ttl_period : 44,
);
```