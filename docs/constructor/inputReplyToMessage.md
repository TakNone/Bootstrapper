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
	reply_to_msg_id : 22,
	top_msg_id : 28,
	reply_to_peer_id : $client->inputPeerEmpty(),
	quote_text : 'Bj3GrLiMsceOSwfH',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 12,
			length : 40,
		),
		$client->messageEntityMention(
			offset : 35,
			length : 20,
		),
		$client->messageEntityHashtag(
			offset : 25,
			length : 3,
		),
		$client->messageEntityBotCommand(
			offset : 16,
			length : 12,
		),
		$client->messageEntityUrl(
			offset : 23,
			length : 79,
		),
		$client->messageEntityEmail(
			offset : 22,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 38,
			length : 52,
		),
		$client->messageEntityItalic(
			offset : 18,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 96,
			length : 54,
		),
		$client->messageEntityPre(
			offset : 46,
			length : 50,
			language : 'QHkt1E4SDbYjLM7a',
		),
		$client->messageEntityTextUrl(
			offset : 53,
			length : 11,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 37,
			length : 67,
			user_id : -1716657746060202057,
		),
		$client->inputMessageEntityMentionName(
			offset : 91,
			length : 35,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 89,
			length : 15,
		),
		$client->messageEntityCashtag(
			offset : 30,
			length : 83,
		),
		$client->messageEntityUnderline(
			offset : 34,
			length : 95,
		),
		$client->messageEntityStrike(
			offset : 13,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 95,
			length : 74,
		),
		$client->messageEntitySpoiler(
			offset : 26,
			length : 31,
		),
		$client->messageEntityCustomEmoji(
			offset : 54,
			length : 4,
			document_id : -3154517249138387864,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 27,
			length : 74,
		),
	),
	quote_offset : 40,
	monoforum_peer_id : $client->inputPeerEmpty(),
	todo_item_id : 65,
);
```