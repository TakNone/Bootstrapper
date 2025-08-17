# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 211

```tl
messageReplyHeader#6917560b flags:# reply_to_scheduled:flags.2?true forum_topic:flags.3?true quote:flags.9?true reply_to_msg_id:flags.4?int reply_to_peer_id:flags.0?Peer reply_from:flags.5?MessageFwdHeader reply_media:flags.8?MessageMedia reply_to_top_id:flags.1?int quote_text:flags.6?string quote_entities:flags.7?Vector<MessageEntity> quote_offset:flags.10?int todo_item_id:flags.11?int = MessageReplyHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **reply_to_scheduled** | [`flags.2?true`](type/true) | This is a reply to a scheduled message |
| **forum_topic** | [`flags.3?true`](type/true) | Whether this message was sent in a forum topic (except for the General topic) |
| **quote** | [`flags.9?true`](type/true) | Whether this message is quoting a part of another message |
| **reply_to_msg_id** | [`flags.4?int`](type/int) | ID of message to which this message is replying |
| **reply_to_peer_id** | [`flags.0?Peer`](type/Peer) | For replies sent in channel discussion threads of which the current user is not a member, the discussion group ID |
| **reply_from** | [`flags.5?MessageFwdHeader`](type/MessageFwdHeader) | When replying to a message sent by a certain peer to another chat, contains info about the peer that originally sent the message to that other chat |
| **reply_media** | [`flags.8?MessageMedia`](type/MessageMedia) | When replying to a media sent by a certain peer to another chat, contains the media of the replied-to message |
| **reply_to_top_id** | [`flags.1?int`](type/int) | ID of the message that started this message thread |
| **quote_text** | [`flags.6?string`](type/string) | Used to quote-reply to only a certain section (specified here) of the original message |
| **quote_entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text from the quote_text field |
| **quote_offset** | [`flags.10?int`](type/int) | Offset of the message quote_text within the original message (in UTF-16 code units) |
| **todo_item_id** | [`flags.11?int`](type/int) | NOTHING |

---

## Type

[MessageReplyHeader](type/MessageReplyHeader)

---

## Example

```php
$messageReplyHeader = $client->messageReplyHeader(
	reply_to_scheduled : true,
	forum_topic : true,
	quote : true,
	reply_to_msg_id : 23,
	reply_to_peer_id : $client->peerUser(
		user_id : 8605275624200093555,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 6065389680900273112,
		),
		from_name : 'YMxGeCtsWBcLaIUH',
		date : 11,
		channel_post : 47,
		post_author : 'Fa92f5sACzZL4DMc',
		saved_from_peer : $client->peerUser(
			user_id : 2363255826338183492,
		),
		saved_from_msg_id : 25,
		saved_from_id : $client->peerUser(
			user_id : 7711079191247577093,
		),
		saved_from_name : '6lznmAH95KRMgSUY',
		saved_date : 90,
		psa_type : 'zjciG6m9knXthNUI',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 25,
	quote_text : 'aPLT3WIudfE4BRUO',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 30,
			length : 64,
		),
		$client->messageEntityMention(
			offset : 15,
			length : 29,
		),
		$client->messageEntityHashtag(
			offset : 14,
			length : 40,
		),
		$client->messageEntityBotCommand(
			offset : 13,
			length : 3,
		),
		$client->messageEntityUrl(
			offset : 9,
			length : 40,
		),
		$client->messageEntityEmail(
			offset : 92,
			length : 10,
		),
		$client->messageEntityBold(
			offset : 1,
			length : 88,
		),
		$client->messageEntityItalic(
			offset : 4,
			length : 91,
		),
		$client->messageEntityCode(
			offset : 42,
			length : 68,
		),
		$client->messageEntityPre(
			offset : 77,
			length : 43,
			language : '9jRf0aE5GPvxngJs',
		),
		$client->messageEntityTextUrl(
			offset : 11,
			length : 36,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 64,
			length : 32,
			user_id : -5740548385917088474,
		),
		$client->inputMessageEntityMentionName(
			offset : 15,
			length : 97,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 55,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 86,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 84,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 29,
			length : 11,
		),
		$client->messageEntityBankCard(
			offset : 87,
			length : 20,
		),
		$client->messageEntitySpoiler(
			offset : 67,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 47,
			length : 46,
			document_id : 3004603669931119281,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 20,
			length : 42,
		),
	),
	quote_offset : 53,
	todo_item_id : 70,
);
```