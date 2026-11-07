# inputBotInlineResultPhoto

**Description** : *Photo*

**Layer** : 233

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
	id : 'FN4cZh6G1YyKX5da',
	type : 'aPEtmT6LYsby1qp7',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : 'diqkwZGp5BnVfWU1',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 56,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 22,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 26,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 51,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 67,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 44,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 82,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 16,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 10,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 38,
				language : 'wfMCmjdxtg4nX6lE',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 16,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 68,
				user_id : 3716143150564979995,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 16,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 14,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 75,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 11,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 15,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 91,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 87,
				document_id : -4588042524761603045,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 98,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 22,
				date : 65,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 14,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 17,
				old_text : 'z8RVHne7CIU0TP9E',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 38,
			),
			$client->messageEntityTonAddress(
				offset : 0,
				length : 81,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```