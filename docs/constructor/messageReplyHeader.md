# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 218

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
| **todo_item_id** | [`flags.11?int`](type/int) | Can be set to reply to the specified item of a todo list » |

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
	reply_to_msg_id : 42,
	reply_to_peer_id : $client->peerUser(
		user_id : 540450362961196969,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -7310693711910874381,
		),
		from_name : 'Px01O8pNe6T5MnZ4',
		date : 20,
		channel_post : 46,
		post_author : 'W2aGlLRC81iNTXqp',
		saved_from_peer : $client->peerUser(
			user_id : 5677732009744830396,
		),
		saved_from_msg_id : 100,
		saved_from_id : $client->peerUser(
			user_id : 1395849017161185947,
		),
		saved_from_name : 'CUSAImWHx2ct7s9Z',
		saved_date : 28,
		psa_type : '4sbTJcN3MqYxjkRB',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 57,
	quote_text : 'gSfRpzsHjrLOWQcn',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 57,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 46,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 81,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 84,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 66,
			language : 'mCjM4lngNDXoPVH3',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 98,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 17,
			user_id : 2702844775407396215,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 70,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 95,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 6,
			document_id : -9001060490082448770,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 62,
		),
	),
	quote_offset : 45,
	todo_item_id : 97,
);
```