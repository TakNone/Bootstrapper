# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 229

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
	id : 'vZbJctXeIVi6YFH8',
	short_name : 'z0yn3GflYu7CVbUB',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'oNQmK1SakPCjpyqx',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 68,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 81,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 24,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 3,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 89,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 24,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 0,
				language : 'aGMm9Ayq0lT27prU',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 8,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 98,
				user_id : 3563429763051664685,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 86,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 96,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 69,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 77,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 52,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 43,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 63,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 25,
				document_id : -4583061992789190175,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 83,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 81,
				date : 93,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 67,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 40,
				old_text : 'cmj6VgrIykbZ473t',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 20,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```