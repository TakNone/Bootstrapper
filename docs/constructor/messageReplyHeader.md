# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 222

```tl
messageReplyHeader#6917560b flags:# reply_to_scheduled:flags.2?true forum_topic:flags.3?true quote:flags.9?true reply_to_msg_id:flags.4?int reply_to_peer_id:flags.0?Peer reply_from:flags.5?MessageFwdHeader reply_media:flags.8?MessageMedia reply_to_top_id:flags.1?int quote_text:flags.6?string quote_entities:flags.7?Vector<MessageEntity> quote_offset:flags.10?int todo_item_id:flags.11?int = MessageReplyHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	reply_to_msg_id : 28,
	reply_to_peer_id : $client->peerUser(
		user_id : 9137152209295451222,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -1864571656138785814,
		),
		from_name : 'wpoxSKVcNyIdtWag',
		date : 53,
		channel_post : 62,
		post_author : 'YKkBcti6S9urjWO4',
		saved_from_peer : $client->peerUser(
			user_id : -9220109542312345272,
		),
		saved_from_msg_id : 70,
		saved_from_id : $client->peerUser(
			user_id : 5050995741333342879,
		),
		saved_from_name : 'dhBr5nmFbj8N6A0T',
		saved_date : 93,
		psa_type : 'SwNrDboL0dmps9W2',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 89,
	quote_text : 'lbZCHerafw5Y8JOX',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 72,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 5,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 73,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 6,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 37,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 67,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 93,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 7,
			language : 'c1tpAI8iZYmdVwHj',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : 3440480860383309683,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 53,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 63,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 6,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 12,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 98,
			document_id : -3393042434066836934,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 94,
		),
	),
	quote_offset : 4,
	todo_item_id : 11,
);
```