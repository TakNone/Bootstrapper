# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 222

```tl
messages.saveDraft#54ae308e flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo peer:InputPeer message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia effect:flags.7?long suggested_post:flags.8?SuggestedPost = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
		reply_to_msg_id : 77,
		top_msg_id : 68,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'Pm7kejuFnXfCagN5',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 25,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 65,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 31,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 49,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 87,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 24,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 79,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 14,
				language : 'FjuSAaVGMckZxWwB',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 92,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 67,
				user_id : -1813206119763478266,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 44,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 50,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 70,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 27,
				document_id : 4318083568746081338,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
		),
		quote_offset : 7,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 85,
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	message : 'vDQZIY0L6jKpW3Ro',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 4,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 66,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 54,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 17,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 25,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 56,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 49,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 9,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 73,
			language : 'XR02aSdxDFkg786B',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 86,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : -4269966510894679862,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 48,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 57,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 9,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 94,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 82,
			document_id : -6686717275922826592,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 11,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	effect : -2264182448914348214,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -6377930098041764495,
			nanos : 76,
		),
		schedule_date : 49,
	),
);
```