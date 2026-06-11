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
	message : 'JNzQMpTE71xb2StF',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 27,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 87,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 7,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 83,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 44,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 93,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 43,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 25,
			language : 'OGAgJm1PMyC6Qj30',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 76,
			user_id : 1545349148378849972,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 49,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 32,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 40,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 88,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 56,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 43,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 58,
			document_id : 81679321136388049,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 69,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 49,
			date : 80,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 53,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 42,
			old_text : 'Dgcxi6SdvAZrLnP7',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 24,
		),
	),
	title : 'mXZfJkt8iHYjwoDM',
);
```