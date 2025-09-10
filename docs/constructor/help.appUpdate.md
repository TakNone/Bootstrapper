# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 214

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 15,
	version : 'YMcBEw5flHnqs6Ae',
	text : 'vlHJomViUIeFWK75',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 4,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 45,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 60,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 43,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 79,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 68,
			language : 'bLWRd57nMJHifXrk',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 20,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 4,
			user_id : -4791709429581571571,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 43,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 22,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 41,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 94,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 90,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 0,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 75,
			document_id : -1070437766168562142,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 60,
		),
	),
	document : $client->documentEmpty(
		id : 1839526061171825975,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -4896254513477576565,
	),
);
```