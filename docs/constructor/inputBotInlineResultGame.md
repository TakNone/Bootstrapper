# inputBotInlineResultGame

**Description** : *Game*

**Layer** : 225

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
	id : 'v543walp8hg90KLN',
	short_name : 'aKcHGpejNRmy6ATC',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : '6PGctU5hYmnTOZzQ',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 92,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 79,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 62,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 7,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 79,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 16,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 29,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 36,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 50,
				language : 'kVOANGUhIjXJqmK9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 90,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 27,
				user_id : 3819274667305246638,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 17,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 48,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 70,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 61,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 90,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 90,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 55,
				document_id : 9133058428988598815,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 60,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 74,
				date : 54,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 22,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 33,
				old_text : 'LImkFHs4ONBgn8Qj',
			),
			$client->messageEntityDiffDelete(
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