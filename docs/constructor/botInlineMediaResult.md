# botInlineMediaResult

**Description** : *Media result*

**Layer** : 227

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
	id : 'F6KzEis0mec8uAvX',
	type : 'hNoHrb5gUO1wcLvz',
	photo : $client->photoEmpty(
		id : -2007409875384609864,
	),
	document : $client->documentEmpty(
		id : -7323497912599905457,
	),
	title : 'cMxOVC2igXD6wjSZ',
	description : 'wI6UxBVn34YMWZei',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'GF6iuoe8VXgHvnsr',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 15,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 75,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 78,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 61,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 27,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 3,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 2,
				language : 'OP5VaX6H1dqGASoN',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 13,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 77,
				user_id : 85026898174350937,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 47,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 37,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 17,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 10,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 100,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 82,
				document_id : 3304151372725256288,
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
				length : 96,
				date : 71,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 2,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 19,
				old_text : 'KXSkJw0yiO35WnCp',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 29,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```