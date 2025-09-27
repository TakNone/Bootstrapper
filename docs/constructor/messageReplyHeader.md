# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 216

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
	reply_to_msg_id : 55,
	reply_to_peer_id : $client->peerUser(
		user_id : -3150158425023844541,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -7898210882069340242,
		),
		from_name : 'VbFQCGysKea9kn51',
		date : 80,
		channel_post : 11,
		post_author : 'gXYhxwbWeJAsqEHu',
		saved_from_peer : $client->peerUser(
			user_id : 7927484359795891628,
		),
		saved_from_msg_id : 12,
		saved_from_id : $client->peerUser(
			user_id : 3045725580287934771,
		),
		saved_from_name : 'rBk1J2TlaFsO9nu4',
		saved_date : 61,
		psa_type : '863xW1ZLczmjhbUr',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 33,
	quote_text : 'dEmx9rl41eCZJYHa',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 67,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 51,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 71,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 66,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 40,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 46,
			language : '9EGWAOsQ0x1n6rMf',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 94,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 57,
			user_id : 5498247969569318951,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 36,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 65,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 17,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 17,
			document_id : 169585047272553230,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 86,
		),
	),
	quote_offset : 93,
	todo_item_id : 0,
);
```