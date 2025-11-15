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
	id : 12,
	user_id : 879078751043006477,
	message : 'wB6yDbM82sYOE9VX',
	pts : 97,
	pts_count : 93,
	date : 92,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -7617673632764156071,
		),
		from_name : 'UwInyHp7FJsR26zE',
		date : 22,
		channel_post : 72,
		post_author : 'R3syqUVof5vatJHN',
		saved_from_peer : $client->peerUser(
			user_id : 7572610700369630364,
		),
		saved_from_msg_id : 54,
		saved_from_id : $client->peerUser(
			user_id : -1370583632710946057,
		),
		saved_from_name : '08WPgZX5deCOU1bw',
		saved_date : 2,
		psa_type : 'CZqz5IXWmKivG7EP',
	),
	via_bot_id : 5416570532952639549,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 57,
		reply_to_peer_id : $client->peerUser(
			user_id : 190109202423604334,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : -7973698338230054860,
			),
			from_name : 'TZALFO1pGKXVjIkn',
			date : 96,
			channel_post : 70,
			post_author : 'm21uEWk6lDgNjcMA',
			saved_from_peer : $client->peerUser(
				user_id : 7640344580361589803,
			),
			saved_from_msg_id : 59,
			saved_from_id : $client->peerUser(
				user_id : -5452940403647488042,
			),
			saved_from_name : 'xfPjYn5bNcuAC8mk',
			saved_date : 4,
			psa_type : 'Z3HIR6T5A8aBOeM7',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 3,
		quote_text : 'KfG0ed1Z6n25POWY',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 99,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 47,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 53,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 18,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 40,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 61,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 36,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 62,
				language : 'PFBoKvs6NaAml5YV',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 68,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 35,
				user_id : 6832351469966974187,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 81,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 53,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 60,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 64,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 52,
				document_id : 4961550147719756469,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
		),
		quote_offset : 80,
		todo_item_id : 59,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 21,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 73,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 11,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 18,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 18,
			language : '3MZJtRTo67OdgKs8',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 38,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : 8083608352681735324,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 37,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 78,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 62,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 87,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 55,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 56,
			document_id : 3839965156352131676,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 97,
		),
	),
	ttl_period : 64,
);
```