# botInlineMessageMediaAuto

**Description** : *Send whatever media is attached to the botInlineMediaResult*

**Layer** : 233

```tl
botInlineMessageMediaAuto#764cf810 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = BotInlineMessage;
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

[BotInlineMessage](type/BotInlineMessage)

---

## Example

```php
$botInlineMessage = $client->botInlineMessageMediaAuto(
	invert_media : true,
	message : 'Tlb9Xgy7zVBuHmtj',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 85,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 59,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 71,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 13,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 89,
			language : 'BklMxPgSNEo3aZKb',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 34,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 9,
			user_id : 2592060871124963317,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 71,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 39,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 97,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 81,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 71,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 9,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 69,
			document_id : -4564111086399005047,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 97,
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
			date : 27,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 74,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 98,
			old_text : '2HKunwYTP36vWVxm',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 94,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 56,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```