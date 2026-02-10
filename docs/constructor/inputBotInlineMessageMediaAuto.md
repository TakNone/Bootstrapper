# inputBotInlineMessageMediaAuto

**Description** : *A media*

**Layer** : 222

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
	message : 'PhLuqYIbRNsafDi8',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 20,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 91,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 38,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 95,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 47,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 66,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 42,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 38,
			language : '3hWQPcuKGw1C4NgI',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 98,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 79,
			user_id : 1594384290054082801,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 52,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 74,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 50,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 45,
			document_id : -3301948579039534978,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 55,
		),
	),
	reply_markup : $client->replyKeyboardHide(
		selective : true,
	),
);
```