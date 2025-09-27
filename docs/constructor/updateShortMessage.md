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
	id : 36,
	user_id : 2031846325368199031,
	message : 'Vqx0k3FjvDIm9WdY',
	pts : 49,
	pts_count : 17,
	date : 44,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -8674162023629226498,
		),
		from_name : '1fdlbRnhH2V9ZOSY',
		date : 15,
		channel_post : 98,
		post_author : 'srHYQ0gTSDxyRVXw',
		saved_from_peer : $client->peerUser(
			user_id : -909048469873735840,
		),
		saved_from_msg_id : 2,
		saved_from_id : $client->peerUser(
			user_id : -1067720799516720624,
		),
		saved_from_name : '3RS2cdJO8DmXxIgY',
		saved_date : 77,
		psa_type : 'r5WhGeSNkImpVfui',
	),
	via_bot_id : -6645883674119939101,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 36,
		reply_to_peer_id : $client->peerUser(
			user_id : -8312951810178845879,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'hNJwtf5jFLCrElkB',
			date : 46,
			channel_post : 87,
			post_author : 'frdpmCFcRg5IQJk6',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 95,
			saved_from_id : $client->peerUser(...),
			saved_from_name : '5RM1ejHo24f9ahUx',
			saved_date : 64,
			psa_type : 'S9UCgyOwN70Bi6JA',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 80,
		quote_text : 'kmHc3ayL2MdfeZsO',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 63,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 0,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 66,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 58,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 50,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 34,
				language : 'mrFqayR1sxC3ik6K',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 95,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 63,
				user_id : 727254944989955630,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 99,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 73,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 45,
				document_id : -4458269075220828249,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 53,
			),
		),
		quote_offset : 90,
		todo_item_id : 69,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 48,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 19,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 14,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 17,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 65,
			language : 'stTaCPplGv7zbVRy',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 83,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : 4342443545368618124,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 91,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 66,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 26,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 52,
			document_id : -7025900770630422671,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 55,
		),
	),
	ttl_period : 3,
);
```