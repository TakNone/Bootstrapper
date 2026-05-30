# draftMessage

**Description** : *Represents a message draft*

**Layer** : 225

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
		reply_to_msg_id : 57,
		top_msg_id : 16,
		reply_to_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		quote_text : '7oVhQeTkcOLxYK0C',
		quote_entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 30,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 77,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 13,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 76,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 17,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 32,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 31,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 41,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 54,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 86,
				language : 't6wkWVjXKczbrUs1',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 14,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 64,
				user_id : 8855347703126160873,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 100,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 6,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 84,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 83,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 15,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 61,
				document_id : 8549273291248532485,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 63,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 77,
				date : 2,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 2,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 65,
				old_text : '4V0uGrC2EOi8jXDB',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 30,
			),
		),
		quote_offset : 73,
		monoforum_peer_id : $client->get_input_peer(peer : '@LiveProtoChat'),
		todo_item_id : 51,
		poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	),
	message : 'b68GOinKxpdgeUwm',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 16,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 10,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 93,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 85,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 45,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 53,
			language : 'EX4LanBMqO1lp0KH',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 66,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : -2873871309927647687,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 8,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 55,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 26,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 27,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 13,
			document_id : 2178025422163982407,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 94,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 80,
			date : 24,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 31,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 100,
			old_text : 'YmwT3UJyCuI2cFsK',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 30,
		),
	),
	media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
	date : 97,
	effect : 3484211269834274011,
	suggested_post : $client->suggestedPost(
		accepted : true,
		rejected : true,
		price : $client->starsAmount(
			amount : 1916387132205923813,
			nanos : 55,
		),
		schedule_date : 20,
	),
);
```