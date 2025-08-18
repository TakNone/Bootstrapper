# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 211

```tl
inputBotInlineResultGame#4fa417f2 id:string short_name:string send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>short_name</mark> | [`string`](type/string) | Game short name |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResultGame(
	id : 'cCBFzoAudR6nIjQg',
	short_name : 'Nx6P9zaSQtVmyDGZ',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'FEKJh6BV7fTRqdeU',
		entities : array(
			$client->messageEntityUnknown(
				offset : 21,
				length : 64,
			),
			$client->messageEntityMention(
				offset : 100,
				length : 98,
			),
			$client->messageEntityHashtag(
				offset : 81,
				length : 74,
			),
			$client->messageEntityBotCommand(
				offset : 58,
				length : 19,
			),
			$client->messageEntityUrl(
				offset : 33,
				length : 75,
			),
			$client->messageEntityEmail(
				offset : 100,
				length : 72,
			),
			$client->messageEntityBold(
				offset : 10,
				length : 57,
			),
			$client->messageEntityItalic(
				offset : 32,
				length : 80,
			),
			$client->messageEntityCode(
				offset : 98,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 43,
				length : 95,
				language : 'MOsbPceFdLnKuqr2',
			),
			$client->messageEntityTextUrl(
				offset : 91,
				length : 19,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 98,
				length : 20,
				user_id : 1794655088273609645,
			),
			$client->inputMessageEntityMentionName(
				offset : 75,
				length : 67,
				user_id : $client->inputUserEmpty(...),
			),
			$client->messageEntityPhone(
				offset : 8,
				length : 90,
			),
			$client->messageEntityCashtag(
				offset : 49,
				length : 94,
			),
			$client->messageEntityUnderline(
				offset : 7,
				length : 66,
			),
			$client->messageEntityStrike(
				offset : 27,
				length : 23,
			),
			$client->messageEntityBankCard(
				offset : 49,
				length : 69,
			),
			$client->messageEntitySpoiler(
				offset : 61,
				length : 90,
			),
			$client->messageEntityCustomEmoji(
				offset : 58,
				length : 49,
				document_id : 4837928120502046810,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 73,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```