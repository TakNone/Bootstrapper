# botInlineMediaResult

**Description** : *Media result*

**Layer** : 222

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
	id : 'LnPiscBYajWNghJr',
	type : 'N7PmjInBRs2XvcoA',
	photo : $client->photoEmpty(
		id : -5002027321504522832,
	),
	document : $client->documentEmpty(
		id : 1901807462411901014,
	),
	title : '6GiUp1frtF4bTAex',
	description : 'wXqnTdADgi7FIKjU',
	send_message : $client->botInlineMessageMediaAuto(
		invert_media : true,
		message : '7hwraSs4QiOWR1kb',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 11,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 22,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 76,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 18,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 42,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 50,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 68,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : 'VhLvtTrMqSP4z3BZ',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 15,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 82,
				user_id : 7904331842043157502,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 13,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 35,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 9,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 12,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 85,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 7,
				document_id : 93562826298318230,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 36,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```