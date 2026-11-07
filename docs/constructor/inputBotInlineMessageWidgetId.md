# inputBotInlineMessageWidgetId

**Layer** : 233

```tl
inputBotInlineMessageWidgetId#fe8b792b flags:# invert_media:flags.3?true widget_id:long chat_data:flags.0?string reply_markup:flags.1?ReplyMarkup message:string entities:flags.2?Vector<MessageEntity> = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **invert_media** | [`flags.3?true`](type/true) | NOTHING |
| <mark>widget_id</mark> | [`long`](type/long) | NOTHING |
| **chat_data** | [`flags.0?string`](type/string) | NOTHING |
| **reply_markup** | [`flags.1?ReplyMarkup`](type/ReplyMarkup) | NOTHING |
| <mark>message</mark> | [`string`](type/string) | NOTHING |
| **entities** | [`flags.2?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageWidgetId(
	invert_media : true,
	widget_id : 8357554775531915760,
	chat_data : 'XQbT1FpYr2Ow5dC0',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	message : '6Gdfs8UcKYJq3WrM',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 41,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 93,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 75,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 31,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 10,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 71,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 16,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 13,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 5,
			language : 'vxNrtsycWujCnJio',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 39,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 6,
			user_id : 7525249916902472726,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 28,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 41,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 6,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 69,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 92,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 79,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 62,
			document_id : 5170583301270662244,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 10,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 65,
			date : 75,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 30,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 95,
			old_text : '5FWBNYgCjpve02VE',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 94,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 53,
		),
	),
);
```