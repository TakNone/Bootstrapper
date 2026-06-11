# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 227

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
	id : 31,
	version : 'zuqaj8tE4FO9VSW6',
	text : 'Z4Pja1xvHKDmXWVk',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 26,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 9,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 55,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 68,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 32,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 51,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 42,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 30,
			language : 'K9Qn4Sa2lbCtNioT',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 16,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 88,
			user_id : -4397041724470634479,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 83,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 45,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 95,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 58,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 94,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 61,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 44,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 59,
			document_id : -5427924001909681354,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 43,
			date : 59,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 93,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 27,
			old_text : 'z9QtrfC1RO3KZWig',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 57,
		),
	),
	document : $client->documentEmpty(
		id : -5542240952236780764,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -2748397766716931914,
	),
);
```