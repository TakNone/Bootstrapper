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
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		reply_to_msg_id : 14,
		top_msg_id : 63,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : 'jF2c7Q4vdlwJZ913',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 65,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 9,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 98,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 93,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 50,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 25,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 13,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 41,
				language : '4cjQ8OlRygKZxiD3',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 13,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 7,
				user_id : -1332849303650468270,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 78,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 79,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 49,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 39,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 46,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 47,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 94,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : -910347942613635388,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 47,
			),
		),
		quote_offset : 52,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 62,
	),
	message : 'fVxuCX04pLvQsihR',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 100,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 13,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 84,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 68,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 4,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 76,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : '4WsPdTgIcyKiLZzY',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 27,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : -1705214759957681357,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 5,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 82,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 97,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 44,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 39,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 89,
			document_id : 1828369315194869521,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 75,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	date : 96,
	effect : -4752755418897569362,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : -9012752248499661363,
			nanos : 65,
		),
		schedule_date : 5,
	),
);
```