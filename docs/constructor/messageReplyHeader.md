# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 214

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
	reply_to_msg_id : 81,
	reply_to_peer_id : $client->peerUser(
		user_id : 1086069634651447980,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -5056500613247304484,
		),
		from_name : 'OEqXi6QdIeFJAx47',
		date : 25,
		channel_post : 10,
		post_author : 'rIivujcm2UPadAJn',
		saved_from_peer : $client->peerUser(
			user_id : -7070655708548279877,
		),
		saved_from_msg_id : 6,
		saved_from_id : $client->peerUser(
			user_id : 7498267776472388790,
		),
		saved_from_name : 'Yq9liP1fdnOxWTwb',
		saved_date : 94,
		psa_type : 'YlShPGEfcNux5nCU',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 56,
	quote_text : '4BbYE9vHlUJZGxAs',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 64,
			length : 9,
		),
		$client->messageEntityMention(
			offset : 84,
			length : 9,
		),
		$client->messageEntityHashtag(
			offset : 67,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 74,
			length : 20,
		),
		$client->messageEntityUrl(
			offset : 57,
			length : 15,
		),
		$client->messageEntityEmail(
			offset : 98,
			length : 3,
		),
		$client->messageEntityBold(
			offset : 5,
			length : 74,
		),
		$client->messageEntityItalic(
			offset : 13,
			length : 19,
		),
		$client->messageEntityCode(
			offset : 56,
			length : 79,
		),
		$client->messageEntityPre(
			offset : 82,
			length : 70,
			language : 'jRJ9b51LtPZx7fcV',
		),
		$client->messageEntityTextUrl(
			offset : 28,
			length : 63,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 64,
			length : 85,
			user_id : -8031921490528738839,
		),
		$client->inputMessageEntityMentionName(
			offset : 44,
			length : 9,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 32,
			length : 28,
		),
		$client->messageEntityCashtag(
			offset : 18,
			length : 55,
		),
		$client->messageEntityUnderline(
			offset : 75,
			length : 35,
		),
		$client->messageEntityStrike(
			offset : 11,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 7,
			length : 99,
		),
		$client->messageEntitySpoiler(
			offset : 69,
			length : 55,
		),
		$client->messageEntityCustomEmoji(
			offset : 96,
			length : 3,
			document_id : -1784314026955183772,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 70,
			length : 83,
		),
	),
	quote_offset : 6,
	todo_item_id : 32,
);
```