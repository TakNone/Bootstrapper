# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 222

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
	id : 'ZmAVCaJ1nRuzsGBI',
	short_name : 'NjFHDt9MizIQfqY0',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'SuF6d4l1CgGteELD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 14,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 3,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 100,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 76,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 19,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 73,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 94,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 84,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 54,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 4,
				language : 'o8GMKR1ItleaPjZm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 41,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 87,
				user_id : -6692700141936390706,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 80,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 42,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 92,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 59,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 100,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 10,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 26,
				document_id : -6698126605022337005,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 7,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```