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
	id : 98,
	user_id : -6790506587560416754,
	message : '2lsfIJBS5MLcGAxP',
	pts : 5,
	pts_count : 35,
	date : 96,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -6391324701780794211,
		),
		from_name : 'BjuMidVGKh2plveN',
		date : 88,
		channel_post : 29,
		post_author : 'qy9iLhOj25FubGm3',
		saved_from_peer : $client->peerUser(
			user_id : 5646178891048845587,
		),
		saved_from_msg_id : 85,
		saved_from_id : $client->peerUser(
			user_id : 5785485276841071279,
		),
		saved_from_name : '0f6ztcYNsV7AEqh3',
		saved_date : 42,
		psa_type : 'DPwRYedr5nOafuA6',
	),
	via_bot_id : -7702317819462390736,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 99,
		reply_to_peer_id : $client->peerUser(
			user_id : -1652574320007952711,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 4461501746136423658,
			),
			from_name : '8CyHx1zo3wL7tMQr',
			date : 42,
			channel_post : 21,
			post_author : 'p4Y3jM9eDP6ucWx2',
			saved_from_peer : $client->peerUser(
				user_id : -6814817409829165072,
			),
			saved_from_msg_id : 6,
			saved_from_id : $client->peerUser(
				user_id : 212529783949060170,
			),
			saved_from_name : 'YNIb0J5W4etmnikF',
			saved_date : 47,
			psa_type : 'zyxL6YBHqUSZi0Vo',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 55,
		quote_text : 'QnaSBo9ZmWN3H6AO',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 73,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 5,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 26,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 64,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 75,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 37,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : 'GENV2l9PJ30Lij8z',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 55,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : 3542445158287721502,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 1,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 66,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 41,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 87,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 2,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 79,
				document_id : -1261014818433307187,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 71,
			),
		),
		quote_offset : 19,
		todo_item_id : 58,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 57,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 30,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 6,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 100,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 33,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 54,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 10,
			language : 'H2P9SOkmedRCYsnp',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 53,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : -8432246525516069096,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 80,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 6,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 84,
			document_id : -4975456015103845736,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 42,
		),
	),
	ttl_period : 90,
);
```