# inputReplyToMessage

**Description** : *Reply to a message*

**Layer** : 214

```tl
inputReplyToMessage#869fbe10 flags:# reply_to_msg_id:int top_msg_id:flags.0?int reply_to_peer_id:flags.1?InputPeer quote_text:flags.2?string quote_entities:flags.3?Vector<MessageEntity> quote_offset:flags.4?int monoforum_peer_id:flags.5?InputPeer todo_item_id:flags.6?int = InputReplyTo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>reply_to_msg_id</mark> | [`int`](type/int) | The message ID to reply to |
| **top_msg_id** | [`flags.0?int`](type/int) | This field must contain the topic ID only when replying to messages in forum topics different from the "General" topic (i.e. reply_to_msg_id is set and reply_to_msg_id != topicID and topicID != 1).  If the replied-to message is deleted before the method finishes execution, the value in this field will be used to send the message to the correct topic, instead of the "General" topic |
| **reply_to_peer_id** | [`flags.1?InputPeer`](type/InputPeer) | Used to reply to messages sent to another chat (specified here), can only be used for non-protected chats and messages |
| **quote_text** | [`flags.2?string`](type/string) | Used to quote-reply to only a certain section (specified here) of the original message. The maximum UTF-8 length for quotes is specified in the quote_length_max config key |
| **quote_entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text from the quote_text field |
| **quote_offset** | [`flags.4?int`](type/int) | Offset of the message quote_text within the original message (in UTF-16 code units) |
| **monoforum_peer_id** | [`flags.5?InputPeer`](type/InputPeer) | NOTHING |
| **todo_item_id** | [`flags.6?int`](type/int) | NOTHING |

---

## Type

[InputReplyTo](type/InputReplyTo)

---

## Example

```php
$inputReplyTo = $client->inputReplyToMessage(
	reply_to_msg_id : 79,
	top_msg_id : 62,
	reply_to_peer_id : $client->inputPeerEmpty(),
	quote_text : 'RU8CcPl0d3FyrbX2',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 88,
			length : 27,
		),
		$client->messageEntityMention(
			offset : 68,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 80,
			length : 11,
		),
		$client->messageEntityBotCommand(
			offset : 33,
			length : 78,
		),
		$client->messageEntityUrl(
			offset : 94,
			length : 56,
		),
		$client->messageEntityEmail(
			offset : 8,
			length : 52,
		),
		$client->messageEntityBold(
			offset : 63,
			length : 96,
		),
		$client->messageEntityItalic(
			offset : 88,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 56,
			length : 59,
		),
		$client->messageEntityPre(
			offset : 2,
			length : 28,
			language : '2N8uhWZFHeCfyl05',
		),
		$client->messageEntityTextUrl(
			offset : 45,
			length : 25,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 59,
			length : 36,
			user_id : -3735727447580683013,
		),
		$client->inputMessageEntityMentionName(
			offset : 63,
			length : 98,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 82,
			length : 43,
		),
		$client->messageEntityCashtag(
			offset : 71,
			length : 66,
		),
		$client->messageEntityUnderline(
			offset : 1,
			length : 96,
		),
		$client->messageEntityStrike(
			offset : 58,
			length : 62,
		),
		$client->messageEntityBankCard(
			offset : 41,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 43,
			length : 12,
		),
		$client->messageEntityCustomEmoji(
			offset : 68,
			length : 99,
			document_id : 2349291011296589240,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 24,
			length : 60,
		),
	),
	quote_offset : 90,
	monoforum_peer_id : $client->inputPeerEmpty(),
	todo_item_id : 100,
);
```