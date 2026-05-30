# botInlineMediaResult

**Description** : *Media result*

**Layer** : 225

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
	id : 'awujPKBXnAYo9pDs',
	type : 'NlbhZWDyUwA3rHf2',
	photo : $client->photoEmpty(
		id : 2011761565360481524,
	),
	document : $client->documentEmpty(
		id : -1869291977604696862,
	),
	title : 'hYlwXaS6Mxt5oKvn',
	description : 'jg0KilwNyPEID6Ub',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '7sN1m6Vqlz54Yoxb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 64,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 8,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 67,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 25,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 4,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 4,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 89,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 39,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 25,
				language : 'm08PjoLcXRgxnDJq',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 43,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 94,
				user_id : -6076735081382543349,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 52,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 17,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 32,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 74,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 97,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 92,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 22,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 34,
				document_id : 4362699738451925329,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 52,
				date : 11,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 89,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 3,
				old_text : 'rc8dO1HQUCEWZPNz',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 65,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```