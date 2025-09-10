# botInlineMediaResult

**Description** : *Media result*

**Layer** : 214

```tl
botInlineMediaResult#17db940b flags:# id:string type:string photo:flags.0?Photo document:flags.1?Document title:flags.2?string description:flags.3?string send_message:BotInlineMessage = BotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 'EBqGhcfwAlzKxCm4',
	type : 'R6deH50oD7tLwNCf',
	photo : $client->photoEmpty(
		id : 1926792740679250043,
	),
	document : $client->documentEmpty(
		id : -5443122685993179329,
	),
	title : 'TDtiwkEOX1b4sJfQ',
	description : 'pZc34KmYkGVWM0ur',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : 'n0aXqWuxmfjShFsC',
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
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 63,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 90,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 37,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 88,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 96,
				language : 'XPJvHeMDbY5KIfzd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 36,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 8,
				user_id : -4186035494405468459,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 92,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 18,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 61,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 30,
				document_id : 7060948740225148871,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 17,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```