# inputReplyToMessage

**Description** : *Reply to a message*

**Layer** : 227

```tl
inputReplyToMessage#3bd4b7c2 flags:# reply_to_msg_id:int top_msg_id:flags.0?int reply_to_peer_id:flags.1?InputPeer quote_text:flags.2?string quote_entities:flags.3?Vector<MessageEntity> quote_offset:flags.4?int monoforum_peer_id:flags.5?InputPeer todo_item_id:flags.6?int poll_option:flags.7?bytes = InputReplyTo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>reply_to_msg_id</mark> | [`int`](type/int) | The message ID to reply to |
| **top_msg_id** | [`flags.0?int`](type/int) | This field must contain the topic ID only when replying to messages in forum topics different from the "General" topic (i.e. reply_to_msg_id is set and reply_to_msg_id != topicID and topicID != 1).  If the replied-to message is deleted before the method finishes execution, the value in this field will be used to send the message to the correct topic, instead of the "General" topic |
| **reply_to_peer_id** | [`flags.1?InputPeer`](type/InputPeer) | Used to reply to messages sent to another chat (specified here), can only be used for non-protected chats and messages |
| **quote_text** | [`flags.2?string`](type/string) | Used to quote-reply to only a certain section (specified here) of the original message. The maximum UTF-8 length for quotes is specified in the quote_length_max config key |
| **quote_entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text from the quote_text field |
| **quote_offset** | [`flags.4?int`](type/int) | Offset of the message quote_text within the original message (in UTF-16 code units) |
| **monoforum_peer_id** | [`flags.5?InputPeer`](type/InputPeer) | Must be set to the ID of the topic when replying to a message within a monoforum topic |
| **todo_item_id** | [`flags.6?int`](type/int) | Can be set to reply to the specified item of a todo list » |
| **poll_option** | [`flags.7?bytes`](type/bytes) | NOTHING |

---

## Type

[InputReplyTo](type/InputReplyTo)

---

## Example

```php
$inputReplyTo = $client->inputReplyToMessage(
	reply_to_msg_id : 6,
	top_msg_id : 72,
	reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	quote_text : 'fXJlN0jdrLPySeF4',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 60,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 17,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 59,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 58,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 33,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 14,
			language : 'DnQucOfeHIgBLCkj',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 43,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : -9055741176014582346,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 97,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 37,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 55,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 4,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 20,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 3,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 47,
			document_id : 5246792556297529328,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 53,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 54,
			date : 31,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 73,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 95,
			old_text : 'fnTRLXF7zW0ZwIVg',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 17,
		),
	),
	quote_offset : 43,
	monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	todo_item_id : 81,
	poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```