# botInlineMediaResult

**Description** : *Media result*

**Layer** : 233

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
	id : 'LBP3riWVj7lYHJSh',
	type : 'gMSLfYJml03TPiBv',
	photo : $client->photoEmpty(
		id : -2120980177815097270,
	),
	document : $client->documentEmpty(
		id : -8140205502208576110,
	),
	title : 'iVwXR9vzACO5IPyf',
	description : 'KTdNfqoBxMAZLsOe',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '73Qk0ltI5WFrjHoX',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 93,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 72,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 20,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 62,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 39,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 17,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 51,
				language : '6Hkvqa5QEgetuzFh',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 61,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : 2484000805679002985,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 32,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 9,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 73,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 58,
				document_id : -1206713984776787091,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 19,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 11,
				date : 24,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 55,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 22,
				old_text : 'fwiuy5DFU7Rz2AdN',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 44,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 55,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```