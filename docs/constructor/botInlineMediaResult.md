# botInlineMediaResult

**Description** : *Media result*

**Layer** : 229

```tl
botInlineMediaResult#17db940b flags:# id:string type:string photo:flags.0?Photo document:flags.1?Document title:flags.2?string description:flags.3?string send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| **photo** | [`flags.0?Photo`](type/Photo) | If type is photo, the photo to send |
| **document** | [`flags.1?Document`](type/Document) | If type is document, the document to send |
| **title** | [`flags.2?string`](type/string) | Result title |
| **description** | [`flags.3?string`](type/string) | Description |
| <mark>send_message</mark> | [`BotInlineMessage`](type/BotInlineMessage) | Depending on the type and on the constructor, contains the caption of the media or the content of the message to be sent instead of the media |

---

## Type

[BotInlineResult](type/BotInlineResult)

---

## Example

```php
$botInlineResult = $client->botInlineMediaResult(
	id : '38i4udFLrfzSv2jZ',
	type : 'f1Ni6Y5XyVRWkopC',
	photo : $client->photoEmpty(
		id : -5667651446615378645,
	),
	document : $client->documentEmpty(
		id : 2429554656037029430,
	),
	title : 'YaLRmIWFuGPxV635',
	description : 'Xn7MpbIk6F20qc8P',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'Y5uztqnF2OHWfaR0',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 74,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 30,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 76,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 37,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 71,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 2,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 91,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 74,
				language : 'TFIrVpoxyNkA3buh',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 38,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 2,
				user_id : -1764481155479069957,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 21,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 78,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 29,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 11,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 17,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 1,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 19,
				document_id : -4927002985076752407,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 53,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 13,
				date : 37,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 32,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 81,
				old_text : 'klYMqBfF1LRXgCAN',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 33,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```