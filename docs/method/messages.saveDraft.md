# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 216

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
		reply_to_msg_id : 91,
		top_msg_id : 79,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'YjQemWiofAZsvTt4',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 83,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 69,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 95,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 63,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 6,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 35,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 46,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 76,
				language : 'CmB7fHgDsY6KxT8F',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 25,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : -1682425433979862226,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 55,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 29,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 14,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 89,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 21,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : 1645925445785586259,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 13,
			),
		),
		quote_offset : 70,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 23,
	),
	peer : $client->inputPeerEmpty(),
	message : 'mHbgdxswtNAujrSP',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 14,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 84,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 17,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 29,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 40,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 86,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 61,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 15,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 74,
			language : 'yaWfvGtdRbnHj95z',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 44,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 56,
			user_id : -3470448239305340577,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 1,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 42,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 42,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 33,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 72,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 73,
			document_id : 9125389340299827421,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 61,
		),
	),
	media : $client->inputMediaEmpty(),
	effect : -3719886829288603908,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 3088686709481220739,
			nanos : 65,
		),
		schedule_date : 26,
	),
);
```