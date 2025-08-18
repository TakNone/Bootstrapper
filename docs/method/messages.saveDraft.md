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
		reply_to_msg_id : 83,
		top_msg_id : 35,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'XrfH5kwO1uIKa8s6',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 80,
				length : 64,
			),
			$client->messageEntityMention(
				offset : 96,
				length : 28,
			),
			$client->messageEntityHashtag(
				offset : 46,
				length : 87,
			),
			$client->messageEntityBotCommand(
				offset : 80,
				length : 89,
			),
			$client->messageEntityUrl(
				offset : 90,
				length : 51,
			),
			$client->messageEntityEmail(
				offset : 96,
				length : 53,
			),
			$client->messageEntityBold(
				offset : 8,
				length : 19,
			),
			$client->messageEntityItalic(
				offset : 77,
				length : 88,
			),
			$client->messageEntityCode(
				offset : 77,
				length : 98,
			),
			$client->messageEntityPre(
				offset : 40,
				length : 56,
				language : '2qUMdJNOE6jtlHA3',
			),
			$client->messageEntityTextUrl(
				offset : 48,
				length : 55,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 33,
				length : 35,
				user_id : -691426857662397875,
			),
			$client->inputMessageEntityMentionName(
				offset : 8,
				length : 89,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 53,
				length : 77,
			),
			$client->messageEntityCashtag(
				offset : 76,
				length : 4,
			),
			$client->messageEntityUnderline(
				offset : 30,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 16,
				length : 87,
			),
			$client->messageEntityBankCard(
				offset : 99,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 63,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 17,
				length : 12,
				document_id : -1174663333471347662,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 34,
				length : 83,
			),
		),
		quote_offset : 82,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 78,
	),
	peer : $client->inputPeerEmpty(),
	message : 'A6WXjgnmBl8cVsz3',
	entities : array(
		$client->messageEntityUnknown(
			offset : 96,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 16,
			length : 11,
		),
		$client->messageEntityHashtag(
			offset : 48,
			length : 23,
		),
		$client->messageEntityBotCommand(
			offset : 44,
			length : 43,
		),
		$client->messageEntityUrl(
			offset : 37,
			length : 46,
		),
		$client->messageEntityEmail(
			offset : 32,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 47,
		),
		$client->messageEntityItalic(
			offset : 68,
			length : 10,
		),
		$client->messageEntityCode(
			offset : 88,
			length : 5,
		),
		$client->messageEntityPre(
			offset : 9,
			length : 25,
			language : 'kV36KGexNmhfwtib',
		),
		$client->messageEntityTextUrl(
			offset : 29,
			length : 10,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 77,
			length : 91,
			user_id : 379992600237609816,
		),
		$client->inputMessageEntityMentionName(
			offset : 89,
			length : 71,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 53,
			length : 77,
		),
		$client->messageEntityCashtag(
			offset : 85,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 1,
			length : 21,
		),
		$client->messageEntityStrike(
			offset : 3,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 11,
			length : 14,
		),
		$client->messageEntitySpoiler(
			offset : 67,
			length : 80,
		),
		$client->messageEntityCustomEmoji(
			offset : 51,
			length : 55,
			document_id : -4533344454857484381,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 94,
			length : 24,
		),
	),
	media : $client->inputMediaEmpty(),
	effect : 1875124683921868767,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -7568614543424580600,
			nanos : 8,
		),
		schedule_date : 18,
	),
);
```