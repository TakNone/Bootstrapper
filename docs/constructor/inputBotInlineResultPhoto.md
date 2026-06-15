# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 227

```tl
inputBotInlineResultPhoto#a8d864a7 id:string type:string photo:InputPhoto send_message:InputBotInlineMessage = InputBotInlineResult;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`string`](type/string) | Result ID |
| <mark>type</mark> | [`string`](type/string) | Result type (see bot API docs) |
| <mark>photo</mark> | [`InputPhoto`](type/InputPhoto) | Photo to send |
| <mark>send_message</mark> | [`InputBotInlineMessage`](type/InputBotInlineMessage) | Message to send when the result is selected |

---

## Type

[InputBotInlineResult](type/InputBotInlineResult)

---

## Example

```php
$inputBotInlineResult = $client->inputBotInlineResultPhoto(
	id : 'zescwSjmXC4IGTWq',
	type : 'NYP2zKVU9BF1Hvqw',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'eAGdrzIHEtjVLMpc',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 98,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 61,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 60,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 50,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 94,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 97,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 28,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 5,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 16,
				language : 'iluxJ8w3GepVR0mL',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 2,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 89,
				user_id : -6862028876791533067,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 12,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 33,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 1,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 80,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 94,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 30,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 80,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 100,
				document_id : -8820459660335731670,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 33,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 73,
				date : 59,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 52,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 4,
				old_text : '7MHV9ar2QRCk0NAE',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 16,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```