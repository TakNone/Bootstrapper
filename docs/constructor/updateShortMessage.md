# updateShortMessage

**Description** : *Info about a message sent to \(received from\) another user*

**Layer** : 227

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
	id : 40,
	user_id : 8738144210428825283,
	message : 'drcYiA84OKCW93tm',
	pts : 89,
	pts_count : 48,
	date : 57,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -8562263968771743633,
		),
		from_name : '4CnZ92gJqYoAULFE',
		date : 13,
		channel_post : 25,
		post_author : '6CsX3FgUdV0qIatH',
		saved_from_peer : $client->peerUser(
			user_id : 2818556866337876679,
		),
		saved_from_msg_id : 64,
		saved_from_id : $client->peerUser(
			user_id : -6880810024840450687,
		),
		saved_from_name : 'SJI0yKoimFl69LxO',
		saved_date : 88,
		psa_type : 'kMdGRC5wAEus2g8p',
	),
	via_bot_id : -5553889327928961546,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 100,
		reply_to_peer_id : $client->peerUser(
			user_id : -4614353321706162023,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 6337722806613070120,
			),
			from_name : 'rQbRl3z4qudNEaiV',
			date : 51,
			channel_post : 14,
			post_author : 'O0ab7WUvnJ3gfIzs',
			saved_from_peer : $client->peerUser(
				user_id : -2501585710763510735,
			),
			saved_from_msg_id : 7,
			saved_from_id : $client->peerUser(
				user_id : -6222160029677446042,
			),
			saved_from_name : 'hKTUeLH9nz6i71IB',
			saved_date : 14,
			psa_type : 'optXLGrK6y5ZezO4',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 72,
		quote_text : 'ECGPFVfOgkvjSp3w',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 70,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 85,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 36,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 74,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 60,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 7,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 33,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 63,
				language : 'I9tfLvU3xnjgEP1R',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 50,
				user_id : -4438172000686775426,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 38,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 88,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 3,
				document_id : -7182176569089680906,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 49,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 27,
				date : 5,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 2,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 12,
				old_text : '8OIFQhqReCSw2MGn',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 14,
			),
		),
		quote_offset : 13,
		todo_item_id : 21,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 32,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 72,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 17,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 85,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 16,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 43,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 0,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 93,
			language : 'ofOw5FGnTg69vmye',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 24,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : 1885297385760744341,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 72,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 90,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 40,
			document_id : 6332870635995898714,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 35,
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
			date : 76,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 18,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 100,
			old_text : 'Vy6qKn2ux8iaGDJg',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 10,
		),
	),
	ttl_period : 11,
);
```