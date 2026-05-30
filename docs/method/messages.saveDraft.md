# messages.saveDraft

**Description** : *Save a message draft associated to a chat*

**Layer** : 225

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
		reply_to_msg_id : 44,
		top_msg_id : 81,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'Eo1RSVaPwnZTu6yg',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 19,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 99,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 80,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 93,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 98,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 72,
				language : 'w1ZIz0iKoh82fVBq',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 44,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 97,
				user_id : -3486249054859260373,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 28,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 78,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 74,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 49,
				document_id : -6484009008598559637,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 11,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 71,
				date : 57,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 99,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 95,
				old_text : 'P6Me3Jp7g4uzXxEq',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 5,
			),
		),
		quote_offset : 26,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 50,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	message : 'Y2jqB71WVUOhTpcR',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 28,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 89,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 14,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 54,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 82,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 93,
			language : 'Nd41lq8jyW7suhiJ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 72,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 93,
			user_id : -8084933248352069622,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 23,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 48,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 69,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 54,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 96,
			document_id : 6682636746292316247,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 81,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 3,
			date : 58,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 16,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 94,
			old_text : 'OGwNVi34JfQh1Yar',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 39,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	effect : 4455392934333822713,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -6413675236767674661,
			nanos : 52,
		),
		schedule_date : 93,
	),
);
```