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
	reply_to_msg_id : 73,
	top_msg_id : 53,
	reply_to_peer_id : $client->inputPeerEmpty(),
	quote_text : '8dqafWErvYFL5PUh',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 89,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 34,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 67,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 58,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 7,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 92,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 88,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 72,
			language : '0cpxNd1Ak6fMo7LP',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 55,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 92,
			user_id : -3994601478903754158,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 40,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 42,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 95,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 68,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 47,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -6245737686510367388,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 24,
		),
	),
	quote_offset : 29,
	monoforum_peer_id : $client->inputPeerEmpty(),
	todo_item_id : 83,
);
```