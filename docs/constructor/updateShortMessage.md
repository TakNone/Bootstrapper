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
	id : 47,
	user_id : 1112251182641882119,
	message : 'iw6PbR3xmHZFIW7Q',
	pts : 85,
	pts_count : 69,
	date : 41,
	fwd_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 5702387630124629386,
		),
		from_name : 'hqtNMdrj14Lm7JAa',
		date : 70,
		channel_post : 47,
		post_author : 'rANKfSPtTipEIUXx',
		saved_from_peer : $client->peerUser(
			user_id : -7007864811650111232,
		),
		saved_from_msg_id : 78,
		saved_from_id : $client->peerUser(
			user_id : 3948526926383539375,
		),
		saved_from_name : '5u4IwRJtaeHKhd0j',
		saved_date : 72,
		psa_type : 'HRNft6eATvzqk79C',
	),
	via_bot_id : 3372935459712228916,
	reply_to : $client->messageReplyHeader(
		reply_to_scheduled : true,
		forum_topic : true,
		quote : true,
		reply_to_ephemeral : true,
		reply_to_msg_id : 27,
		reply_to_peer_id : $client->peerUser(
			user_id : -6427655657729259415,
		),
		reply_from : $client->messageFwdHeader(
			imported : true,
			saved_out : true,
			from_id : $client->peerUser(
				user_id : 6335085838572164583,
			),
			from_name : 'ogjFPdNWADsxM5EJ',
			date : 81,
			channel_post : 10,
			post_author : 'DZvxk7qtaCFB1ozL',
			saved_from_peer : $client->peerUser(
				user_id : 4448322362683917786,
			),
			saved_from_msg_id : 0,
			saved_from_id : $client->peerUser(
				user_id : -4764826742182576212,
			),
			saved_from_name : 'NeoGxyY8OjatUzWM',
			saved_date : 55,
			psa_type : 'sG7VOBtR4NIJlHcM',
		),
		reply_media : $client->messageMediaEmpty(),
		reply_to_top_id : 17,
		quote_text : 'ULaEJWYMr2hfGpDX',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 58,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 40,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 22,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 44,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 29,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 2,
				language : 'SksVf9CZI4eXxYvd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 21,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : 4615543942746103505,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 65,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 93,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 56,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 60,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 16,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 40,
				document_id : -1070613000050293723,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 76,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 30,
				date : 67,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 55,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 56,
				old_text : 'zE8DWqiucaZnpSd7',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 54,
			),
		),
		quote_offset : 17,
		todo_item_id : 72,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 15,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 2,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 31,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 100,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 23,
			language : 'Hualg7rPBkJmqYpR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : -1801552307138301177,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 46,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 79,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 64,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 3,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 91,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 45,
			document_id : 7188762726266598075,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 52,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 26,
			date : 66,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 88,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 28,
			old_text : 'RfHOyAWZpX1l9g2e',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 52,
		),
	),
	ttl_period : 18,
);
```