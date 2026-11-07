# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 233

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
	id : 'Q8JxlKU1PrSaAOW3',
	short_name : '214MWJwApVGfjrvE',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'Q8pbuX1Z2lPOJULI',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 92,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 72,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 11,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 85,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 3,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 87,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 3,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 25,
				language : 'PpevxGMTK58Zfnrm',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 53,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 4,
				user_id : -6806807273412032775,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 56,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 25,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 96,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 39,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 80,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 14,
				document_id : -8479573131591161326,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 45,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 18,
				date : 54,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 95,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 86,
				old_text : 'KZicTNSX96qyzwAs',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 41,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 78,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```