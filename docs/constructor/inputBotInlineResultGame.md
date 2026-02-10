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
	id : '2TtC7Y3EDuwfpa8x',
	short_name : 'F9JgLAec2178aVI0',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'hRa0iLdBYEu3qIAD',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 4,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 39,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 74,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 14,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 24,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 71,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 80,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 36,
				language : 'bFv6NoiHdh340SP1',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 65,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 61,
				user_id : -5222823131793648875,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 49,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 43,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 31,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 7,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 35,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 42,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 65,
				document_id : -236416956216711296,
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