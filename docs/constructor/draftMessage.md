# draftMessage

**Description** : *Represents a message draft*

**Layer** : 222

```tl
draftMessage#96eaa5eb flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia date:int effect:flags.7?long suggested_post:flags.8?SuggestedPost = DraftMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.1?true`](type/true) | Whether no webpage preview will be generated |
| **invert_media** | [`flags.6?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| **reply_to** | [`flags.4?InputReplyTo`](type/InputReplyTo) | If set, indicates that the message should be sent in reply to the specified message or story |
| <mark>message</mark> | [`string`](type/string) | The draft |
| **entities** | [`flags.3?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **media** | [`flags.5?InputMedia`](type/InputMedia) | Media |
| <mark>date</mark> | [`int`](type/int) | Date of last update of the draft |
| **effect** | [`flags.7?long`](type/long) | A message effect that should be played as specified here » |
| **suggested_post** | [`flags.8?SuggestedPost`](type/SuggestedPost) | Used to suggest a post to a channel, see here » for more info on the full flow |

---

## Type

[DraftMessage](type/DraftMessage)

---

## Example

```php
$draftMessage = $client->draftMessage(
	no_webpage : true,
	invert_media : true,
	reply_to : $client->inputReplyToMessage(
		reply_to_msg_id : 99,
		top_msg_id : 25,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'chX03iVLUQom9BS4',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 98,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 68,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 60,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 82,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 5,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 40,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 78,
				language : 'fwudB0MgazG8iRWm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 48,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 72,
				user_id : -8333679113484440835,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 23,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 83,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 58,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 91,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 24,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 38,
				document_id : -6167310948236458950,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 23,
			),
		),
		quote_offset : 87,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 2,
	),
	message : 'sX9dc4Ut1imhJLuj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 80,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 61,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 5,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 53,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 7,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 85,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 82,
			language : 'RQPT7OGjCJDztxds',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 74,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 44,
			user_id : 3259883895406756760,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 2,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 94,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 16,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 55,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 7,
			document_id : -8078459538782891406,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 55,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	date : 90,
	effect : -7663716749312334489,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -2497477717204702902,
			nanos : 40,
		),
		schedule_date : 10,
	),
);
```