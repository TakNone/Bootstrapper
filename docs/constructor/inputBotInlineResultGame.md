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
	id : 'ulp9EqoZI5jCFMA1',
	short_name : 'IpVnSEgXdqWUz8w0',
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'FofGQSlHiLJYtg43',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 78,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 69,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 27,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 29,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 25,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 56,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 57,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 42,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 32,
				language : 'KbZynBUoG3PgjDl9',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 59,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 57,
				user_id : -8944252026632969154,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 15,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 85,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 79,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 56,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 65,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 72,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : -7606730269683604471,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 1,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 43,
				date : 54,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 95,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 18,
				old_text : 've0pWN5XkjhYa3Ff',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 63,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```