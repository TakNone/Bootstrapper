# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 218

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
	id : 9,
	user_id : 2607692581397291682,
	message : 'ix2tOZrlK9MbGpaD',
	pts : 28,
	pts_count : 75,
	date : 6,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -5019618875409128604,
		),
		from_name : 'MQUkJ7dnXGzAScRs',
		date : 40,
		channel_post : 88,
		post_author : 'CPm81lJzO6MTf73V',
		saved_from_peer : $client->peerUser(
			user_id : -5267784016228496513,
		),
		saved_from_msg_id : 56,
		saved_from_id : $client->peerUser(
			user_id : 9100374079996871478,
		),
		saved_from_name : 'TEj79XPvIm6MhcGu',
		saved_date : 88,
		psa_type : 'UwQ3jXbVsS6RdKPC',
	),
	via_bot_id : -334366534205254451,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 93,
		reply_to_peer_id : $client->peerUser(
			user_id : 1085954451428664043,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 2334208265259770976,
			),
			from_name : 'NV5pxvLDQZRKls2z',
			date : 61,
			channel_post : 54,
			post_author : 'yvBcARWdwQiF276J',
			saved_from_peer : $client->peerUser(
				user_id : 8629511952187881022,
			),
			saved_from_msg_id : 91,
			saved_from_id : $client->peerUser(
				user_id : 7933792563346444636,
			),
			saved_from_name : 'ep0uB9mUxMWH7Z3T',
			saved_date : 48,
			psa_type : 'G9wnorzqVv8Mdf7e',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 91,
		quote_text : 'tNaxPvi1u3pyDMsH',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 92,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 22,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 83,
				language : 'vnVdjzxAOX8BRhmf',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 79,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : 8242902365880231178,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 73,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 12,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 57,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 56,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 97,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 63,
				document_id : 8946513103363545925,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 49,
			),
		),
		quote_offset : 78,
		todo_item_id : 10,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 30,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 42,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 91,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 19,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 80,
			language : 'a7oY0y5LwzbTjxu2',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 91,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : 2622011386756370864,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 85,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 89,
			document_id : 6442650635305928742,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 41,
		),
	),
	ttl_period : 50,
);
```