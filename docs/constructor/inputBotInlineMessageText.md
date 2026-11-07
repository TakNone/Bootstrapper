# inputBotInlineMessageText

**Description** : *Simple text message*

**Layer** : 229

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
	message : 'uFwgmbUoI5kiPf8y',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 52,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 37,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 97,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 33,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 6,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 12,
			language : '601sQTa5vc9kte2x',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 61,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 28,
			user_id : -8343128572613156683,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 49,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 73,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 30,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 24,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 36,
			document_id : -1339128691922403459,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 77,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 98,
			date : 29,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 18,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 24,
			old_text : '8uwLOfSEhtN4sCG9',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 44,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```