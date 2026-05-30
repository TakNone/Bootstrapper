# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 225

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
	message : 'AHGuvtLQRNokOwID',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 59,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 41,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 34,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 7,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 78,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 69,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 78,
			language : 'vcZH6PaCnVFpqEUK',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 99,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 10,
			user_id : -2034217885213509064,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 66,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 18,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 27,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 5,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 4,
			document_id : 5652566320456554392,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 11,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 7,
			date : 79,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 18,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 88,
			old_text : '9rNpZMPnXsktWD2c',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 98,
		),
	),
	title : 'AtuIT829MWdxNpci',
);
```