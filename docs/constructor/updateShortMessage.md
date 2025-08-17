# updateShortMessage

**Description** : *Info about a message sent to (received from) another user*

**Layer** : 211

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
	id : 33,
	user_id : -5958736583312599139,
	message : 'MEFoYPZq1TBvGSWl',
	pts : 5,
	pts_count : 81,
	date : 17,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -5923948494448329806,
		),
		from_name : 'bgGQdn27LRWvlPoS',
		date : 74,
		channel_post : 75,
		post_author : '0SK3OWY9QXFBn7Df',
		saved_from_peer : $client->peerUser(
			user_id : -7251506571438542779,
		),
		saved_from_msg_id : 31,
		saved_from_id : $client->peerUser(
			user_id : 8893093343803219050,
		),
		saved_from_name : '7huP3WZESmr5x14U',
		saved_date : 54,
		psa_type : 'NO7l2nsE8xDoH4jQ',
	),
	via_bot_id : 8117210874064755450,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_msg_id : 56,
		reply_to_peer_id : $client->peerUser(
			user_id : -4076547991992591808,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(...),
			from_name : 'weoLnzcdSOpM9KTE',
			date : 75,
			channel_post : 50,
			post_author : 'jr3R4Dti9sxu1cTB',
			saved_from_peer : $client->peerUser(...),
			saved_from_msg_id : 96,
			saved_from_id : $client->peerUser(...),
			saved_from_name : 'Xaf1HDvPxr6tw3I4',
			saved_date : 88,
			psa_type : 'KbYeLNMsryjQo4Vq',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 26,
		quote_text : 'resV4lLXIhU2D8Hw',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 53,
				length : 29,
			),
			$client->messageEntityMention(
				offset : 53,
				length : 32,
			),
			$client->messageEntityHashtag(
				offset : 81,
				length : 3,
			),
			$client->messageEntityBotCommand(
				offset : 98,
				length : 64,
			),
			$client->messageEntityUrl(
				offset : 35,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 53,
				length : 21,
			),
			$client->messageEntityBold(
				offset : 5,
				length : 68,
			),
			$client->messageEntityItalic(
				offset : 14,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 71,
				length : 5,
			),
			$client->messageEntityPre(
				offset : 87,
				length : 91,
				language : 'DP7OpbRSWUxZFvMY',
			),
			$client->messageEntityTextUrl(
				offset : 75,
				length : 85,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 82,
				length : 69,
				user_id : -4782791424457909775,
			),
			$client->inputMessageEntityMentionName(
				offset : 71,
				length : 86,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 5,
				length : 48,
			),
			$client->messageEntityCashtag(
				offset : 54,
				length : 48,
			),
			$client->messageEntityUnderline(
				offset : 36,
				length : 21,
			),
			$client->messageEntityStrike(
				offset : 49,
				length : 7,
			),
			$client->messageEntityBankCard(
				offset : 33,
				length : 50,
			),
			$client->messageEntitySpoiler(
				offset : 57,
				length : 14,
			),
			$client->messageEntityCustomEmoji(
				offset : 59,
				length : 1,
				document_id : -85998984487325650,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 72,
				length : 63,
			),
		),
		quote_offset : 70,
		todo_item_id : 27,
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 95,
			length : 0,
		),
		$client->messageEntityMention(
			offset : 46,
			length : 74,
		),
		$client->messageEntityHashtag(
			offset : 69,
			length : 67,
		),
		$client->messageEntityBotCommand(
			offset : 31,
			length : 90,
		),
		$client->messageEntityUrl(
			offset : 76,
			length : 34,
		),
		$client->messageEntityEmail(
			offset : 38,
			length : 42,
		),
		$client->messageEntityBold(
			offset : 36,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 11,
			length : 20,
		),
		$client->messageEntityCode(
			offset : 68,
			length : 78,
		),
		$client->messageEntityPre(
			offset : 35,
			length : 38,
			language : 'SfaBUzGIFoOxD9JP',
		),
		$client->messageEntityTextUrl(
			offset : 14,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 74,
			length : 100,
			user_id : 7246408288239671965,
		),
		$client->inputMessageEntityMentionName(
			offset : 71,
			length : 2,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 54,
			length : 95,
		),
		$client->messageEntityCashtag(
			offset : 81,
			length : 59,
		),
		$client->messageEntityUnderline(
			offset : 41,
			length : 66,
		),
		$client->messageEntityStrike(
			offset : 77,
			length : 51,
		),
		$client->messageEntityBankCard(
			offset : 41,
			length : 45,
		),
		$client->messageEntitySpoiler(
			offset : 56,
			length : 40,
		),
		$client->messageEntityCustomEmoji(
			offset : 2,
			length : 14,
			document_id : 7801547317921943203,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 96,
			length : 56,
		),
	),
	ttl_period : 30,
);
```