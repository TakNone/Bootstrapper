# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 211

```tl
messages.saveDraft#54ae308e flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo peer:InputPeer message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia effect:flags.7?long suggested_post:flags.8?SuggestedPost = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Disable generation of the webpage preview |
| **invert_media** | [`flags.6?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **reply_to** | [`flags.4?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Destination of the message that should be sent |
| <mark>message</mark> | [`string`](type/string) | The draft |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **media** | [`flags.5?InputMedia`](type/InputMedia) | Attached media |
| **effect** | [`flags.7?long`](type/long) | Specifies a message effect » to use for the message |
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->saveDraft(
	no_webpage : true,
	invert_media : true,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 62,
		top_msg_id : 35,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'o6CV1lkpvih7n9Gj',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 37,
				length : 60,
			),
			$client->messageEntityMention(
				offset : 63,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 35,
				length : 77,
			),
			$client->messageEntityBotCommand(
				offset : 85,
				length : 1,
			),
			$client->messageEntityUrl(
				offset : 61,
				length : 63,
			),
			$client->messageEntityEmail(
				offset : 58,
				length : 66,
			),
			$client->messageEntityBold(
				offset : 98,
				length : 73,
			),
			$client->messageEntityItalic(
				offset : 8,
				length : 43,
			),
			$client->messageEntityCode(
				offset : 98,
				length : 30,
			),
			$client->messageEntityPre(
				offset : 42,
				length : 28,
				language : 'rgVUduL6BEFyn04K',
			),
			$client->messageEntityTextUrl(
				offset : 68,
				length : 10,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 99,
				length : 32,
				user_id : -4890250675725484336,
			),
			$client->inputMessageEntityMentionName(
				offset : 36,
				length : 70,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 69,
				length : 61,
			),
			$client->messageEntityCashtag(
				offset : 77,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 33,
				length : 48,
			),
			$client->messageEntityStrike(
				offset : 47,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 57,
				length : 93,
			),
			$client->messageEntitySpoiler(
				offset : 44,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 16,
				length : 43,
				document_id : 3648212494039189625,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 17,
				length : 56,
			),
		),
		quote_offset : 21,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 83,
	),
	peer : $client->inputPeerEmpty(),
	message : 'lUaAmhSTvF5nkHZr',
	entities : array(
		$client->messageEntityUnknown(
			offset : 64,
			length : 93,
		),
		$client->messageEntityMention(
			offset : 54,
			length : 42,
		),
		$client->messageEntityHashtag(
			offset : 91,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 71,
			length : 19,
		),
		$client->messageEntityUrl(
			offset : 90,
			length : 77,
		),
		$client->messageEntityEmail(
			offset : 14,
			length : 23,
		),
		$client->messageEntityBold(
			offset : 21,
			length : 60,
		),
		$client->messageEntityItalic(
			offset : 48,
			length : 86,
		),
		$client->messageEntityCode(
			offset : 31,
			length : 96,
		),
		$client->messageEntityPre(
			offset : 76,
			length : 23,
			language : 'hUz4XJpqrmcPGltY',
		),
		$client->messageEntityTextUrl(
			offset : 88,
			length : 44,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 31,
			length : 60,
			user_id : -937415931666919056,
		),
		$client->inputMessageEntityMentionName(
			offset : 94,
			length : 68,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 94,
			length : 12,
		),
		$client->messageEntityCashtag(
			offset : 7,
			length : 19,
		),
		$client->messageEntityUnderline(
			offset : 15,
			length : 78,
		),
		$client->messageEntityStrike(
			offset : 6,
			length : 82,
		),
		$client->messageEntityBankCard(
			offset : 20,
			length : 23,
		),
		$client->messageEntitySpoiler(
			offset : 44,
			length : 26,
		),
		$client->messageEntityCustomEmoji(
			offset : 19,
			length : 83,
			document_id : 1440646491359583291,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 49,
			length : 89,
		),
	),
	media : $client->inputMediaEmpty(),
	effect : -164661040842932245,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -8172157148518499613,
			nanos : 44,
		),
		schedule_date : 36,
	),
);
```