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
	id : 70,
	version : '5Bp6IAXGavYRn9CT',
	text : 'BNzv4kyhX83fuRSP',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 16,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 2,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 35,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 34,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 21,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 0,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 6,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 4,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 46,
			language : 'x7zjD6JgXfa4c0un',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 81,
			user_id : -5213418971071330388,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 53,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 5,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 14,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 51,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 14,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 43,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 81,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : 2918777306620885055,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 63,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 2,
			date : 85,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 49,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 72,
			old_text : 't9WeVxlbSu7dZQGo',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 21,
		),
	),
	document : $client->documentEmpty(
		id : -1944945094516792532,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -9037091676432080279,
	),
);
```