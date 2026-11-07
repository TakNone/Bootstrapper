# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 229

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_not_skip** | [`flags.0?true`](type/true) | Unskippable, the new info must be shown to the user (with a popup or something else) |
| <mark>id</mark> | [`int`](type/int) | Update ID |
| <mark>version</mark> | [`string`](type/string) | New version name |
| <mark>text</mark> | [`string`](type/string) | Text description of the update |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **document** | [`flags.1?Document`](type/Document) | Application binary |
| **url** | [`flags.2?string`](type/string) | Application download URL |
| **sticker** | [`flags.3?Document`](type/Document) | Associated sticker |

---

## Type

[help.AppUpdate](type/help.AppUpdate)

---

## Example

```php
$helpAppUpdate = $client->help->appUpdate(
	can_not_skip : true,
	id : 51,
	version : 'l8t7yFdi0QgEaRpz',
	text : 'JstBDgziKLEwenM8',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 57,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 49,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 17,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 0,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 23,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 40,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 35,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 92,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 28,
			language : 'ImT7rHOAVzD5s9CU',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 14,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 15,
			user_id : -7722103446585407981,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 0,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 16,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 99,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 59,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 98,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 95,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 81,
			document_id : -206972903797506635,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 58,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 87,
			date : 84,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 10,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 36,
			old_text : 'GwYe4hUDTZX0LCVc',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
	document : $client->documentEmpty(
		id : 2432637981887709704,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : 5882064273071980125,
	),
);
```