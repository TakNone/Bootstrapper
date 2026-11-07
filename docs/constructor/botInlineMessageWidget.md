# botInlineMessageWidget

**Layer** : 233

```tl
botInlineMessageWidget#baa17834 flags:# invert_media:flags.5?true width:int height:int payload:bytes public_data:flags.0?string public_data_hash:flags.0?long chat_data:flags.1?string reply_markup:flags.2?ReplyMarkup widget_id:flags.3?long message:string entities:flags.4?Vector<MessageEntity> = BotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **invert_media** | [`flags.5?true`](type/true) | NOTHING |
| <mark>width</mark> | [`int`](type/int) | NOTHING |
| <mark>height</mark> | [`int`](type/int) | NOTHING |
| <mark>payload</mark> | [`bytes`](type/bytes) | NOTHING |
| **public_data** | [`flags.0?string`](type/string) | NOTHING |
| **public_data_hash** | [`flags.0?long`](type/long) | NOTHING |
| **chat_data** | [`flags.1?string`](type/string) | NOTHING |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | NOTHING |
| **widget_id** | [`flags.3?long`](type/long) | NOTHING |
| <mark>message</mark> | [`string`](type/string) | NOTHING |
| **entities** | [`flags.4?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |

---

## Type

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageWidget(
	invert_media : true,
	width : 5,
	height : 72,
	payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	public_data : 'rKUmAnxMs5eNkEPZ',
	public_data_hash : -1066622933834073847,
	chat_data : 'E3C9OjlQ4Bnh5sMa',
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
	widget_id : -120618775495582971,
	message : 'bjKlDP1qio27Oz9c',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 12,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 47,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 53,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 42,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 72,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 34,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 48,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 22,
			language : 'YWL1PwOf6cQndGrv',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 14,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 1,
			user_id : -339173617293786916,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 72,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 72,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 60,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 59,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 98,
			document_id : 2033537931321897029,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 79,
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
			date : 96,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 76,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 35,
			old_text : 'eKGuPZQ0EiWkzpxc',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 26,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 77,
		),
	),
);
```