# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 227

```tl
messageReplyHeader#1b97dd66 flags:# reply_to_scheduled:flags.2?true forum_topic:flags.3?true quote:flags.9?true reply_to_ephemeral:flags.13?true reply_to_msg_id:flags.4?int reply_to_peer_id:flags.0?Peer reply_from:flags.5?MessageFwdHeader reply_media:flags.8?MessageMedia reply_to_top_id:flags.1?int quote_text:flags.6?string quote_entities:flags.7?Vector<MessageEntity> quote_offset:flags.10?int todo_item_id:flags.11?int poll_option:flags.12?bytes = MessageReplyHeader;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **reply_to_scheduled** | [`flags.2?true`](type/true) | This is a reply to a scheduled message |
| **forum_topic** | [`flags.3?true`](type/true) | Whether this message was sent in a forum topic (except for the General topic) |
| **quote** | [`flags.9?true`](type/true) | Whether this message is quoting a part of another message |
| **reply_to_ephemeral** | [`flags.13?true`](type/true) | NOTHING |
| **reply_to_msg_id** | [`flags.4?int`](type/int) | ID of message to which this message is replying |
| **reply_to_peer_id** | [`flags.0?Peer`](type/Peer) | For replies sent in channel discussion threads of which the current user is not a member, the discussion group ID |
| **reply_from** | [`flags.5?MessageFwdHeader`](type/MessageFwdHeader) | When replying to a message sent by a certain peer to another chat, contains info about the peer that originally sent the message to that other chat |
| **reply_media** | [`flags.8?MessageMedia`](type/MessageMedia) | When replying to a media sent by a certain peer to another chat, contains the media of the replied-to message |
| **reply_to_top_id** | [`flags.1?int`](type/int) | ID of the message that started this message thread |
| **quote_text** | [`flags.6?string`](type/string) | Used to quote-reply to only a certain section (specified here) of the original message |
| **quote_entities** | [`flags.7?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text from the quote_text field |
| **quote_offset** | [`flags.10?int`](type/int) | Offset of the message quote_text within the original message (in UTF-16 code units) |
| **todo_item_id** | [`flags.11?int`](type/int) | Can be set to reply to the specified item of a todo list » |
| **poll_option** | [`flags.12?bytes`](type/bytes) | NOTHING |

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
	reply_to_ephemeral : true,
	reply_to_msg_id : 87,
	reply_to_peer_id : $client->peerUser(
		user_id : 7038637296673482875,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : 650902813360857325,
		),
		from_name : 'txYMIza1j5cwBuNo',
		date : 13,
		channel_post : 26,
		post_author : 'b3Az2iJTmV4jUutC',
		saved_from_peer : $client->peerUser(
			user_id : -8308469395810361667,
		),
		saved_from_msg_id : 51,
		saved_from_id : $client->peerUser(
			user_id : -480312231384819218,
		),
		saved_from_name : 'GcwYACjIl1WRioZB',
		saved_date : 54,
		psa_type : 'cteLhCWyQZ7Dpg3B',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 28,
	quote_text : 'D5AMUPx8EpTjgyZk',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 17,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 9,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 3,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 8,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 89,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 52,
			language : 'nF4UEtfrSqoRy8DJ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 19,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 33,
			user_id : 4762632712993261197,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 75,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 38,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 47,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -4799814006457711252,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 63,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 49,
			date : 1,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 90,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 30,
			old_text : 'TJSYHZBRhAkc2WCl',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 43,
		),
	),
	quote_offset : 84,
	todo_item_id : 27,
	poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```