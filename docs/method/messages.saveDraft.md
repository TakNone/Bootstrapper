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
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **ENTITY_BOUNDS_INVALID** | `400` | A specified entity offset or length is invalid, see here » for info on how to properly compute the entity offset/length |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$bool = $client->messages->saveDraft(
	no_webpage : true,
	invert_media : true,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 19,
		top_msg_id : 94,
		reply_to_peer_id : $client->inputPeerEmpty(),
		quote_text : 'PEwfhyTxCZsQ3Mum',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 19,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 83,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 2,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 15,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 92,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 71,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 92,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 35,
				language : 'O3NebGYSj8MnyVLa',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 75,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 58,
				user_id : 7456427743528138584,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 33,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 99,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 68,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 64,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 44,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 4,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 79,
				document_id : 3983989824854781388,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 65,
			),
		),
		quote_offset : 72,
		monoforum_peer_id : $client->inputPeerEmpty(),
		todo_item_id : 72,
	),
	peer : $client->inputPeerEmpty(),
	message : 'SKv4CU1I8DyJVmcx',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 17,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 98,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 32,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 92,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 3,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 58,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 84,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 54,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 41,
			language : 'YxuvF6dCsX7nfE8h',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 46,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 22,
			user_id : -6738160682550125361,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 60,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 53,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 15,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 1,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 2,
			document_id : 7912979377309330145,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 34,
		),
	),
	media : $client->inputMediaEmpty(),
	effect : -4454802740275864829,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -6204927140161751648,
			nanos : 16,
		),
		schedule_date : 40,
	),
);
```