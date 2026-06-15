# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 227

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
	id : 'M185FUETAHWh3YVQ',
	short_name : '3v4jqo0wLPBJKG2d',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'XVA58KYEmhGSxCbt',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 20,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 88,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 78,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 100,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 56,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 75,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 11,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 29,
				language : 'b0KSVaYwDxzJk9FA',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 50,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 73,
				user_id : 7488240247576351589,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 87,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 88,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 29,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 57,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 26,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 60,
				document_id : -699883114178848854,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 49,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 24,
				date : 56,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 48,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 83,
				old_text : '63bgX9jVcUywsfZF',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 85,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```