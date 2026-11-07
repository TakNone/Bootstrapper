# inputBotInlineMessageWidget

**Layer** : 233

```tl
inputBotInlineMessageWidget#f597a3f0 flags:# allow_queries:flags.0?true shared_widget:flags.1?true invert_media:flags.6?true width:int height:int html:string public_data:flags.2?string chat_data:flags.3?string reply_markup:flags.4?ReplyMarkup message:string entities:flags.5?Vector<MessageEntity> = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **allow_queries** | [`flags.0?true`](type/true) | NOTHING |
| **shared_widget** | [`flags.1?true`](type/true) | NOTHING |
| **invert_media** | [`flags.6?true`](type/true) | NOTHING |
| <mark>width</mark> | [`int`](type/int) | NOTHING |
| <mark>height</mark> | [`int`](type/int) | NOTHING |
| <mark>html</mark> | [`string`](type/string) | NOTHING |
| **public_data** | [`flags.2?string`](type/string) | NOTHING |
| **chat_data** | [`flags.3?string`](type/string) | NOTHING |
| **reply_markup** | [`flags.4?ReplyMarkup`](type/ReplyMarkup) | NOTHING |
| <mark>message</mark> | [`string`](type/string) | NOTHING |
| **entities** | [`flags.5?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageWidget(
	allow_queries : true,
	shared_widget : true,
	invert_media : true,
	width : 6,
	height : 17,
	html : 'aopPLhCq8Zkz4UMv',
	public_data : '1JmDbCe4rvgW2lRp',
	chat_data : '82ypb9FUTfdLgYmq',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	message : '2X06Q1EstnRFGTfg',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 99,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 69,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 14,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 29,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 84,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 94,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 7,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 76,
			language : 'v630rPiZAWhbNJyu',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 55,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : -6794124279807656171,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 26,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 96,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 97,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 45,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 14,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 25,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 28,
			document_id : 2751781553726936183,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 32,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 77,
			date : 100,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 100,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 58,
			old_text : 'Ght0IWMDY6eO98ER',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 7,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 58,
		),
	),
);
```