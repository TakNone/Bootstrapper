# inputReplyToMessage

**Description** : *Reply to a message*

**Layer** : 211

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
	reply_to_msg_id : 3,
	top_msg_id : 94,
	reply_to_peer_id : $client->inputPeerEmpty(),
	quote_text : 'mbGi5M1KdBVwuTlo',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 44,
			length : 67,
		),
		$client->messageEntityMention(
			offset : 11,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 29,
			length : 42,
		),
		$client->messageEntityBotCommand(
			offset : 79,
			length : 23,
		),
		$client->messageEntityUrl(
			offset : 13,
			length : 23,
		),
		$client->messageEntityEmail(
			offset : 64,
			length : 24,
		),
		$client->messageEntityBold(
			offset : 34,
			length : 95,
		),
		$client->messageEntityItalic(
			offset : 96,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 36,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 40,
			length : 61,
			language : '08LEPCo2pUKJYDVy',
		),
		$client->messageEntityTextUrl(
			offset : 49,
			length : 19,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 2,
			length : 83,
			user_id : -3585753802562312722,
		),
		$client->inputMessageEntityMentionName(
			offset : 60,
			length : 48,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 51,
			length : 18,
		),
		$client->messageEntityCashtag(
			offset : 43,
			length : 19,
		),
		$client->messageEntityUnderline(
			offset : 59,
			length : 37,
		),
		$client->messageEntityStrike(
			offset : 88,
			length : 5,
		),
		$client->messageEntityBankCard(
			offset : 58,
			length : 20,
		),
		$client->messageEntitySpoiler(
			offset : 86,
			length : 2,
		),
		$client->messageEntityCustomEmoji(
			offset : 5,
			length : 26,
			document_id : 4361925751923134829,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 3,
			length : 16,
		),
	),
	quote_offset : 88,
	monoforum_peer_id : $client->inputPeerEmpty(),
	todo_item_id : 97,
);
```