# messageReplyHeader

**Description** : *Message replies and thread information*

**Layer** : 211

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
| **todo_item_id** | [`flags.11?int`](type/int) | NOTHING |

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
	reply_to_msg_id : 22,
	reply_to_peer_id : $client->peerUser(
		user_id : -8600071575267923559,
	),
	reply_from : $client->messageFwdHeader(
		imported : true,
		saved_out : true,
		from_id : $client->peerUser(
			user_id : -2381365233919124287,
		),
		from_name : 'hPfvxKzTtiZ502CL',
		date : 70,
		channel_post : 25,
		post_author : 'ZvPHexiJy8sX7kjf',
		saved_from_peer : $client->peerUser(
			user_id : -8223598961294866627,
		),
		saved_from_msg_id : 30,
		saved_from_id : $client->peerUser(
			user_id : -7959662205796423019,
		),
		saved_from_name : 'd8tBFmJ370ylsVbf',
		saved_date : 87,
		psa_type : 'gHVJAORy0wrFhQSp',
	),
	reply_media : $client->messageMediaEmpty(),
	reply_to_top_id : 54,
	quote_text : 'Efmes4Gah3jPwtQc',
	quote_entities : array(
		$client->messageEntityUnknown(
			offset : 4,
			length : 78,
		),
		$client->messageEntityMention(
			offset : 63,
			length : 41,
		),
		$client->messageEntityHashtag(
			offset : 48,
			length : 57,
		),
		$client->messageEntityBotCommand(
			offset : 99,
			length : 55,
		),
		$client->messageEntityUrl(
			offset : 46,
			length : 40,
		),
		$client->messageEntityEmail(
			offset : 56,
			length : 71,
		),
		$client->messageEntityBold(
			offset : 51,
			length : 84,
		),
		$client->messageEntityItalic(
			offset : 27,
			length : 68,
		),
		$client->messageEntityCode(
			offset : 33,
			length : 60,
		),
		$client->messageEntityPre(
			offset : 28,
			length : 38,
			language : 'z2TM7vCDOaSgUW4k',
		),
		$client->messageEntityTextUrl(
			offset : 18,
			length : 69,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 47,
			length : 87,
			user_id : 4006487060256340228,
		),
		$client->inputMessageEntityMentionName(
			offset : 43,
			length : 16,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 44,
			length : 37,
		),
		$client->messageEntityCashtag(
			offset : 98,
			length : 52,
		),
		$client->messageEntityUnderline(
			offset : 79,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 98,
			length : 87,
		),
		$client->messageEntityBankCard(
			offset : 14,
			length : 17,
		),
		$client->messageEntitySpoiler(
			offset : 89,
			length : 87,
		),
		$client->messageEntityCustomEmoji(
			offset : 28,
			length : 28,
			document_id : 6589103162307746805,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 18,
			length : 16,
		),
	),
	quote_offset : 46,
	todo_item_id : 22,
);
```