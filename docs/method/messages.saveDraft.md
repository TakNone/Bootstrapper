# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 218

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
		reply_to_msg_id : 0,
		top_msg_id : 9,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'ZMO7zx6KSj2TpcGi',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 60,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 4,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 54,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 8,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 59,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 28,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 83,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 93,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 53,
				language : 'zoOYdPUSjiZwTu3D',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 26,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 31,
				user_id : -4666324040428286567,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 11,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 15,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 43,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 83,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 58,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 5,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 59,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 16,
				document_id : -4378901534156970668,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 87,
			),
		),
		quote_offset : 69,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 41,
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	message : '1paPNejSh7I0BfOc',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 90,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 96,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 14,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 7,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 2,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 74,
			language : 'BMZRE7idOp9Gm1Sn',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 0,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 90,
			user_id : 6261630240817339308,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 97,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 98,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 60,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 28,
			document_id : 3809494986679049910,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	effect : 2289174639531279263,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 6253551510463160414,
			nanos : 87,
		),
		schedule_date : 91,
	),
);
```