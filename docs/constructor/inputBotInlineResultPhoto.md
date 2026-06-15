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
	id : 'U3iHTbO1cNSAIsMy',
	type : '2XW0Zs74joQz3FnM',
	photo : $client->inputPhotoEmpty(),
	send_message : $client->inputBotInlineMessageMediaAuto(
		invert_media : true,
		message : '01GkgnrwQypc7qot',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 40,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 13,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 5,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 60,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 9,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 2,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 60,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 73,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 90,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : '3DsUJQLqgXWakZl4',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 4,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 38,
				user_id : 758366698400453400,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 30,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 42,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 38,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 30,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 77,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 33,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 12,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : -3469041604535154015,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 58,
			),
			$client->messageEntityFormattedDate(
				relative : true,
				short_time : true,
				long_time : true,
				short_date : true,
				long_date : true,
				day_of_week : true,
				offset : 0,
				length : 2,
				date : 20,
			),
			$client->messageEntityDiffInsert(
				offset : 0,
				length : 41,
			),
			$client->messageEntityDiffReplace(
				offset : 0,
				length : 64,
				old_text : 'oACSywgd8jDnxpuM',
			),
			$client->messageEntityDiffDelete(
				offset : 0,
				length : 14,
			),
		),
		reply_markup : $client->replyKeyboardHide(
			selective : true,
		),
	),
);
```