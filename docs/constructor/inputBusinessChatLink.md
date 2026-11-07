# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 233

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
	message : 'xaF7PHloS385Mvuy',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 8,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 16,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 45,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 96,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 6,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 100,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 98,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 81,
			language : 'vnzQskTa9VyR8trw',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 53,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : 6634450097776014076,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 3,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 69,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 36,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 50,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 98,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 96,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 83,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 74,
			document_id : 7311465854479964861,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 6,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 38,
			date : 60,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 91,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 86,
			old_text : 'xfIsTb7ziDeComhM',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 1,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 99,
		),
	),
	title : 'P91WRSLmJirKbFQU',
);
```