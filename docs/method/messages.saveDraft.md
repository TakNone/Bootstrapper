# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 214

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
		reply_to_msg_id : 87,
		top_msg_id : 89,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : '52FdGwKupbzTjAOI',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 41,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 44,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 6,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 90,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 0,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 43,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 81,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 62,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 92,
				language : '4EqdQLHDSfp1sglb',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 99,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 10,
				user_id : 4459579563509693321,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 51,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 57,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 32,
				document_id : -8442921230891308000,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 73,
			),
		),
		quote_offset : 80,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 19,
	),
	peer : $client->inputPeerEmpty(),
	message : 'HDsmR9N0Il3ng6V1',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 50,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 50,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 43,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 58,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 35,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 61,
			language : 's3SeZn7RQgKOCm6c',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 11,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : -458753577306695635,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 79,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 42,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 42,
			document_id : 7744199232917178551,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 87,
		),
	),
	media : $client->inputMediaEmpty(),
	effect : 4700263497595095363,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -3152218757483898933,
			nanos : 18,
		),
		schedule_date : 44,
	),
);
```