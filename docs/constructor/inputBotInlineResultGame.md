# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 218

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
	id : 'yQPwiKfOstDl4ISn',
	short_name : 'DN5GhsHvRJQtq6L8',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'h1L5fjWOE3iZ708G',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 37,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 69,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 90,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 26,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 10,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 23,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 44,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 52,
				language : '2qiYhE8X19f4M7jT',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 60,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 75,
				user_id : -8702588273193499593,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 37,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 76,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 94,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 4,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 72,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 41,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 5,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 25,
				document_id : 491530209509989994,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 62,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```