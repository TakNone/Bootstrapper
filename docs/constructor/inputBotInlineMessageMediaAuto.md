# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 218

```tl
inputBotInlineMessageMediaAuto#3380c786 flags:# invert_media:flags.3?true message:string entities:flags.1?Vector<MessageEntity> reply_markup:flags.2?ReplyMarkup = InputBotInlineMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : 'y5zAsDdJ9f1tlwQH',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 25,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 97,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 21,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 64,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 1,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 31,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 53,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 55,
			language : 'Bb7VdzOy0Sv5aEIr',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 42,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : -5408574126013183789,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 92,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 44,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 57,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 19,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 80,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 51,
			document_id : -3000303131402851560,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 70,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```