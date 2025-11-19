# inputReplyToMessage

**Description** : *Reply to a message*

**Layer** : 218

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
| **monoforum_peer_id** | [`flags.5?InputPeer`](type/InputPeer) | Must be set to the ID of the topic when replying to a message within a monoforum topic |
| **todo_item_id** | [`flags.6?int`](type/int) | Can be set to reply to the specified item of a todo list » |

---

## Type

[InputReplyTo](type/InputReplyTo)

---

## Example

```php
$inputReplyTo = $client->inputReplyToMessage(
	reply_to_msg_id : 88,
	top_msg_id : 97,
	reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	quote_text : 'PSHbuEeF5yzlTD70',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 56,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 5,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 70,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 60,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 3,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 51,
			language : 'ECyZiPn1JVgIjF9B',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 46,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : -2445986347029245309,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 59,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 18,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 0,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 19,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 86,
			document_id : -2653586719490066495,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 4,
		),
	),
	quote_offset : 62,
	monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
	todo_item_id : 36,
);
```