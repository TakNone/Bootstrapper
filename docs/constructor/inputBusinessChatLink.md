# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 227

```tl
inputBusinessChatLink#11679fa7 flags:# message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string = InputBusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |

---

## Type

[InputBusinessChatLink](type/InputBusinessChatLink)

---

## Example

```php
$inputBusinessChatLink = $client->inputBusinessChatLink(
	message : 'WKlBI6s2bMOdxy7f',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 6,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 14,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 71,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 96,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 8,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 66,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 9,
			language : 'bFgey9zHLVtvM32Z',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 53,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 72,
			user_id : -9157299308533119585,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 64,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 34,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 14,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 100,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 62,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 42,
			document_id : 5487528471997532452,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 24,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 79,
			date : 17,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 13,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 27,
			old_text : 'xqR30vYin4KcDSmL',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 70,
		),
	),
	title : 'YHlq2fxCQKvBytOh',
);
```