# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 225

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
	id : 38,
	version : 'OiQGNkp90oscDmBn',
	text : 'pdwJXLQOUWxciHIN',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 18,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 43,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 52,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 76,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 61,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 29,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 38,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 11,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 75,
			language : 'pxMgea8qvJPWzdjb',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 24,
			user_id : 8436516841086099389,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 96,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 46,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 27,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 8,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 57,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 99,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 70,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 68,
			document_id : -2557737505650949029,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 19,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 44,
			date : 45,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 86,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 77,
			old_text : '8RiMgb2wSOG3L751',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 59,
		),
	),
	document : $client->documentEmpty(
		id : -3128485492390947741,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -2181284454430125195,
	),
);
```