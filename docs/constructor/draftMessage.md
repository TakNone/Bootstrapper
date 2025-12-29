# draftMessage

**Description** : *Represents a message draft*

**Layer** : 218

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
		reply_to_msg_id : 30,
		top_msg_id : 95,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'caH1NXm40x6k23zA',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 62,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 76,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 10,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 34,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 24,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 68,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 1,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 51,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 61,
				language : 'hPxTmz0HSB1GgrZ9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : 2816064043744221314,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 82,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 49,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 77,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 8,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 41,
				document_id : -6609034300178116708,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 70,
			),
		),
		quote_offset : 77,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 49,
	),
	message : '51vBSXoNIPtJpeYq',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 41,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 86,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 8,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 96,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 58,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 50,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 71,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 43,
			language : 'tg43Oz2hLaFQrwoR',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 90,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 15,
			user_id : 4945248873234468494,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 62,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 73,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 39,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 49,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 28,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 90,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 1,
			document_id : 5692129622008951408,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 91,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	date : 80,
	effect : 884584524320408794,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -7434104412634498570,
			nanos : 39,
		),
		schedule_date : 6,
	),
);
```