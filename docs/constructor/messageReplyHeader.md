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
	reply_to_msg_id : 8,
	reply_to_peer_id : $client->peerUser(
		user_id : 2739150036396536050,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 580828756189836097,
		),
		from_name : 'ZC8S27xFOXkWN3QK',
		date : 57,
		channel_post : 75,
		post_author : 'B9FbZtOcQY5fCUpR',
		saved_from_peer : $client->peerUser(
			user_id : -3275386159467560698,
		),
		saved_from_msg_id : 89,
		saved_from_id : $client->peerUser(
			user_id : -6695115297900258257,
		),
		saved_from_name : '1Thsru5cLi0yZ7Og',
		saved_date : 97,
		psa_type : 'UlDiCYjJtXpVyBST',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 3,
	quote_text : 'suLpeyF794rK01ZN',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 10,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 55,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 83,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 62,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 51,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 42,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 26,
			language : 'nEqJdAmHau0j7GxQ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 6,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 88,
			user_id : -5489098471342703051,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 13,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 63,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 98,
			document_id : -537916298579231358,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 37,
		),
	),
	quote_offset : 79,
	todo_item_id : 16,
);
```