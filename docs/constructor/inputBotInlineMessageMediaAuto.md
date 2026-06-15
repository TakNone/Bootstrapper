# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 227

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Caption |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageMediaAuto(
	invert_media : true,
	message : 'b0BEMyRzNCaTmL2A',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 87,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 83,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 85,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 98,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 97,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 88,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 89,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 97,
			language : 'V5LbtcKB6TdM9awg',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 51,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : 4031262961905175387,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 95,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 28,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 51,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 60,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 99,
			document_id : -8948267299243382183,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 28,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 78,
			date : 34,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 38,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 72,
			old_text : 'koRsVnDIjYQhc3tT',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 28,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```