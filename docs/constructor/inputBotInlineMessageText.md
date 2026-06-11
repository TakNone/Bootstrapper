# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 227

```tl
inputBotInlineMessageText#3dcd7a87 flags:# no_webpage:flags.0?true invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **no_webpage** | [`flags.0?true`](type/true) | Disable webpage preview |
| **invert_media** | [`flags.3?true`](type/true) | If set, any eventual webpage preview will be shown on top of the message instead of at the bottom |
| <mark>message</mark> | [`string`](type/string) | Message |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **reply_markup** | [`flags.2?ReplyMarkup`](type/ReplyMarkup) | Inline keyboard |

---

## Type

[InputBotInlineMessage](type/InputBotInlineMessage)

---

## Example

```php
$inputBotInlineMessage = $client->inputBotInlineMessageText(
	no_webpage : true,
	invert_media : true,
	message : 'E0x94VgOsHUom82f',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 37,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 18,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 46,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 100,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 68,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 36,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 17,
			language : 'SQflEsI8aXTj6qFJ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 8,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 29,
			user_id : 5233455851032106728,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 56,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 69,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 5,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 13,
			document_id : 1912430276919697182,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 82,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 80,
			date : 56,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 74,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 2,
			old_text : 'yzJBmCQp1ofX6EtO',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 96,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```