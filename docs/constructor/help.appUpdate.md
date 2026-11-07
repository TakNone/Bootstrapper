# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 233

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
	id : 25,
	version : 'VCMF7gjtu1KTr4i9',
	text : 'FUaSyvzMeJ5xPBuA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 23,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 45,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 39,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 9,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 100,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 36,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 97,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 30,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 37,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 95,
			language : 'Nc3b0d1IzuxRtXFJ',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 82,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 64,
			user_id : -114413885700437820,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 12,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 8,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 93,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 99,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 63,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 3,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 74,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 75,
			document_id : 6169153457314352915,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 5,
		),
		$client->messageEntityFormattedDate(
			relative : true,
			short_time : true,
			long_time : true,
			short_date : true,
			long_date : true,
			day_of_week : true,
			offset : 0,
			length : 23,
			date : 15,
		),
		$client->messageEntityDiffInsert(
			offset : 0,
			length : 51,
		),
		$client->messageEntityDiffReplace(
			offset : 0,
			length : 81,
			old_text : 'PWKqvd9jTLeYnz0S',
		),
		$client->messageEntityDiffDelete(
			offset : 0,
			length : 83,
		),
		$client->messageEntityTonAddress(
			offset : 0,
			length : 84,
		),
	),
	document : $client->documentEmpty(
		id : 3469775683285354184,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -8458095385521049249,
	),
);
```